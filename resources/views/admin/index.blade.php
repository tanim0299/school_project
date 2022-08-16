<!DOCTYPE html>
<html lang="en">
@php 
$settings = DB::table('settings')->where('id',1)->first();
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{ url($settings->image) }}">
    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />
    <link href="{{ asset('public/admin') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="{{ asset('public/admin') }}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/css/main.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/vendor/select2/css/select2.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/vendor/date-picker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="{{ asset('public/admin') }}/assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!--summernote-->
    <link href="{{ asset('public/admin') }}/assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">


    <style type="text/css">
        body {
            font-family: 'AdorshoLipi', Arial, sans-serif;
        }
    
        .form-group label{font-size: 12px; color: #585858}
        .form-group input{height: 45px;border-radius: 0px!important; border: 1px solid lightgray;}
        .form-group textarea{border-radius: 0px!important; border: 1px solid lightgray;}
        .form-group input:focus{border:1px solid #00b894;}
        .form-group textarea:focus{border:1px solid #00b894;}
        .card-title{font-weight: bold!important; font-size: 15px!important; color: #585858!important;}
        ::placeholder {opacity: 0.4!important;  color: gray!important; }
        .head{font-size: 22px; text-transform: uppercase;}
        .selecttextfill{height: 45px!important; border-radius: 0px; border: 1px solid lightgray;}
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


        .uk-notification-message {
            position: relative;
            padding: 15px;
            background: #00b894;
            color: #fff;
            font-size: 15px;
            line-height: 1.4;
            cursor: pointer;
        }

        #bs4-table{font-size: 13px!important;}
        .main-content{overflow: auto!important;}




    </style>

</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <header class="app-header navbar bg-dark">

        <!--brand start-->
        <div class="navbar-brand bg-dark">
            <a class="" href="{{ url('/home') }}">
                <img src="{{ url($settings->image) }}" srcset="{{ url($settings->image) }}" alt="" style="height: 30px;">
                &nbsp;&nbsp;<span style="color: #f1f1f1; font-size:18px; text-transform: uppercase; font-weight: bold;"><span class="text-warning">অ্যাডমিন</span> প্যানেল</span>
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
                    <img src="{{ url($settings->image) }}" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="{{ url($settings->image) }}" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">{{ Auth()->user()->name }}</h5>
                                <span>{{ Auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class=" ti-unlock"></i> লগআউট</a>
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
    <div class="left-sidebar mt-4 pt-3" >
      <nav class="sidebar-menu" style="height:100%;">
        <ul id="nav-accordion">
            <li>
             <a href="{{ url('/home') }}" class="@if(request()->path() === 'home'){{'active'}}@else @endif">
                <i class="fa fa-dashboard"></i>
                <span>ড্যাশবোর্ড</span>
            </a>
        </li>


        <li class="nav-title">
            <h5 class="text-uppercase">অ্যাডমিন ইনফরমেশন ---------</h5>
        </li>

        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'createadmin' || request()->path() === 'viewadmin'){{'active'}}@else @endif">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>অ্যাডমিন তথ্য</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('/createadmin') }}">অ্যাডমিন তৈরি করুন</a></li>
                <li><a  href="{{ url('/viewadmin') }}">অ্যাডমিন দেখুন</a></li>
            </ul>
        </li>



        <li class="nav-title">
            <h5 class="text-uppercase">ওয়েবসাইট এর তথ্য সমূহ ---------</h5>
        </li>





        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addlibraryinfo' || request()->path() === 'addhostelinfo' || request()->path() === 'adduseful_link'){{'active'}}@else @endif">

                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>ওয়েবসাইট এর তথ্য</span>
            </a>
            <ul class="sub">
                {{-- <li><a  href="{{ url('addlibraryinfo') }}">Library Info.</a></li>
                <li><a  href="{{ url('addhostelinfo') }}">Hostel Info.</a></li> --}}
                <li><a  href="{{ url('adduseful_link') }}">গুরুত্বপূর্ণ লিংক</a></li>
            </ul>
        </li>





        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addcontact' || request()->path() === 'addmission_vision' || request()->path() === 'addinstituteinfo' || request()->path() === 'addhistory' || request()->path() === 'addabout' || request()->path() === 'addcitizencharter' || request()->path() === 'addstudentinfochart' || request()->path() === 'addinfrastructure' || request()->path() === 'addyearlyworkingplan' || request()->path() === 'addprincipalintro' || request()->path() === 'addviceprincipalintro' ){{'active'}}@else @endif">


                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>আমাদের সম্পর্কে</span>
            </a>
            <ul class="sub">
               <li><a  href="{{ url('addabout') }}">আমাদের সম্পর্কে</a></li>
               <li><a  href="{{ url('addmission_vision') }}">লক্ষ্য ও উদ্দেশ্য</a></li>
               {{--              <li><a  href="{{ url('addinstituteinfo') }}">Institute Info.</a></li> --}}
               <li><a  href="{{ url('addhistory') }}">ইতিহাস</a></a></li>
               <li><a  href="{{ url('addcitizencharter') }}">সিটিজেন চার্টার</a></li>
               <li><a  href="{{ url('addstudentinfochart') }}">ছাত্র - ছাত্রী তথ্য চার্ট</a></li>
               <li><a  href="{{ url('addinfrastructure') }}">ভৌতঅবকাঠামো</a></li>
               <li><a  href="{{ url('addyearlyworkingplan') }}">বার্ষিক কর্ম পরিকল্পনা</a></li>
               <li><a  href="{{ url('addprincipalintro') }}">প্রধান শিক্ষক পরিচিতি</a></li>
               <li><a  href="{{ url('addviceprincipalintro') }}">সহকারি প্রধান শিক্ষক পরিচিতি</a></li>
               <li><a  href="{{ url('addcontact') }}">যোগাযোগ তথ্য</a></li>
               
           </ul>
       </li>






       <li class="sub-menu">
        <a href="javascript:;" class="@if(request()->path() === 'addprinciple_message' || request()->path() === 'addviceprinciple_message' || request()->path() === 'addfounder_message' || request()->path() === 'addpresidant_message'|| request()->path() === 'addlistmember'|| request()->path() === 'viewlistmember'|| request()->path() === 'addguidline'|| request()->path() === 'view_guidline'){{'active'}}@else @endif">


            <i class="fa fa-suitcase" aria-hidden="true"></i>
            <span>প্রশাসনিক তথ্য</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ url('addprinciple_message') }}">প্রধান শিক্ষকের বাণী</a></li>
            <li><a  href="{{ url('addviceprinciple_message') }}">সহকারি প্রধান শিক্ষকের বাণী</a></li>
            <li><a  href="{{ url('addfounder_message') }}">প্রতিষ্ঠাতার বাণী</a></li>
            <li><a  href="{{ url('addpresidant_message') }}">সভাপতির বাণী</a></li>
            <li><a  href="{{ url('addlistmember') }}">সদস্য যোগ করুন</a></li>
            <li><a  href="{{ url('viewlistmember') }}">সদস্য তালিকা দেখুন</a></li>
            <li><a  href="{{ url('addguidline') }}">গাইডলাইন শিক্ষক - কর্মচারী</a></li>
            <li><a  href="{{ url('view_guidline') }}">গাইডলাইন শিক্ষক - কর্মচারী দেখুন</a></li>
        </ul>
    </li>


    <li class="sub-menu">
        <a href="javascript:;" class="@if(request()->path() === 'addruleregulation' || request()->path() === 'addacademiccalender' || request()->path() === 'addclassroutine' || request()->path() === 'addonlineclassroutine' || request()->path() === 'addbooklist' || request()->path() === 'adduniform' || request()->path() === 'addfees' || request()->path() === 'addholidaylist'){{'active'}}@else @endif">
            <i class="fa fa-suitcase" aria-hidden="true"></i>
            <span>একাডেমিক তথ্যসমূহ</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ url('addruleregulation') }}">নিয়মকানুন</a></li>
            <li><a  href="{{ url('addacademiccalender') }}">শিক্ষা বর্ষপঞ্জি</a></li>
            <li><a  href="{{ url('addclassroutine') }}">ক্লাস রুটিন</a></li>
            <li><a  href="{{ url('addonlineclassroutine') }}">অনলাইন ক্লাস রুটিন</a></li>
            <li><a  href="{{ url('addbooklist') }}">বই তালিকা</a></li>
            <li><a  href="{{ url('adduniform') }}">ইউনিফর্ম</a></li>
            <li><a  href="{{ url('addfees') }}">ফি সমূহ</a></li>
            <li><a  href="{{ url('addholidaylist') }}">ছুটির দিন</a></li>
        </ul>
    </li>



    <li class="sub-menu">
        <a href="javascript:;" class="@if(request()->path() === 'addProspects' || request()->path() === 'addAdmissionrules' || request()->path() === 'addAdmissionprocedure' || request()->path() === 'addAdmissionresult' || request()->path() === 'addAdmissiontestquestion' || request()->path() === 'addTransferprocedure'){{'active'}}@else @endif">
            <i class="fa fa-suitcase" aria-hidden="true"></i>
            <span>ভর্তি সংক্রান্ত তথ্য</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ url('addProspects') }}">প্রসফেকটস</a></li>
            <li><a  href="{{ url('addAdmissionrules') }}">ভর্তির নিয়মাবলী</a></li>
            <li><a  href="{{ url('addAdmissionprocedure') }}">ভর্তির পদ্ধতি</a></li>
                {{-- <li><a  href="{{ url('') }}">Online Application</a></li>
                <li><a  href="{{ url('') }}">Admin Card</a></li> --}}
                <li><a  href="{{ url('addAdmissionresult') }}">ভর্তি পরীক্ষার ফলাফল</a></li>
                <li><a  href="{{ url('addAdmissiontestquestion') }}">ভর্তির পরীক্ষার প্রশ্নপত্র</a></li>
                <li><a  href="{{ url('addTransferprocedure') }}">ট্রান্সফার পদ্ধতি</a></li>
            </ul>
        </li>




        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addexamrules' || request()->path() === 'addexamroutine' || request()->path() === 'addsyllabas' || request()->path() === 'addlessonplan' || request()->path() === 'addsuggestion' ){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>পরীক্ষা সংক্রান্ত তথ্য</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addexamrules') }}">পরীক্ষার নিয়মাবলী</a></li>
                <li><a  href="{{ url('addexamroutine') }}">পরীক্ষার রুটিন</a></li>
                <li><a  href="{{ url('addsyllabas') }}">সিলেবাস</a></li>
                <li><a  href="{{ url('addlessonplan') }}">পাঠ পরিকল্পনা</a></li>
                <li><a  href="{{ url('addsuggestion') }}">সাজেশন্স</a></li>
            </ul>
        </li>



        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addphoto_gallery' || request()->path() === 'addvideo_gallery' || request()->path() === 'addmagazine'){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>গ্যালারী তথ্যসমূহ</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addphoto_gallery') }}">ফটো গ্যালারী</a></li>
                <li><a  href="{{ url('addvideo_gallery') }}">ভিডিও গ্যালারী</a></li>
                <li><a  href="{{ url('addmagazine') }}">ম্যাগাজিন</a></li>
            </ul>
        </li>




        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addsports' || request()->path() === 'addcultural' || request()->path() === 'addscouts' || request()->path() === 'addgirls_guide' || request()->path() === 'addBNCC' || request()->path() === 'addred_crescent' || request()->path() === 'addstudent_cafinet' || request()->path() === 'adddebate' || request()->path() === 'addscience_fair' || request()->path() === 'addstudy_tour' || request()->path() === 'addlanguage_club' || request()->path() === 'addstudy_tour' || request()->path() === 'addscience_fair' || request()->path() === 'add_section' || request()->path() === 'add_section' || request()->path() === 'addcomputer_club'){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>সহপাঠ্যক্রম কার্যাবলি</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addsports') }}">খেলাধুলা</a></li>
                <li><a  href="{{ url('addcultural') }}">সাংস্কৃতিক কার্যক্রম</a></li>
                <li><a  href="{{ url('addscouts') }}">স্কাউটস</a></li>
                <li><a  href="{{ url('addgirls_guide') }}">গার্লস গাইড</a></li>
                <li><a  href="{{ url('addBNCC') }}">বিএনসিসি</a></li>
                <li><a  href="{{ url('addred_crescent') }}">রেড ক্রিসেন্ট</a></li>
                <li><a  href="{{ url('addstudent_cafinet') }}">ছাত্র / ছাত্রী ক্যাফিনেট</a></li>
                <li><a  href="{{ url('adddebate') }}">বিতর্ক প্রতিযোগিতা</a></li>
                <li><a  href="{{ url('addlanguage_club') }}">ল্যাঙ্গুয়েজ ক্লাব</a></li>
                <li><a  href="{{ url('addstudy_tour') }}">শিক্ষা সফর</a></li>
                <li><a  href="{{ url('addscience_fair') }}">বিজ্ঞান মেলা</a></li>
                <li><a  href="{{ url('addcomputer_club') }}">কম্পিউটার ক্লাব</a></li>
            </ul>
        </li>





        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'add_class' || request()->path() === 'add_group' || request()->path() === 'add_section'){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>শ্রেণী সম্পর্কিত তথ্য</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('add_class') }}">শ্রেণী যোগ করুন</a></li>
                <li><a  href="{{ url('add_group') }}">গ্রুপ যোগ করুন</a></li>
                <li><a  href="{{ url('add_section') }}">বিভাগ যোগ করুন</a></li>
            </ul>
        </li>




        <li class="nav-title">
            <h5 class="text-uppercase">নোটিশ/ইভেন্ট তথ্য ---------</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addnotice' || request()->path() === 'view_notice'){{'active'}}@else @endif">

                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>নোটিশ সম্পর্কিত তথ্য</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addnotice') }}">নোটিশ যোগ করুন</a></li>
                <li><a  href="{{ url('view_notice') }}">নোটিশ দেখুন</a></li>
            </ul>
        </li>

        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addevent' || request()->path() === 'view_event'){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>ইভেন্ট</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addevent') }}">ইভেন্ট যোগ করুন</a></li>
                <li><a  href="{{ url('view_event') }}">ইভেন্ট দেখুন</a></li>
            </ul>
        </li>



        <li class="nav-title">
            <h5 class="text-uppercase">মুজিব কর্ণার সম্পর্কিত তথ্য ---</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'addphotos'){{'active'}}@else @endif">

                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>মুজিব কর্ণারে ছবি যুক্ত করুন</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('addphotos') }}">ছবি যুক্ত করুন</a></li>
            </ul>
        </li>





        <li class="nav-title">
            <h5 class="text-uppercase">শিক্ষক-কর্মচারীদের তথ্য ----------</h5>
        </li>



        <li class="sub-menu">
            <a href="javascript:;" class="@if(request()->path() === 'teacher_staff' || request()->path() === 'view_teacher_staff'|| request()->path() === 'department'){{'active'}}@else @endif">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>শিক্ষক - কর্মচারীদের তথ্য</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ url('adddepartment') }}">বিভাগ যুক্ত করুন</a></li>
                <li><a  href="{{ url('teacher_staff') }}">শিক্ষক -  কর্মচারী যুক্ত করুন</a></li>
                <li><a  href="{{ url('view_teacher_staff') }}">শিক্ষক - কর্মচারী দেখুন</a></li>
            </ul>
        </li>



        <li>
           <a href="{{ url('settings') }}" class="@if(request()->path() === 'settings'){{'active'}}@else @endif">
             <i class="fa fa-cogs" aria-hidden="true"></i>
             <span>সেটিংস</span>
         </a>
     </li>

