@extends('user.index')
@section('content')


<div class="container">
 <div class="col-sm-12 col-12" id="mainpage">
   <div class="row">

    <div class="col-sm-9 col-12">

      <ul class="list-group p-0">
       <li class="list-group-item">
        <span class="student"><span uk-icon="icon: info; ratio: 1.2"></span>&nbsp;&nbsp;EX-STAFF INFORMATION</span>
      </li>

      <li class="list-group-item">
        <div class="col-sm-12 col-12 p-0">
          <div class="row">

            @if($teacherview)
            @foreach($teacherview as $view)
            <div class="col-sm-6 col-12 mt-3" data-aos="fade-right" data-aos-duration="2000">
              <table class="table table-bordered "id="studenttable">
                <tr>
                 <td rowspan="4">
                  <center><img src="{{ url($view->image) }}" class="img-fluid" id="" style="width: 100px;height: 100px"><br></center>
                </td>
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
          </div><!-----------End Teacher Information----------------------->
          @endforeach
          @endif



        </div>
      </div>
      <div class="float-right">
        {{ $teacherview->links() }}
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



