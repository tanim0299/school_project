@extends('admin.index')
@section('content')



@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">

		<div class="container-fluid mt-4">

			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;{{ $view->name }}</h3>
			</div>


			<div class="card mb-4 border-0">
				<div class="card-body">


						<div class="col-sm-12">
							<img src="{{ url($view->image) }}" style="height: 200px;border-radius:10%;border:1px solid black;"> 
						</div> 
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
			</div>





		</div>


	</main>
</div>






@endsection