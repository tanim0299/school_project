@extends('admin.index')
@section('content')


@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp
<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;সদস্য তথ্য</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							সদস্য তথ্য
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('update_list/'. $data->id) }}" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Type :</label>
									<select class="form-control selecttextfill" name="type" id="option_s2">
										@if($data->type == 0)
										<option value="0">Managing Comitte</option>
										<option value="1">Chairman</option>
										<option value="2">Principle</option>
										<option value="3">Donar</option>
										<option value="4">Ex-Member</option>
										@elseif($data->type == 1)
										<option value="1">Chairman</option>
										<option value="0">Managing Comitte</option>
										<option value="2">Principle</option>
										<option value="3">Donar</option>
										<option value="4">Ex-Member</option>
										@elseif($data->type == 2)
										<option value="2">Principle</option>
										<option value="1">Chairman</option>
										<option value="0">Managing Comitte</option>
										<option value="3">Donar</option>
										<option value="4">Ex-Member</option>
										@elseif($data->type == 3)
										<option value="3">Donar</option>
										<option value="2">Principle</option>
										<option value="1">Chairman</option>
										<option value="0">Managing Comitte</option>
										<option value="4">Ex-Member</option>
										@else
										<option value="4">Ex-Member</option>
										<option value="3">Donar</option>
										<option value="2">Principle</option>
										<option value="1">Chairman</option>
										<option value="0">Managing Comitte</option>
										@endif
										

									</select>
								</div>


								<div class="form-group col-md-12">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Name" required="" value="{{ $data->name }}">
								</div>


								<div class="form-group col-md-6">
									<label>Father Name :</label>
									<input type="text" name="father_name" class="form-control" placeholder="Father Name" value="{{ $data->father_name }}">
								</div>


								<div class="form-group col-md-6">
									<label>Mother Name :</label>
									<input type="text" name="mother_name" class="form-control" placeholder="Mother Name" value="{{ $data->mother_name }}">
								</div>



								<div class="form-group col-md-4">
									<label>Designation :</label>
									<input type="text" name="designation" class="form-control" placeholder="Designation" required="" value="{{ $data->designation }}">
								</div>


								<div class="form-group col-md-4">
									<label>Profession :</label>
									<input type="text" name="profession" class="form-control" placeholder="Profession" required="" value="{{ $data->profession }}">
								</div>


								<div class="form-group col-md-4">
									<label>Duration :</label>
									<input type="text" name="duration" class="form-control" placeholder="Duration" required="" value="{{ $data->duration }}">
								</div>


								

								<div class="form-group col-md-4">
									<label>Mobile :</label>
									<input type="text" name="mobile" class="form-control" placeholder="Mobile" required="" value="{{ $data->mobile }}">
								</div>


								<div class="form-group col-md-4">
									<label>Email :</label>
									<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $data->email }}">
								</div>


								<div class="form-group col-md-12">
									<label>Address :</label>
									<textarea rows="3" class="form-control" name="address" required="">{{ $data->address }}</textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Status :</label>
									<select class="form-control selecttextfill" name="status" id="option_s1">
										@if($data->status == 0)
										<option value="0">Active</option>
										<option value="1">Inactive</option>
										@else
										<option value="1">Inactive</option>
										<option value="0">Active</option>
										@endif
									</select>
								</div>



								<div class="form-group col-md-6">
									<label>Image :</label>
									<input type="file" name="image" class="form-control"><br>
									<img src="{{ url($data->image) }}" style="height: 50px;">
									<input type="hidden" name="old_image" value="{{ $data->image }}">

								</div>



							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info.</button>
						</form>
					</div>
				</div>
			</div>





		</div>
	</main>
</div>



@endsection