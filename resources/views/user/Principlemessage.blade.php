@extends('user.index')
@section('content')



<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

   <div class="col-sm-9 col-12">


     <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">প্রধান শিক্ষকের বার্তা</li>
      </ul>
      
      <div class="image" style="text-align:center!important;">
          <img src="{{ url($view->image) }}" class="img-fluid p-2" style="max-height:300px;">
      </div>
      <div class="name" style="text-align: center;margin-top:20px;font-size:20px;">
        <p>{{$view->name}}</p>
      </div>
      <div>
          {!!$view->details!!}
      </div>
      
   </div>
 </div>




 <div class="col-sm-3 col-12">
  @include('user.sidebar')

</div>





</div>
</div>
</div>




@endsection