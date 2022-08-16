@php
$setting  = DB::table('settings')->first();
@endphp

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $setting->name }}</title>
  <link rel="icon" href="{{ url($setting->image) }}" type="image/gif" sizes="16x16">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/') }}/css/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/') }}/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/') }}/style.css">
  <link href="{{ asset('public/frontend/') }}/css/bootstrap-4-navbar.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('public/frontend/') }}/css/sliderResponsive.css" rel="stylesheet" type="text/css">


  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/jquery-3.3.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/main.js"></script>
  
</head>
<style>
    .navbar-light .navbar-nav .nav-link{
        padding : 12px 12px;
    }
    p#est
    {
        font-size : 15px;
    }
    @media screen and (max-width : 968px)
    {
        p#est {
            text-align: left;
            /* left: 10px; */
            padding-left: 68px !important;
            font-size: 11px;
            margin-top: -18px !important;
        }
    }
</style>
<body>


  <div class="container">
    <div class="col-sm-12 col-12 bg-white pt-2">


     <div class="col-sm-12 col-12 topheader">
      <div class="row align-items-center">
        <div class="col-sm-6 col-12 text-sm-left text-center pt-2">
          <label><a href="{{url('/time_line')}}" class="surborno" target="blank"> সুবর্ণ জয়ন্তী ও  বঙ্গবন্ধু কর্ণার   </a></label>
        </div>
        <div class="col-sm-6 col-12 text-sm-right text-center">

          <li><a href="">অনলাইন এক্সাম</a></li>
          <li><a href="https://imgc.edu.bd/result/OnlineRegistration/RegistrationForm.php">ভর্তি</a></li>
          <li><a href="">ফলাফল</a></li>
          <li><a href="">ছাত্র ছাত্রী লগইন</a></li>

        </div>
      </div>
    </div><!-------Top Header End------->





    @php
    $slider = DB::table('photo_gallery')->where('type','1')->limit(20)->get();
    $mobileslider = DB::table('photo_gallery')->where('type','1')->first();
    $mobileslidermore = DB::table('photo_gallery')->where('type','1')->skip(1)->limit(20)->get();
    @endphp


    <div class="col-sm-12 col-12 p-0">
      <div class="slider" id="slider1">
        @if(isset($slider))
        @foreach($slider as $s)
        <div style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset($s->image) }}'); background-position: center; background-size: cover;"></div>

        @endforeach
        @endif

        <span class="titleBar">
         <a href="{{ url('/') }}"><img src="{{ url($setting->image) }}" class="img-fluid rounded"></a>&nbsp;&nbsp;<span>{{ $setting->name }} <p id="est" style="padding-left:90px;  margin-top: -25px;">প্রতিষ্ঠিত - {{$setting->est}} ইং</p></span><br>
       </span>
     </div>


     <div id="carouselExampleIndicators" class="carousel slide d-block d-sm-none" data-ride="carousel">
      <div class="carousel-inner">

        @if(isset($mobileslider))

        <div class="carousel-item active">
          <img src="{{ url($mobileslider->image) }}" class="d-block w-100">
        </div>

        @endif


        @if(isset($mobileslidermore))
        @foreach($mobileslidermore as $s)

        <div class="carousel-item">
          <img src="{{ url($s->image) }}" class="d-block w-100">
        </div>

        @endforeach
        @endif


      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div><!-----End Mobile Slider------>


  </div><!-------End Slider----->











  <nav class="navbar navbar-expand-lg navbar-light btco-hover-menu menubar" style="background: #fff; border-bottom: 1px solid #e5e5e5; padding: 0px; box-shadow: 0 1px 5px -2px #999;">


    <a class="navbar-brand d-sm-none d-block" style="color: #000; font-weight: bold;" href="{{ url('/') }}">Menu</a>

    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f4f4f4; color: #fff; padding: 5px 10px;">
      <span class="navbar-toggler-icon" style="color: #fff;"></span>
    </button>



    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true" style="font-size: 15px;"></i></a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            আমাদের সম্পর্কে
          </a>
          <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width: 700px;  max-width:100%;">

            <div class="col-md-12 col-12 dmenu mt-3">
                <div class="row">
                    <div class="col-md-4">
                         <li><a href="{{ url('About_institute') }}">প্রতিষ্ঠান সম্পর্কে</a></li>
             <li><a href="{{ url('Mission_vission') }}">লক্ষ্য এবং উদ্দেশ্য</a></li>
             <li><a href="{{ url('History') }}">ইতিহাস</a></li>
             <li><a href="{{ url('Citizen_charter') }}">সিটিজেন চার্টার</a></li>
              <li><a href="{{ url('Student_info_chart') }}">ছাত্র-ছাত্রী তথ্য </a></li>
                    </div>
                    
                    <div class="col-md-4">
                       
             <li><a href="{{ url('Infrastructure') }}">ভৌতঅবকাঠামো</a></li>
             <li><a href="{{ url('Yearly_working_plan') }}">বার্ষিক কর্ম পরিকল্পনা</a></li>          
             <li><a href="{{ url('head_intro') }}">প্রধান শিক্ষক পরিচিতি</a></li>
             <li><a href="{{ url('vice_principal_intro') }}">সহকারি প্রধান শিক্ষক পরিচিতি</a></li>
            </div>
                    
                 <div class="col-md-4">
               
                     <li><a href="{{ url('Teacher_info') }}">শিক্ষকবৃন্দের তথ্য</a></li>
                     <li><a href="{{ url('Staff_info') }}">কর্মচারীদের তথ্য</a></li>     
                     <li><a href="{{ url('Contact_us') }}">যোগাযোগের ঠিকানা</a></li>
                </div>
                    
                </div>
            
             
           </div>
         </ul>
       </li> 





       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          প্রশাসনিক তথ্য
        </a>
        <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

          <div class="col-md-12 col-12 dmenu mt-3">
           <li><a href="{{ url('message-from-head') }}">প্রধান শিক্ষকের বাণী</a></li>
       <li><a href="{{ url('vice-principal-message') }}">সহকারি প্রধান শিক্ষকের বাণী</a></li>
         
         <li><a href="{{ url('Founder_Message') }}">প্রতিষ্ঠাতার বাণী</a></li>
         <li><a href="{{ url('President_Message') }}">সভাপতির বাণী</a></li>
         <li><a href="{{ url('Managing_comittee') }}">পরিচালনা পর্ষদ তথ্য</a></li>
         <li><a href="{{ url('Chairman_list') }}">চেয়ারম্যান তালিকা</a></li>
         <li><a href="{{ url('Principle_list') }}">প্রধান শিক্ষকদের তালিকা</a></li>
         <li><a href="{{ url('Donars_list') }}">দাতা সদস্যদের তালিকা</a></li>
         <li><a href="{{ url('Ex_member_list') }}">প্রাক্তন সদস্যদের তালিকা</a></li>
       </div>
     </ul>
   </li> 


   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      শিক্ষক এবং কর্মচারী
    </a>
    <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

          <div class="col-md-12 col-12 dmenu mt-3">
       <li><a href="{{ url('Teacher_info') }}">শিক্ষকবৃন্দের তথ্য</a></li>
       
       <li><a href="{{ url('Staff_info') }}">কর্মচারীদের তথ্য</a></li>
       
     </div>
   </ul>
 </li> 

      <!--<li><a href="{{ url('Ex_Teacher_info') }}">Ex-Teacher Info.</a></li>-->
      <!--<li><a href="{{ url('Ex_Staff_info') }}">Ex-Staff Info.</a></li>-->
      <!--<li><a href="{{ url('Guidline_teacher_staff') }}">Guidline for Teacher/Staff</a></li>-->

 <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    একাডেমিক তথ্য
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

    <div class="col-md-12 col-12 dmenu mt-3">
      <li><a href="{{ url('Rules_regulation') }}">নিয়মকানুন</a></a></li>
      <li><a href="{{ url('Academic_Calender') }}">শিক্ষা বর্ষপঞ্জি</a></li>
      <li><a href="{{ url('Class_routine') }}">ক্লাস রুটিন</a></li>
      <li><a href="{{ url('Online_Classroutine') }}">অনলাইন ক্লাস রুটিন</a></li>
      <li><a href="{{ url('Book_list') }}">বই তালিকা</a></li>
      <li><a href="{{ url('Uniform') }}">ইউনিফর্ম</a></li>
      <li><a href="{{ url('Fees') }}">ফি সমূহ</a></li>
      <li><a href="{{ url('Holiday_list') }}">ছুটির তালিকা</a></li>
    </div>
  </ul>
