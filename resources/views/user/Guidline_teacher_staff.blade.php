@extends('user.index')
@section('content')




<div class="container">
  <div class="col-sm-12 col-12" id="mainpage">


   <div class="col-sm-12 col-12 p-0"  data-aos="fade-in" data-aos-duration="2000" >
    <ul class="list-group p-0">
      <li class="list-group-item font-weight-bold bg-success text-light" id="about">GUIDLINE FOR TEACHER & STAFF</li>
      <li class="list-group-item">

        <div class="table table-responsive">
          <table id="example" class="display table-bordered" style="width:100%">
            <thead>
              <tr style="font-size: 15px;">
                <th>SL.</th>
                <th>Title</th>
                <th>Date</th>
                <th>Download</th>
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
                <td><a href="{{ asset('Guidline-view') }}/{{ $notices->id }}" style="text-decoration: none;color: black">{{ $notices->title }}</a></td>
                <td><a href="{{ asset('Guidline-view') }}/{{ $notices->id }}" style="text-decoration: none;color: black">{{ $notices->date }}</a></td>
                <td><a  href="{{ url($notices->image) }}" class="btn btn-sm btn-danger" download="{{$notices->title}}" ><img src="{{ asset('public/frontend/') }}/img/pdf_icon.png" class="img-fluid"></a></td>
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


