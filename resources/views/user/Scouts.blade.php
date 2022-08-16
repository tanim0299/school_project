@extends('user.index')
@section('content')


<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

   <div class="col-sm-9 col-12">


     <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
       <ul class="list-group p-0">
        <li class="list-group-item font-weight-bold bg-success text-light" id="about">স্কাউটস নিউজ</li>
      </ul>
      <li class="list-group-item pb-5">

        @if(isset($view))
        @foreach($view as $v)
        <div class="row mt-3 border p-3">
          <div class="col-md-3 col-12">
            <img src="{{ $v->image }}" class="img-fluid" style="max-height: 300px;">
          </div>   
          <div class="col-md-9 col-12">
            <h4><a href="{{ url('view_Scouts/'.$v->id) }}" class="text-dark">{{ $v->title }}</a></h4>
            <span style="color: gray;">{{ $v->date }}</span><br><br>
            <span>{!! substr($v->details,0,300) !!}...</span><br>
            
          </div>          
        </div>

        @endforeach
        @endif


        <div class="float-right mt-4">
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