</li> 



<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    সহপাঠ্যক্রম
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width: 500px;  max-width:100%;">
      

    <div class="col-md-12 col-12 dmenu mt-3">
        
        <div class="row">
                    <div class="col-md-6">
     <li><a  href="{{ url('Events') }}">ইভেন্টস</a></li>
     <li><a  href="{{ url('Sports') }}">খেলাধুলা</a></li>
     <li><a  href="{{ url('Cultural_Activities') }}">সাংস্কৃতিক কার্যক্রম</a></li>
        <li><a  href="{{ url('Scouts') }}">স্কাউটস</a></li>
     <li><a  href="{{ url('Girls_Guide') }}">গার্লস গাইড</a></li>
     <li><a  href="{{ url('BNCC') }}">বিএনসিসি</a></li>
     <li><a  href="{{ url('Red_Crescent') }}">রেড ক্রিসেন্ট</a></li>
     
     </div>
     
     <div class="col-md-6">
           
     <li><a  href="{{ url('Student_Cafinet') }}">ছাত্র - ছাত্রী ক্যাবিনেট</a></li>
     <li><a  href="{{ url('Debate') }}">বিতর্ক</a></li>
     <li><a  href="{{ url('Language_Club') }}">ল্যাঙ্গুয়েজ ক্লাব</a></li>
     <li><a  href="{{ url('Study_Tour') }}">শিক্ষা সফর</a></li>
     <li><a  href="{{ url('Science_Fair') }}">বিজ্ঞান মেলা</a></li>
     <li><a  href="{{ url('Computer_Club') }}">কম্পিউটার ক্লাব</a></li>
         
         </div>


   </div>
 </ul>
