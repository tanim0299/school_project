@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;ফটো গ্যালারী</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							ফটো গ্যালারী
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('updatephoto_gallery/'. $data->id) }}" enctype="multipart/form-data">
							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $data->title }}">
								</div>

								<div class="form-group col-md-12">
									<label>Details :</label>
									<textarea rows="4" id="summernote2" class="form-control" name="details">{{ $data->details }}</textarea>
								</div>



								<div class="form-group col-md-12">
									<label>Image :</label>
									<input type="file" name="image" class="form-control" placeholder="Image"><br>
									<img src="{{ url($data->image) }}" style="height: 100px;">
									<input type="hidden" name="old_image" value="{{ $data->image }}">
								</div>

							</div>

							<strong><input type="checkbox" name="type" value="1" <?php if ($data->type == 1) {
								echo "checked";
							} ?>>&nbsp;&nbsp;Slider</strong>
							<br><br>
							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info.</button>
						</form>
					</div>
				</div>
			</div>


		</div>
	</main>
</div>





@endsection