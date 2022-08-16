@extends('user.index')
@section('content')


<div class="container">


  <div class="col-sm-12 col-12" id="mainpage">
    <div class="row">

      <div class="col-sm-9 col-12">
        {{--
        <div class="col-sm-12 col-12 p-0 govtnews">
         <a href="https://www.youtube.com/watch?v=317_54bDctA" target="_blank"> <img src="{{ asset('public/frontend/') }}/img/sekh.jpeg" class="img-fluid"> </a>
         <marquee scrollamount="5" onmouseover="this.stop();"onmouseout="this.start();">
          <div class="mt-2">
           নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন <a href="https://bit.ly/coronatracerbd">https://bit.ly/coronatracerbd</a> । নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a href="https://ekdesh.ekpay.gov.bd">https://ekdesh.ekpay.gov.bd</a> অথবা “Ek Desh” অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন <a href="https://corona.gov.bd">https://corona.gov.bd</a>
         </div>
       </marquee>
     </div>
    --}}
     





     <div class="col-sm-12 col-12 p-0 pb-2 cnotice">
      <div class="row">
        <div class="col-md-2 col-12 d-sm-block d-none">
         <img src="{{ asset('public/frontend/') }}/img/notice.png" class="img-fluid">
       </div>

       <div class="col-md-10 col-11 pt-3 p-4">
        <strong class="text-success">নোটিশ বোর্ড</strong><br>

        <div class="mt-3">

          @if(isset($noticeview))
          @foreach($noticeview as $notices)

          <li><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp;<a href="{{ asset('notice-view') }}/{{ $notices->id }}" >{{ $notices->title }}</a></li>

          @endforeach
          @endif

        </div>

        <div class="mt-4">
          <a href="{{ url('/Notices') }}" class="float-right all">সকল নোটিশ</a>
        </div>


      </div>
    </div>

  </div><!-------------End Notice---------->




  <div class="col-md-12 col-12 p-0 mt-3 about">
    <ul class="list-group p-0">
      <li class="list-group-item" id="header">প্রতিষ্ঠান সম্পর্কে</li>
      <div class="details2 p-2 border">
          @php
          $about_us = Str::limit($about->About_Massage,900);
          @endphp
          {!!$about_us!!}
     </div>
     <a href="{{url('/About_institute')}}" class="btn btn-success btn-sm">আরো পড়ুন...</a>

   </ul>
 </div>




 <div class="col-sm-12 col-12 p-0">
  <div class="row">




    <div class="col-sm-6 col-12 ">
     <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
      <p class="session">&nbsp;&nbsp;আমাদের সম্পর্কে</p>
      <div class="row">
        <div class="col-sm-3 col-3">
          <img src="{{ asset('public/frontend/') }}/img/1.jpg" class="img-fluid" id="iconss">         
        </div>

        <div class="col-sm-9 col-9 p-0">
          <ul class="menus">
            <li><i class="fa fa-caret-right"></i><a href="{{ url('About_institute') }}">প্রতিষ্ঠান সম্পর্কে</a></li>
            <li><i class="fa fa-caret-right"></i><a href="{{ url('Mission_vission') }}">লক্ষ্য ও উদ্দেশ্য</a></li>
            <li><i class="fa fa-caret-right"></i><a href="{{ url('History') }}">ইতিহাস</a></li>
            <li><i class="fa fa-caret-right"></i><a href="{{ url('Contact_us') }}">যোগাযোগ করুন</a></li>

          </ul>              
        </div>            
      </div>        
    </div>  
  </div><!-------------------------End Card----------------------->





  <div class="col-sm-6 col-12 ">
   <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
    <p class="session">&nbsp;&nbsp;প্রশাসনিক তথ্য</p>
    <div class="row">
      <div class="col-sm-3 col-3">
        <img src="{{ asset('public/frontend/') }}/img/2.jpg" class="img-fluid" id="iconss">         
      </div>

      <div class="col-sm-9 col-9 p-0">
        <ul class="menus">
          <li><i class="fa fa-caret-right"></i><a href="{{ url('message-from-head') }}">প্রধান শিক্ষকের বাণী</a></li>
          <li><i class="fa fa-caret-right"></i><a href="{{ url('vice-principal-message') }}">সহকারী প্রধান শিক্ষকের বাণী</a></li>
          <li><i class="fa fa-caret-right"></i><a href="{{ url('Founder_Message') }}">প্রতিষ্ঠাতার বাণী</a></li>
          <li><i class="fa fa-caret-right"></i><a href="{{ url('President_Message') }}">সভাপতির বাণী</a></li>

        </ul>              
      </div>            
    </div>        
  </div>  
