<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Blog 2</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        /* Style for Navbar Starts */
        
        .navbar-custom li a {
            color: #000;
        }
        
        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }
        
        .btn-success:hover {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }
        
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .custom-toggler.navbar-toggler {
            border-color: #000;
        }
        /* Style for Navbar Ends */
        /* Style for Footer Starts */
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
        
        a {
            text-decoration: none;
        }
        
        .deep {
            background: #3A0842;
            color: #fff;
        }
        
        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }
        
        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }
        
        .deep li {
            list-style: none;
        }
        
        .deep li a:hover {
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: none;
        }
        
        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }
        
        .icons i.fa.fa-twitter:hover {
            color: #00aced;
        }
        
        .icons i.fa.fa-facebook:hover {
            color: #3b5598;
        }
        
        .icons i.fa.fa-instagram:hover {
            color: #ed3833;
        }
        /* Style for Footer Ends */
        /* Style for Body */
        
        .top-body {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570899462/startng/Group_407_w6dqc9.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        
        .questions {
            background: #FFFFFF;
            border: 0.5px solid #D0D0D0;
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    @include('inc.navbar')

    <div class="container-fluid top-body pt-5 pb-5">
        <div class="col-md-8 offset-md-2 text-center pt-5 pb-5 mt-5 mb-5">
            <h2 class="mt-2 pb-5" style="color: #fff;">Welcome to StartNG Community</h2>
            <div class="input-group col-md-10 offset-md-1 mb-5">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="float-left">
                <p class="pt-5 pb-4"><span style="font-weight: bolder;">100</span> <span>Topics</span> <span class="ml-3" style="font-weight: bolder;">1002
                    </span> <span>Replies </span> <span class="ml-3" style="font-weight: bolder;"> 500
                    </span> <span>Members</span>
                </p>
            </div>
            <div class="float-right">

            </div>
        </div>
    </div>
    <hr>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-3">
                <p><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570900838/startng/fa-solid_check-circle_kinyyl.png" class="img-fluid"> <span>Find answers to your questions</span></p>
            </div>
            <div class="col-md-3">
                <p><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570900838/startng/fa-solid_check-circle_kinyyl.png" class="img-fluid"> <span>Stay up to date on latest topics</span></p>
            </div>
            <div class="col-md-3">
                <p><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570900838/startng/fa-solid_check-circle_kinyyl.png" class="img-fluid"> <span>Ask questions and help others</span></p>
            </div>
            <div class="col-md-3">
                <p class="mt-n2"><a href="{{route('faq')}}" class="btn btn-success">Ask your question</a> <span><a href=""><img
                                src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570901000/startng/ion-close-sharp_doi4s1.png"
                                class="img-fluid"></a></span></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card questions">
                    <div class="card-body">
                        <p><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570901441/startng/Group_375_pv8srr.png">
                            <span style="font-weight: bold;">I'm new here</span>
                        </p>
                        <p class="mt-n2">Get a quick overview of the community</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card questions">
                    <div class="card-body">
                        <p><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570901441/startng/Group_375_pv8srr.png">
                            <span style="font-weight: bold;">I have a question</span>
                        </p>
                        <p class="mt-n2">Browse questions and answers here</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card questions">
                    <div class="card-body">
                        <p><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570901441/startng/Group_375_pv8srr.png">
                            <span style="font-weight: bold;">I need course resources</span>
                        </p>
                        <p class="mt-n2">Browse thousands of materials here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="pt-4 pb-2">Recommended Discussions</h3>
        <div class="row">
            <div class="col-md-4">
                <ul style="list-style: none; font-weight: 400;">
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <ul style="list-style: none;">
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                    <li class="mt-3"><img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570902394/startng/octicon-comment-discussion_a68qxr.png">
                        <span>How did you learn about StartNG?</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="pt-4 pb-2">Upcoming Events</h3>
        <div class="card col-md-10 mt-2">

            <div class="row">
                <div class="col-md-2" style="background-color: #3A0842; color: #fff;">
                    <p class="text-center pt-5">21 <br> October</p>
                </div>
                <div class="col-md-7">
                    <p class="mt-4"><span style="font-weight: bold;">Online</span> Monday 21st October 2019</p>
                    <p style="font-weight: bold;">Registration Deadline</p>
                    <p class="pb-2">StartNG Course registration ends on this date. Lorem ipsum curabitur vitae nunc sed velit dignissim sodales ut eu sem </p>
                </div>
            </div>

        </div>
        <div class="card col-md-10 mt-4">

            <div class="row">
                <div class="col-md-2" style="background-color: #3A0842; color: #fff;">
                    <p class="text-center pt-5">21 <br> October</p>
                </div>
                <div class="col-md-7">
                    <p class="mt-4"><span style="font-weight: bold;">Online</span> Monday 21st October 2019</p>
                    <p><span style="font-weight: bold;">Meetup:</span> Lagos Centre</p>
                    <p class="pb-2">StartNG Course registration ends on this date. Lorem ipsum curabitur vitae nunc sed velit dignissim sodales ut eu sem </p>
                </div>
            </div>

        </div>
        <div class="card col-md-10 mt-4">

            <div class="row">
                <div class="col-md-2" style="background-color: #3A0842; color: #fff;">
                    <p class="text-center pt-5">21 <br> October</p>
                </div>
                <div class="col-md-7">
                    <p class="mt-4"><span style="font-weight: bold;">Online</span> Monday 21st October 2019</p>
                    <p><span style="font-weight: bold;">Meetup:</span> Lagos Centre</p>
                    <p class="pb-2">StartNG Course registration ends on this date. Lorem ipsum curabitur vitae nunc sed velit dignissim sodales ut eu sem </p>
                </div>
            </div>

        </div>
    </div>

    <div class="container pt-5">
        <p class="mt-5">
            <span>
                <a style="color: #000; text-decoration: none; border-bottom: 3px solid #3A0842;" href="">Recently
                    active</a>
            </span>
            <span class="ml-3">
                <a style="color: #000;" href="">Forums</a>
            </span>
            <span class="ml-3">
                <a style="color: #000;" href="">Help
                    others</a>
            </span>
        </p>
        <div class="card col-md-10">
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>
            <hr>
            <p class="pt-4"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570903999/startng/Ellipse_28_zbqscb.png" class="img-fluid ml-2"> <span class="ml-3" style="color: #084482;">Omolara Atoyebi</span>
                <span class="ml-3" style="font-weight: 200;">Student</span>
            </p>
            <p class="ml-5 pl-4" style="font-weight: bold;">Slack status update</p>
            <p class="ml-5 pl-4">I’m finding it hard to update my status on Slack. Who can walk me through this? Lorem ipsum curabitur vitae nunc sed velit</p>
            <p class="ml-5 pl-4" style="font-weight: 200;">Community Help & Questions</p>

            <button class="btn btn-success mb-3" href="">Show more activity</button>
        </div>
    </div>

    <!-- Footer -->
    @include('inc.footer')

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>