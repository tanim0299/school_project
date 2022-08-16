@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp


<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;ইডিট অনলাইন ক্লাস রুটিন</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							ইডিট অনলাইন ক্লাস রুটিন
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('updateonlineclassroutine/'.$data->id) }}" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Date :</label>
									<input type="date" name="date" class="form-control" placeholder="Date" required="" value="{{ $data->date }}">
								</div>

								<div class="form-group col-md-12">
									<label>Class Name :</label>
									<select class="form-control selecttextfill" id="option_s1" name="class_id">
										@php $class = DB::table('add_class')->get();  @endphp
										@if(isset($class))
										@foreach($class as $c)
										<option value="{{ $c->id }}" <?php if ($data->class_id == $c->id) {
											echo "selected";
										} ?>>{{ $c->class_name }}</option>
										@endforeach
										@endif
									</select>
								</div>


								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title" required="" value="{{ $data->title }}">
								</div>


								

								<div class="form-group col-md-12">
									<label>Image/Pdf File :</label>
									<input type="file" name="image" class="form-control" placeholder="Image">
								</div>
								<input type="hidden" name="old_image" value="{{ $data->image }}">

								<div class="col-md-12">
									<div class='embed-responsive' style='padding-bottom:30%'>
										<object data="{{ url($data->image) }}" type='application/pdf'></object>
									</div> 
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