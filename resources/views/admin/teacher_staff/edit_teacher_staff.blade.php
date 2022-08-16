@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp


<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;শিক্ষক কর্মচারী</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							শিক্ষক কর্মচারী
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('update_teacherstaff/'.$view->id) }}" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="form-group col-md-8">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Name" required="" value="{{ $view->name }}">
								</div>

								<div class="form-group col-md-4">
									<label>Designation :</label>
									<input type="text" name="designation" class="form-control" placeholder="Designation" value="{{ $view->designation }}">
								</div>


								<div class="form-group col-md-4">
									<label>Voter ID No. :</label>
									<input type="text" name="voter_id" class="form-control" placeholder="ID No." value="{{ $view->voter_id }}">
								</div>


								<div class="form-group col-md-4">
									<label>Date Of Birth :</label>
									<input type="text" name="date_of_birth" class="form-control" value="{{ $view->date_of_birth }}">
								</div>


								<div class="form-group col-md-4">
									<label>Blood Group :</label>
									<input type="text" name="blood" class="form-control" placeholder="Blood Group" value="{{ $view->blood }}">
								</div>

								
								<div class="form-group col-md-4">
									<label>Religion :</label>
									<select class="form-control selecttextfill" name="religion" id="option_s2">
										<option value="{{ $view->religion }}">{{ $view->religion }}</option>
										<option value="Islam">Islam</option>
										<option value="Hindu">Hindu</option>
										<option value="Buddho">Buddho</option>
										<option value="Christan">Christan</option>

									</select>
								</div>

								<div class="form-group col-md-4">
									<label>Relationship :</label>
									<select class="form-control selecttextfill" name="relationship" id="option_s2">
										@if($view->relationship == "Unmarried")
										<option value="Unmarried">Unmarried</option>
										<option value="Married">Married</option>
										@else
										<option value="Married">Married</option>
										<option value="Unmarried">Unmarried</option>
										@endif
									</select>
								</div>



								<div class="form-group col-md-6">
									<label>Father Name :</label>
									<input type="text" name="father_name" class="form-control" placeholder="Father Name" required="" value="{{ $view->father_name }}">
								</div>


								<div class="form-group col-md-6">
									<label>Mother Name :</label>
									<input type="text" name="mother_name" class="form-control" placeholder="Mother Name" required="" value="{{ $view->mother_name }}">
								</div>



								<div class="form-group col-md-6">
									<label>Mobile :</label>
									<input type="text" name="mobile" class="form-control" placeholder="Mobile" required="" value="{{ $view->mobile }}">
								</div>


								<div class="form-group col-md-6">
									<label>Email :</label>
									<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $view->email }}">
								</div>

								<div class="form-group col-md-6">
									<label>Join Date :</label>
									<input type="date" name="join_date" class="form-control" value="{{ $view->join_date }}">
								</div>

								<div class="form-group col-md-6">
									<label>MPO Date :</label>
									<input type="date" name="mpo_date" class="form-control" value="{{ $view->mpo_date }}">
								</div>



								<div class="form-group col-md-6">
									<label>Present Address :</label>
									<textarea rows="3" class="form-control" name="present_address" required="">{{ $view->present_address }}</textarea>
								</div>

								<div class="form-group col-md-6">
									<label>Permanent Address :</label>
									<textarea rows="3" class="form-control" name="parmanent_address">{{ $view->parmanent_address }}</textarea>
								</div>


								<div class="form-group col-md-12">
									<label>Education Qualification :</label>
									<textarea rows="3" id="summernote2" class="form-control" name="education" required="">{{ $view->education }}</textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Gender :</label>
									<select class="form-control selecttextfill" name="gender" id="option_s2">
										@if($view->gender == "Male")
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										@else
										<option value="Female">Female</option>
										<option value="Male">Male</option>
										@endif
									</select>
								</div>


								<div class="form-group col-md-6">
									<label>Type :</label>
									<select class="form-control selecttextfill" name="type" id="option_s2">
										@if($view->type == 0)
										<option value="0">Teacher</option>
										<option value="1">Staff</option>
										@else
										<option value="1">Staff</option>
										<option value="0">Teacher</option>
										@endif
										
									</select>
								</div>




								<div class="form-group col-md-6">
									<label>Image :</label>
									<input type="file" name="image" class="form-control"><br>
									<img src="{{ url($view->image) }}" style="height: 50px;">
									<input type="hidden" name="old_image" value="{{ $view->image }}">
								</div>


								<div class="form-group col-md-6">
									<label>Status : @if($view->status == '') @elseif($view->status == 0) Ex-Teacher @elseif($view->status == 1) Ex-Staff @endif</label>
									<select class="form-control selecttextfill" name="status">
										<option value="">Select Status</option>
										<option value="0">Ex-Teacher</option>
										<option value="1">Ex-Staff</option>
									</select>
									
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