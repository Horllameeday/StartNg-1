<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Courses;
use App\RegisteredCourses;
use App\User;
use App\Review;
use App\CourseContent;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
            $role = auth()->user()->role;
            if ($role == 2){
                $user_role = 'admin';
                $data = array(
                    'courses' => Courses::orderBy('created_at','asc')->paginate(5),
                    'registered_courses' => RegisteredCourses::all(),
                    'users' => User::all(),
                );
            }
            else{
                $user_role = ($role == 1) ? 'tutor' : 'user';
                $data = array(
                    'courses' => Courses::where('active', 1)->paginate(10),
                    'registered' => RegisteredCourses::where('user_id', auth()->user()->id)->get()
                );
            } 
        }
        else{
            $user_role = 'course';
            $data = array(
                'courses' => Courses::where('active', 1)->paginate(10),
            );
        }
          

        return view("$user_role.courses")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
            $users = User::all();
        }
        else{
            return back()->with('error', 'Unauthorized');
        }
        
        return view("$user_role.create-course")->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'tutor'=>'required'
        ]);

        $course = new Courses;
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');     
        $course->user_id = $request->input('tutor');
        $course->save();
        
        return redirect('dashboard')->with('success','Course Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        
        if($course){
            if(auth()->user()){
                $role = auth()->user()->role;
                if ($role == 2){
                    $user_role = 'admin';
                    $registered_courses = RegisteredCourses::where('course_id', $id)->get();
            
                    $data = array(
                        'course' => $course,
                        'number' => count($registered_courses),
                        'users' => User::all(),
                        'reviews' => $course->reviews,
                        'contents' => $course->contents
                    );
                }
                elseif ($role == 1){
                    $user_role = 'tutor';
                    $registered_courses = RegisteredCourses::where('course_id', $id)->get();
                    $mine = Course::where(['id'=>$id, 'user_id'=>auth()->user()->id])->exists();
            
                    $data = array(
                        'course' => $course,
                        'number' => count($registered_courses),
                        'users' => User::all(),
                        'mine' => $mine,
                        'reviews' => $course->reviews,
                        'contents' => $course->contents
                    );
                }
                elseif ($role == 0){
                    $user_role = 'user';
                    $user_id = auth()->user()->id;
                    $data = array(
                        'course' => $course,
                        'registered' => RegisteredCourses::where(['course_id'=>$id, 'user_id'=>$user_id])->exists(),
                        'contents' => $course->contents
                    );
                }
            }
            else{
                $user_role = 'course';
                $data = array(
                    'course' => $course,
                    'contents' => $course->contents
                );
            }
        }
        else{
            return back()->with('error', 'Course not found');
        }
        return view("$user_role.show-course")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = auth()->user()->role;
        $user_id = auth()->user()->id;
        $course = Course::find($id);

        if ($role == 2){
            $user_role = 'admin';
        }
        elseif ($role == 1){
            if ($user_id == $course->user_id){
                $user_role = 'tutor';
            }
            else{
                return back()->with('error', 'This is not your course');
            }
        }
        else{
            return back()->with('error', 'Unauthorized');
        }

        $data = array(
            'users' => User::all(),
            'course' => $course
        );
        
        return view("$user_role.edit-course")->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'duration'=>'required',
        ]);

        $course = Courses::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');
        if ($request->input('tutor')){
            $course->user_id = $request->input('tutor');
        }
        $course->save();
        
        return back()->with('success',"$course->title Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $role = auth()->user()->role;
        $user_id = auth()->user()->id;
        $course = Courses::find($id);

        if (empty($course)) {
            return back()->with('error', 'Course not Found');
        }

        elseif ($role == 2){
            $course->active = ($course->active == 0) ? 1 : 0;
            $action = ($course->active == 1) ? "enabled" : "disabled";
            $course->save();
        }

        elseif ($role == 1){
            if ($course->user_id==$user_id){
                $course->active = ($course->active == 0) ? 1 : 0;
                $action = ($course->active == 1) ? "enabled" : "disabled";
                $course->save();
            }
            else{
                return back()->with('error', "$course->title is not your course");
            }
        }

        else{
            return back()->with('error', 'Unauthorized');
        }

        $data = array(
            'users' => User::all(),
            'course' => $course
        );
        
        return back()->with('success', "$course->title $action successfully");
    }

    public function registerCourses($id)
    {
        $check = Courses::where('id',$id)->exists();
        if($check){
            $role = auth()->user()->role;
            if($role==0){
                $post = RegisteredCourses::where('user_id',auth()->user()->id)
                ->where('course_id',$id)->exists();

                if($post){
                    return back()->with('error', 'You Have Previously Registered for the Course');
                }
                else{
                    $course = Course::find($id);
                    $user = User::find(auth()->user()->id);
                    $data = array(
                        'course' => $course,
                        'user' => $user
                    );
                    return view("user.payment")->with($data);
                }
            }
            else{
                return back()->with('error', 'You cannot perform this operation as a Tutor');
            }
        }
        else{
            return back()->with('error', 'Course does not exist');
        }
    }

    public function myCourses()
    {
        $role = auth()->user()->role;
        if ($role == 0){
            $myCourses = RegisteredCourses::where('user_id', auth()->user()->id)->get();
            $courses = Courses::all();

            $data = array(
                'myCourses' => $myCourses,
                'courses' => $courses,
                'users' => User::all()
            );
            return view('user.my-courses')->with($data);
        }
        else{
            return back()->with('error', 'You cannot perform this operation as a Tutor');
        }
    }
}