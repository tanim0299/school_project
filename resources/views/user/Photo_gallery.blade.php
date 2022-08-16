@extends('user.index')
@section('content')




<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

   <div class="col-sm-9 col-12">


     <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">ফটো গ্যালারী</li>
      </ul>
      <li class="list-group-item">
        <div class="row" uk-lightbox>


          @if(isset($view))
          @foreach($view as $v)


          <div class="col-sm-6 col-12 p-0">
           <a href="{{ url($v->image) }}"><img src="{{ url($v->image) }}" alt="" class="img-fluid photoimg"></a>
           <div class="uk-overlay uk-overlay-primary uk-position-bottom p-3">
             <p>{{ $v->title }}</p>
           </div>
         </div>


         @endforeach
         @endif


       




       </div>

        <div class="mt-4 float-right">
            {{ $view->links() }}

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

