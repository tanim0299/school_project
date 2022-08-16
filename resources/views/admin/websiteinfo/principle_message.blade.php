@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;প্রধান শিক্ষকের বাণী</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							প্রধান শিক্ষকের বাণী যোগ করুন
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('principle_messageupdate/'.$view->id) }}" enctype="multipart/form-data">
							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Name" required="" value="{{ $view->name }}">
								</div>


								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $view->title }}">
								</div>


								<div class="form-group col-md-12">
									<label>Details :</label>
									<textarea rows="4" id="summernote2" class="form-control" name="details" required="">{{ $view->details }}</textarea>
								</div>


								<div class="form-group col-md-12">
									<label>Image :</label>
									<input type="file" name="image" class="form-control" placeholder="Image"><br>
									<input type="hidden" name="old_image" value="{{ $view->image }}">
									<img src="{{ url($view->image) }}" class="img-fluid" style="height: 100px;">
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