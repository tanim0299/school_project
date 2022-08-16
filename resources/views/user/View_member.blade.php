@extends('user.index')
@section('content')


<div class="container">
	<div class="col-sm-12 col-12" id="mainpage">
		<div class="row">

			<div class="col-sm-9 col-12">

				<center>
					<div class="col-sm-12">

						<img src="{{ url($view->image) }}" style="height: 200px;border-radius:10%;border:1px solid black;"> 
					</div> 
				</center> 
				<hr>

				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<td width="100">Name</td>
								<td width="3" align="center">:</td>
								<td width="230">{{$view->name}}</td>
							</tr>

							<tr>
								<td>Designation</td>
								<td align="center">:</td>
								<td>{{$view->designation}}</td>
							</tr>

							<tr>
								<td>Profession</td>
								<td align="center">:</td>
								<td>{{$view->profession}}</td>
							</tr>


							<tr>
								<td>Father's Name</td>
								<td align="center">:</td>
								<td>{{$view->father_name}}</td>
							</tr>	


							<tr>
								<td>Mother's Name</td>
								<td align="center">:</td>
								<td>{{$view->mother_name}}</td>
							</tr>	


							<tr>
								<td>Mobile</td>
								<td align="center">:</td>
								<td>{{$view->mobile}}</td>
							</tr>

							<tr>
								<td>Email</td>
								<td align="center">:</td>
								<td>{{$view->email}}</td>
							</tr>	

							
							<tr>
								<td>Duration</td>
								<td align="center">:</td>
								<td>{{$view->duration}}</td>
							</tr>

							
							<tr>
								<td>Address</td>
								<td align="center">:</td>
								<td>{!! $view->address !!}</td>
							</tr>



						</tbody>
					</table>
				</div>






			</div>




			<div class="col-sm-3 col-12">
				@include('user.sidebar')

			</div>





		</div>
	</div>
</div>




@endsection