@extends('user.index')
@section('content')


<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

   <div class="col-sm-9 col-12">


     <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">LIBRARY INFORMATION</li>
      </ul>
      <li class="list-group-item">
        <div style="font-size: 14px; line-height: 25px; text-align: justify;">
         @if(isset($view))
         {!! $view->library_information !!}
         @endif

       </div>

     </li>



   </div>
 </div>



 <div class="col-sm-3 col-12">
  @include('user.sidebar')

</div>



</div>
</div>
</div>



@endsection