</div><!-------------------------End Card----------------------->





<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;শিক্ষক ও কর্মচারী</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/3.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Teacher_info') }}">শিক্ষকবৃন্দের তথ্য</a></li>
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Staff_info') }}">কর্মচারীদের তথ্য</a></li>
        <li><i class="fa fa-caret-right"></i><a href="{{ url('/Ex_member_list') }}" target="blank">প্রাক্তন সদস্যদের তথ্য</a></li>
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->



<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;একাডেমিক তথ্য</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/4.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Notices') }}">নোটিশ সমূহ</a></li>
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Events') }}">ইভেন্টস</a></li>
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Library_Info') }}">পাঠাগার তথ্য</a></li>
       <li><i class="fa fa-caret-right"></i><a href="{{ url('Hostel_Info') }}">ছাত্রাবাস তথ্য</a></li>
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->





<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;পরীক্ষার তথ্য</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/5.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Exam_rules') }}">পরীক্ষার নিয়মাবলী</a></li>
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Exam_routine') }}">পরীক্ষার সময়সূচী</a></li>
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Syllabas') }}">সিলেবাস</a></li>
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Lesson_plan') }}">পাঠ পরিকল্পনা</a></li>
  
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->


<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;ফলাফল</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/6.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
       <li><i class="fa fa-caret-right"></i><a href="{{ url('/') }}">অভ্যন্তরীণ ফলাফল</a></li>
       <li><i class="fa fa-caret-right"></i><a href="https://eboardresults.com/v2/home" target="blank">পাবলিক পরীক্ষার ফলাফল</a></li>
       <li><i class="fa fa-caret-right"></i><a href="{{ url('') }}">সরকারি স্কলারশীপ এর ফলাফল</a></li>
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->




<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;গ্যালরি</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/7.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
          
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Photo_gallery') }}">ফটো গ্যালারী</a></li>
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Video_gallery') }}">ভিডিও গ্যালারী</a></li>
     <li><i class="fa fa-caret-right"></i><a href="{{ url('Magazine') }}">ম্যাগাজিন</a></li>
      
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->





<div class="col-sm-6 col-12 ">
 <div class="col-sm-12 col-12 pt-3 pb-2" id="cart" data-aos="fade-in" data-aos-duration="1000" >
  <p class="session">&nbsp;&nbsp;অন্যান্য</p>
  <div class="row">
    <div class="col-sm-3 col-3">
      <img src="{{ asset('public/frontend/') }}/img/3.jpg" class="img-fluid" id="iconss">         
    </div>

    <div class="col-sm-9 col-9 p-0">
      <ul class="menus">
    <li><i class="fa fa-caret-right"></i><a  href="{{ url('Events') }}">ইভেন্টস</a></li>
     <li><i class="fa fa-caret-right"></i><a  href="{{ url('Sports') }}">খেলাধুলা</a></li>
     <li><i class="fa fa-caret-right"></i><a  href="{{ url('Cultural_Activities') }}">সাংস্কৃতিক কার্যক্রম</a></li>
     <li><i class="fa fa-caret-right"></i><a  href="{{ url('Scouts') }}">স্কাউটস</a></li>
     </ul>              
   </div>            
 </div>        
</div>  
</div><!-------------------------End Card----------------------->








</div>  
</div>
<div> 
@php 
  $view = DB::table('settings')->first();
@endphp

{{-- <iframe width="100%" height="400" src="https://www.youtube.com/embed/cO2lQi8ws5w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
<div style="margin-top: 20px;">
  {!! $view->vedio !!}

</div>
</div>




</div><!-------------End Mainpage----------->





<div class="col-sm-3 col-12">

  @include('user.sidebar')

</div>


</div>   
</div><!-----------------------End sidebar---------------------->



</div><!-------End Container----------->




@endsection