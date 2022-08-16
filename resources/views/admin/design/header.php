<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
    <link rel="icon" type="image/png" href="assets/img/logo.png">

    <title>AlHelal Academy</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/vendor/select2/css/select2.css" rel="stylesheet">
    <link href="assets/vendor/date-picker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!--summernote-->
    <link href="assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">


    <style type="text/css">
        .form-group label{font-size: 12px; color: #585858}
        .form-group input{height: 45px;border-radius: 0px!important;}
        .form-group textarea{border-radius: 0px!important;}
        .form-group input:focus{border:1px solid #00b894;}
        .form-group textarea:focus{border:1px solid #00b894;}
        .card-title{font-weight: bold!important; font-size: 15px!important; color: #585858!important;}
        ::placeholder {opacity: 0.4!important;  color: gray!important; }
        .head{font-size: 22px; text-transform: uppercase;}
        .selecttextfill{height: 45px!important; border-radius: 0px;}
        .selecttextfill:focus{border:1px solid #00b894; }
        .select2-container .select2-selection--single .select2-selection__rendered{
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            top: -5px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            left: 50%;
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 65%;
            width: 0;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border-radius: 0px;
            border: 1px solid #e8e8e8;
            height: 45px;
            font-size: 13px;
        }

        .bgtable{
            background: #33cabb;
        }
        thead,tbody{font-size: 13px!important;}

        .custom p{font-size: 14px; font-weight: 400; color: #585858;}
        .text-dark{color: #585858!important;}


    </style>

</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <header class="app-header navbar bg-dark">

        <!--brand start-->
        <div class="navbar-brand bg-dark">
            <a class="" href="home.php">
                <img src="assets/img/logo-dark.png" srcset="assets/img/logo.png" alt="" style="height: 30px;">
                &nbsp;&nbsp;<span style="color: #f1f1f1; font-size:18px; text-transform: uppercase; font-weight: bold;"><span class="text-warning">Admin</span> Panel</span>
            </a>
        </div>
        <!--brand end-->

        <!--left side nav toggle start-->
        <ul class="nav navbar-nav mr-auto ">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler text-light" type="button"><i class="ti-align-right"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler text-light" href="#"><i class=" ti-align-right"></i></a>
            </li>
        </ul>
        <!--left side nav toggle end-->

        <!--right side nav start-->
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/user.png" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="assets/img/user.png" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">John Doe</h5>
                                <span>john@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href="login.php"><i class=" ti-unlock"></i> Logout</a>
                </div>
            </li>

            <!--right side toggler-->
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-rightside-toggler text-light" type="button"><i class="icon-options-vertical"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler right-sidebar-toggler text-light" href="#"><i class="icon-options-vertical"></i></a>
            </li>
        </ul>

        <!--right side nav end-->
    </header>
    <!--===========header end===========-->




    <!--left sidebar start-->
    <div class="left-sidebar mt-4 pt-3">
      <nav class="sidebar-menu" style="height: 100vh;">
        <ul id="nav-accordion">
            <li>
             <a href="home.php" class="active">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="nav-title">
            <h5 class="text-uppercase">Admin Information ---------</h5>
        </li>

        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Admin Informatiom</span>
            </a>
            <ul class="sub">
                <li><a  href="create_admin.php">Create Admin</a></li>
                <li><a  href="view_admin.php">View Admin</a></li>
            </ul>
        </li>



        <li class="nav-title">
            <h5 class="text-uppercase">Website Information ---------</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Website Information</span>
            </a>
            <ul class="sub">
                <li><a  href="contact.php">Contact</a></li>
                <li><a  href="contact.php">Mission & Vision</a></li>
                <li><a  href="school_info.php">School Info.</a></li>
                <li><a  href="contact.php">History</a></li>
                <li><a  href="contact.php">About School</a></li>
                <li><a  href="contact.php">Library Info.</a></li>
                <li><a  href="contact.php">Hostel Info.</a></li>
                <li><a  href="useful_link.php">Useful Link</a></li>
                <li><a  href="photo_gallery.php">Photo Gallery</a></li>
                <li><a  href="video_gallery.php">Video Gallery</a></li>
            </ul>
        </li>


        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Message From Head</span>
            </a>
            <ul class="sub">
                <li><a  href="principle_message.php">Principle Message</a></li>
                <li><a  href="principle_message.php">Vice-Principle Message</a></li>
                <li><a  href="principle_message.php">Founder Message</a></li>
                <li><a  href="principle_message.php">Presidant Message</a></li>
            </ul>
        </li>



        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Class Information</span>
            </a>
            <ul class="sub">
                <li><a  href="add_class.php">Add Class</a></li>
                <li><a  href="add_group.php">Add Group</a></li>
                <li><a  href="add_section.php">Add Section</a></li>
            </ul>
        </li>




        <li class="nav-title">
            <h5 class="text-uppercase">Notice/Event Info. ---------</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Notice Information</span>
            </a>
            <ul class="sub">
                <li><a  href="notice.php">Notice</a></li>
                <li><a  href="view_notice.php">View Notice</a></li>
            </ul>
        </li>




        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Event Information</span>
            </a>
            <ul class="sub">
                <li><a  href="event.php">Event</a></li>
                <li><a  href="view_event.php">View Event</a></li>
            </ul>
        </li>




        <li class="nav-title">
            <h5 class="text-uppercase">Teacher/Staff Info. ----------</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Teacher/Staff Info.</span>
            </a>
            <ul class="sub">
                <li><a  href="teacher_staff.php">Add Teacher/Staff</a></li>
                <li><a  href="view_teacher_staff.php">View Teacher/Staff</a></li>
            </ul>
        </li>









        <li>
           <a href="settings.php">
             <i class="fa fa-cogs" aria-hidden="true"></i>
             <span>Settings</span>
         </a>
     </li>


     <li>
       <a href="home.php">
         <i class="fa fa-files-o" aria-hidden="true"></i>
         <span>Backup</span>
     </a>
 </li>








 <br><br><br>





<!-- <li class="sub-menu">
    <a href="javascript:;">
        <i class="fa fa-laptop"></i>
        <span>Layouts</span>
    </a>
    <ul class="sub">
        <li><a  href="#">Boxed Page</a></li>
        <li><a  href="#">Horizontal Menu</a></li>
        <li><a  href="#">Different Color Top bar</a></li>
        <li><a  href="#">Mega Menu</a></li>
        <li><a  href="#">Language Switch Bar</a></li>
        <li><a  href="#" target="_blank">Email Template</a></li>
    </ul>
</li>

<li class="sub-menu">
    <a href="javascript:;" >
        <i class="fa fa-sitemap"></i>
        <span>Multi level Menu</span>
    </a>
    <ul class="sub">
      <li><a  href="javascript:;">Menu Item 1</a></li>
      <li class="sub-menu">
        <a  href="#">Menu Item 2</a>
        <ul class="sub">
            <li><a  href="javascript:;">Menu Item 2.1</a></li>
            <li class="sub-menu">
                <a  href="javascript:;">Menu Item 3</a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 3.1</a></li>
                    <li><a  href="javascript:;">Menu Item 3.2</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
</li>
-->
</ul>
</nav>
</div>