</li> 





<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ভর্তি সংক্রান্ত তথ্য
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

    <div class="col-md-12 col-12 dmenu mt-3">
      <li><a href="{{ url('Prospects') }}">প্রসফেকটস</a></li>
      <li><a href="{{ url('Admission_Rules') }}">ভর্তির নিয়মাবলী</a></li>
      <li><a href="{{ url('Admission_Procedure') }}">ভর্তির পদ্ধতি</a></li>
      <li><a href="{{ url('Admission_Result') }}">ভর্তির ফলাফল</a></li>
      <li><a href="{{ url('Admission_Question') }}">ভর্তি পরীক্ষার প্রশ্ন</a></li>
      <li><a href="{{ url('Transfer_Procedure') }}">ট্রান্সফার পদ্ধতি</a></li>
    </div>
  </ul>
</li> 





{{-- 
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Students Info.
  </a>


  <ul class="dropdown-menu bg-white" aria-labelledby="navbarDropdownMenuLink">
   <li><a class="dropdown-item dropdown-toggle" href="#">Six</a>
    <ul class="dropdown-menu bg-white">
      <li><a class="dropdown-item" href=""><span uk-icon="icon:  chevron-right; ratio: 0.8"></span>&nbsp;&nbsp;Commerce</a></li>

    </ul>
  </li>


</ul>
</li>
--}}




{{-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Academic
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

    <div class="col-md-12 col-12 dmenu mt-3">
     <li><a href="{{ url('Notices') }}">Notices</a></li>
     <li><a href="{{ url('Events') }}">Events</a></li>
     <li><a href="{{ url('Library_Info') }}">Library Info.</a></li>
     <li><a href="{{ url('Hostel_Info') }}">Hostel Info.</a></li>
   </div>
 </ul>
</li> 
--}}


<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    পরীক্ষা সংক্রান্ত তথ্য
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

    <div class="col-md-12 col-12 dmenu mt-3">
     <li><a href="{{ url('Exam_rules') }}">পরীক্ষার নিয়মাবলী</a></li>
     <li><a href="{{ url('Exam_routine') }}">পরীক্ষার সময়সূচী</a></li>
     <li><a href="{{ url('Syllabas') }}">সিলেবাস</a></li>
     <li><a href="{{ url('Lesson_plan') }}">পাঠ পরিকল্পনা</a></li>
     <li><a href="{{ url('Suggestion') }}">সাজেশন্স</a></li>
   </div>
 </ul>
</li> 


<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ফলাফল
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink">

    <div class="col-md-12 col-12 dmenu mt-3">
     <li><a href="{{ url('') }}">অভ্যন্তরীণ ফলাফল</a></li>
     <li><a href="https://eboardresults.com/v2/home" target="blank">পাবলিক পরীক্ষার ফলাফল</a></li>
     <!--<li><a href="{{ url('') }}">Govt. Scholarship Result</a></li>-->
   </div>
 </ul>
</li> 





<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    গ্যালারী
  </a>
  <ul class="dropdown-menu pb-3 bg-white" aria-labelledby="navbarDropdownMenuLink" style="min-width:180px;">

    <div class="col-md-12 col-12 dmenu mt-3">
     <li><a href="{{ url('Photo_gallery') }}">ফটো গ্যালারী</a></li>
     <li><a href="{{ url('Video_gallery') }}">ভিডিও গ্যালারী</a></li>
     <li><a href="{{ url('Magazine') }}">ম্যাগাজিন</a></li>
   </div>
 </ul>
</li> 
















</ul>

</div>
</nav>





</div>
</div><!-------------------End Container-------------------->







@yield('content')






<div class="container">

  <div class="col-sm-12 col-12 bg-white p-0 pt-5">
    <img src="{{ asset('public/frontend/') }}/img/footer_top_bg.png" class="img-fluid w-100">
  </div>


  <div class="col-sm-12 col-12 developerdiv">

    <center>
      
      <span class="develop">Developed by</span>&nbsp;&nbsp;<a href="http://sbit.com.bd/" target="blank" class="it">SKILL BASED IT - SBIT</a></center>

    </div>
    <!-----------end develop by---------->




  </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('public/frontend/') }}/js/bootstrap-4-navbar.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/jquery.nivo.slider.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/uikit.min.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/uikit-icons.min.js"></script>
  <script type="text/javascript" src="{{ asset('public/frontend/') }}/js/jquery.exzoom.js"></script>

  <script>
    AOS.init();      
    var preloader=document.getElementById('load');
    function myfunctions() {
      preloader.style.display='none';
    }

    $(document).ready(function() {
      $('#example').DataTable();
    } );


  </script>


  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="{{ asset('public/frontend/') }}/js/sliderResponsive.js"></script>




  <script>
    $(document).ready(function() {

      $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });

      $("#slider2").sliderResponsive({
        fadeSpeed: 300,
        autoPlay: "off",
        showArrows: "on",
        hideDots: "on"
      });

      $("#slider3").sliderResponsive({
        hoverZoom: "off",
        hideDots: "on"
      });

    }); 
  </script>


  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript" ></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
  


</body>
</html>