{{-- 
     <li>
       <a href="{{ url('/our_backup_database') }}">
         <i class="fa fa-files-o" aria-hidden="true"></i>
         <span>Backup</span>
     </a>
 </li>
 --}}



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



@yield('content')




<!--===========footer start===========-->
<footer class="app-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <?php echo date('Y'); ?> © Developed By SBIT
            </div>
            <div class="col-4">
                <a href="#" class="float-right back-top">
                    <i class=" ti-arrow-circle-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--===========footer end===========-->

<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>



{{-- <script src="{{ asset('public/admin') }}/assets/vendor/jquery/jquery.min.js"></script> --}}
<script src="{{ asset('public/admin') }}/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/popper.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/lobicard/js/lobicard.js"></script>
<script class="include" type="text/javascript" src="{{ asset('public/admin') }}/assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/jquery.scrollTo.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/js/scripts.js"></script>

<script src="{{ asset('public/admin') }}/assets/vendor/select2/js/select2.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/select2-init.js"></script>

<script src="{{ asset('public/admin') }}/assets/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/date-picker-init.js"></script>

<script src="{{ asset('public/admin') }}/assets/vendor/data-tables/jquery.dataTables.min.js"></script>
<script src="{{ asset('public/admin') }}/assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>
<!--summernote-->
<script src="{{ asset('public/admin') }}/assets/vendor/summernote/summernote-bs4.min.js"></script>


<script>

  $('#summernote').summernote({
      height: 300,          

  });


  $('#summernote2').summernote({
      height: 100,          

  });




  $(document).ready(function() {
    $('#bs4-table').DataTable();
});

  $(document).ready(function() {
    $('#bs4-table2').DataTable();
} );


  $(document).ready(function() {
    $('#bs4-table3').DataTable();
} );

  $(document).ready(function() {
    $('#bs4-table4').DataTable();
} );
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
        toastr.info("{{ Session::get('messege') }}");
        break;
        case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
        case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
    @endif
</script>  

<script>  
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
            } else {
                swal("Safe Data!");
            }
        });
    });
</script>




</body>
</html>
