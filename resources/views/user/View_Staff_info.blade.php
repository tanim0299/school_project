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
								<td>Gender</td>
								<td align="center">:</td>
								<td>{{$view->gender}}</td>
							</tr>

							<tr>
								<td>Blood Group</td>
								<td align="center">:</td>
								<td>{{$view->blood}}</td>
							</tr>
							<tr>
								<td>Religion</td>
								<td align="center">:</td>
								<td>{{$view->religion}}</td>
							</tr>

							<tr>
								<td>Relationship</td>
								<td align="center">:</td>
								<td>{{$view->relationship}}</td>
							</tr>

							<tr>
								<td>Join Date</td>
								<td align="center">:</td>
								<td>{{$view->join_date}}</td>
							</tr>

							
							<tr>
								<td>Present Address</td>
								<td align="center">:</td>
								<td>{!! $view->present_address !!}</td>
							</tr>


							<tr>
								<td>Parmanent Address</td>
								<td align="center">:</td>
								<td>{!! $view->parmanent_address !!}</td>
							</tr>

							

							<tr>
								<td>Education</td>
								<td align="center">:</td>
								<td>{!! $view->education !!}</td>
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