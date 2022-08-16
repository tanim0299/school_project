
@extends('user.index')
@section('content')



<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
  <div class="row">

    <div class="col-sm-9 col-12" >

      <ul class="list-group p-0">
       <li class="list-group-item font-weight-bold bg-success text-light" id="about">{{$data->title}}</li>
       <li class="list-group-item">

        <h5>{{$data->title}} @if(isset($data->image))<a href="{{ url($data->image) }}" class="btn btn-sm btn-danger float-right" download="{{$data->title}}"> Download</a>@endif</h5><br>

        @if(isset($data->image))
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="{{ url($data->image) }}" type='application/pdf' width='100%' height='100%'></object>
        </div>
        @endif
      </li>  

      <span>{!! $data->description !!}</span>

      <div class="addthis_inline_share_toolbox"></div>


      

    </ul>
    <br>

  </div>





  <div class="col-sm-3 col-12">
    @include('user.sidebar')

  </div>





</div>
</div>
</div>




@endsection