@extends('user.index')
@section('content')


<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
   <div class="row">

    <div class="col-sm-9 col-12">
        

      <ul class="list-group p-0">
       

      <li class="list-group-item">
        <div class="col-sm-12 col-12 p-0">
            <ul class="list-group p-0">
                <li class="list-group-item font-weight-bold bg-success text-light" id="about">শিক্ষকবৃন্দের তথ্য</li>
              </ul>
          <div class="row">
              
            @if($teacherview)
            @foreach($teacherview as $view)
            <div class="col-sm-6 col-12 mt-3" data-aos="fade-right" data-aos-duration="2000">
              <table class="table table-bordered "id="studenttable">
                <tr>
                 <td colspan="2">
                  <center><img src="{{ url($view->image) }}" class="img-fluid rounded" id="" style="max-height: 100px"><br></center>
                </td>
              
              </tr>
              
               <tr>
                  <th>Name</th>
                <td>{{$view->name}}</td>
              </tr>

              <tr>
                <th>Designation</th>
                <td>{{$view->designation}}</td>
              </tr>
              <tr>
                <th>Mobile</th>
                <td>{{$view->mobile}}</td>
              </tr>

              <tr>
                <th>Email</th>
                <td>{{$view->email}}</td>
              </tr>

              <tr>
                <td colspan="3"><center><a href="{{url('View_teacherinfo')}}/{{$view->id}}" class="btn btn-outline-success btn-sm">DETAILS</a></center></td> 
              </tr>               
            </table>
          </div>
            @endforeach
            @endif



        </div>
      </div>
    
    </li>
  </ul>
  <br>
  
 
</div>

<div class="col-sm-3 col-12">
  @include('user.sidebar')
</div>



</div> 
</div>




</div><!-------End Container------------->




@endsection



