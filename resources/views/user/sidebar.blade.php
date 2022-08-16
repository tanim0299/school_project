
@php
$principle     = DB::table('principle_message')->first();
$viceprinciple = DB::table('viceprinciple_message')->first();
$president = DB::table('presidant_message')->first();
$settings = DB::table('settings')->first();
@endphp


@if(isset($president))

@if(request()->Is('President_Message'))

@else

<div class="col-sm-12 col-12 p-0">
 <ul class="list-group">
  <li class="list-group-item" id="featureheads">সভাপতির বাণী</li>
</ul>
<li class="list-group-item p-0 pt-2" id="padd">
  <a href="{{ url('message-from-head') }}"><center><img src="{{ url($president->image) }}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
  <center><span class="head">{{ $president->name }}<br><a href="{{ url('President_Message') }}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
</li>
</div>
@endif
@endif



@if(isset($principle))

@if(request()->Is('message-from-head'))

@else

<div class="col-sm-12 col-12 p-0" style="margin-top:10px;">
 <ul class="list-group">
  <li class="list-group-item" id="featureheads">প্রধান শিক্ষকের বাণী</li>
</ul>
<li class="list-group-item p-0 pt-2" id="padd">
  <a href="{{ url('message-from-head') }}"><center><img src="{{ url($principle->image) }}" class="img-fluid" style="max-height: 200px;padding-bottom:5px;"></center></a>
  <center><span class="head">{{ $principle->name }}<br><a href="{{ url('message-from-head') }}" class="btn btn-success btn-sm btn-block">বিস্তারিত</a></span></center>
</li>
</div>
@endif
@endif



{{-- @if(isset($viceprinciple))

<div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
  <li class="list-group-item" id="featureheads">{{ $viceprinciple->title }}</li>
</ul>
<li class="list-group-item p-0 pt-2" id="padd">
  <a href="{{ url('Vice-principle-message') }}"><center><img src="{{ url($viceprinciple->image) }}" class="img-fluid" style="max-height: 200px;"></center></a>
  <center><span class="head">{{ $viceprinciple->name }}<br><a href="{{ url('Vice-principle-message') }}" class="details">Message...</a></span></center>
</li>
</div>

@endif
 --}}




@php 
$uselink = DB::table('usefull_link')->get();
@endphp


<div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
  <ul class="list-group">
   <li class="list-group-item" id="featureheads">গুরুত্বপূর্ণ লিংক</li>
 </ul>
 <div class="feature">

  @if($uselink)
  @foreach($uselink as $v)
  <a href="{{ $v->url }}" target="_blank"><li style='font-size:12px;'><span uk-icon="icon: triangle-right; ratio: 0.7"></span>&nbsp;&nbsp;{{ $v->title }}</li></a>
  @endforeach
  @endif

</div>
</div>






<div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads"> গুগল ম্যাপ </li>
 </ul> 
 <li class="list-group-item p-0 pt-2" id="padd" style="overflow: hidden">
  <center>
  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1298.1117352101548!2d91.51827034727364!3d23.037924608940685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf22d39228290580f!2z4Kac4Ka-4Kar4KawIOCmh-CmruCmvuCmriDgpobgpqbgprDgp43gprYg4KaJ4Kaa4KeN4KaaIOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sen!2sbd!4v1660462209175!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
  {!!$settings->map!!}
      
      <br></center>

</li>

</div>



 
<div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads">অফিসিয়াল ফ্যান পেইজ</li>
   <li class="list-group-item p-0 pt-2" id="padd">
    <center>
        
      {!! $settings->facebook !!}
  </li>
</ul> 
</div>

{{-- 


<div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads">করোনাভাইরাস প্রতিরোধে</li>
   <li class="list-group-item p-0 pt-2" id="padd">
    <center><a href="#"><img src="{{ asset('public/frontend/') }}/img/c.jpg" class="img-fluid"></a><br></center>

    <div class="mt-2">
     <iframe width="100%" height="150" src="https://www.youtube.com/embed/GVPJHDp29tg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>

 </li>
</ul> 
</div>




<div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads">করোনা ট্রেসার বিডি</li>
   <li class="list-group-item p-0 pt-2" id="padd">
    <center><a href="#"><img src="{{ asset('public/frontend/') }}/img/t.jpg" class="img-fluid"></a><br></center>
    
  </li>
</ul> 
</div>




 <div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads">বন্যার সময় কি করণীয়</li>
   <li class="list-group-item p-0 pt-2" id="padd">

    <div>
      <iframe width="100%" height="150" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
  </li>
</ul> 
</div> --}}


{{-- <div class="col-sm-12 col-12 p-0 mt-2">
 <ul class="list-group">
   <li class="list-group-item" id="featureheads">একদেশ</li>
   <li class="list-group-item p-0 pt-2" id="padd">
    <center><a href="#"><img src="{{ asset('public/frontend/') }}/img/a.jpg" class="img-fluid"></a><br></center>
    
  </li>
</ul> 
</div>

 --}}




<div class="col-sm-12 col-12 p-0 mt-3" data-aos="fade-in" data-aos-duration="1000">
 <ul class="list-group">
   <li class="list-group-item" id="featurehead">জাতীয় সংগীত</li>
 <iframe width="248" height="150" src="https://www.youtube.com/embed/SjefET6W3q4?start=13" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </ul>
  </div>

