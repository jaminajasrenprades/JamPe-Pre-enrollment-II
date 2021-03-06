<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/plugins/images/scis.png">
    <title>SCIS Pre-Enrollment</title>
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<style>
    table {
        width: 750px;
        border-collapse: collapse;
        margin:50px auto;
    }

    th {
        background: #71829e;
        color: white;
        font-weight: bold;
    }

    td, th {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 15px;
    }

    .label tr td label {
        display: block;
    }
</style>

<body>
    <div id="wrapper">
        <br>
        @include('layouts.nav')
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="/dashboard" class="waves-effect"><i class="	fa fa-dashboard fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/studentManagement" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Student Management</span></a>
                    </li>
                    <li>
                        <a href="/subjectManagement" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Subject Management</span></a>
                    </li>
                    <li>
                        <a href="/preenrollment" class="waves-effect"><i class="fa fa-address-card fa-fw" aria-hidden="true"></i><span class="hide-menu">Pre-Enrollment</span></a>
                    </li>
                    <li>
                        <a href="/petitions" class="waves-effect"><i class="	fa fa-folder-open fa-fw" aria-hidden="true"></i><span class="hide-menu">Petitions</span></a>
                    </li>
                    <li>
                        <a href="/overload" class="waves-effect"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Overload Requests</span></a>
                    </li>
                    <li>
                        <a href="/checklists" class="waves-effect"><i class="fa fa-calendar-check-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Checklists</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <ol class="breadcrumb" style="position: relative;left:-40%;">
                            <li><a href="/subjectManagement">Subject Management</a></li>
                            <li class="active">Subject Profile</li>
                        </ol>
                    </div>
                </div>

                @foreach($coursenumber as $coursenumber)
                    <?php
                    $course = $coursenumber->destitle;
                    $courses = $coursenumber->coursenumber;
                    $ter = $coursenumber->term;
                    $subject = DB::table('subjects')
                        ->join('pre_enroll', 'subjects.coursenumber', '=', 'pre_enroll.coursenumber')
                        ->select('pre_enroll.id_number')
                        ->where('subjects.destitle', '=', $course)
                        ->where('pre_enroll.term', '=', $ter)
                        ->get();
                    $number = count($subject);
                    $subjects = DB::table('pre_enroll')
                        ->join('students', 'pre_enroll.id_number', '=', 'students.id_number')
                        ->join('subjects', 'subjects.coursenumber', '=', 'pre_enroll.coursenumber')
                        ->where('pre_enroll.coursenumber', '=', $courses)
                        ->where('subjects.destitle', '=', $course)
                        ->where('pre_enroll.term', '=', $ter)->get();
                    ?>
                @endforeach
                <?php
                    if($number != 0)
                        {
                ?>
                <div style=" margin:0 auto; width:85%;">
                    <h4 style="text-align: center;">Course Number: {{$coursenumber->coursenumber}}</h4>
                    <div style="position: relative; margin-left: 2%; font-size: 110%; margin-top: 1%">
                        <p>Descriptive Title: {{$coursenumber->destitle}}</p>
                        <p>Units: {{$coursenumber->units}}</p>
                    </div>
                    <div style="position:relative; margin-left: 70%; font-size: 110%; margin-top: -5%">
                        <p>Term: {{$coursenumber->term}}</p>
                        <p>Total number of students who pre-enrolled: {{$number}}</p>
                    </div>
                </div>

                <div class="white-box" style="width: 85%; margin:0 auto;">
                    <div class="table-responsive" style="overflow-y:scroll; height:600px; width: 100%; margin-top: 1%; ">
                        <table class="table">
                            <tr>
                                <th>ID Number</th>
                                <th>Course & Year</th>
                                <th>Name</th>
                            </tr>
                            <tbody>
                            @foreach($subject as $subject)
                                <?php
                                $stu = $subject->id_number;
                                $stud = DB::table('students')->where('id_number', '=', $stu)->get();
                                ?>
                                @foreach($stud as $stud)
                            <tr>
                                <td>{{$stud->id_number}}</td>
                                <td>{{$stud->last_name}}, {{$stud->first_name}}</td>
                                <td>{{$stud->course}} {{$stud->year}}</td>
                            </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                 <?php
                            }
                 ?>
            </div>
            @include('footer.footer')
        </div>
    </div>
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="/js/jquery.slimscroll.js"></script>
    <script src="/js/waves.js"></script>
    <script src="/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <script src="/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="/plugins/bower_components/morrisjs/morris.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dashboard1.js"></script>
    <script src="/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

</body>
</html>