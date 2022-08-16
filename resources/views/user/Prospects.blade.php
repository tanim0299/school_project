@extends('user.index')
@section('content')




<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


   <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">সম্ভাবনা</li>
      <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>SL.</th>
                <th>Date</th>
                <th>Title</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>


              @php

              $i=0;
              @endphp

              @if(isset($view))
              @foreach($view as $notices)

              @php $i++; @endphp


              <tr style="font-size: 12px;">
                <td>{{ $i }}</td>
                <td><a href="{{ url('view_prospects/'.$notices->id) }}" style="text-decoration: none;color: black">{{ $notices->date }}</a></td>
                <td><a href="{{ url('view_prospects/'.$notices->id) }}" style="text-decoration: none;color: black">{{ $notices->title }}</a></td>
                <td>
                  <a href="{{ url('view_prospects/'.$notices->id) }}" class="btn btn-success btn-sm">View</a>
                </td>
              </tr>


              @endforeach
              @endif


             
          </table>

        </div>

      </li>

    </ul>
  </div>
</div>





</div>
</div>








@endsection


