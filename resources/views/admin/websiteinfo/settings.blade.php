@extends('admin.index')
@section('content')

@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;সেটিংস</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							সেটিংস
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('updatesetting/'. $view->id) }}" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="form-group col-md-12 text-center">
                                   <img src="{{ url($view->image) }}" class="img-fluid" style="height: 150px;"><br>
                                   <input type="hidden" name="old_image" value="{{ $view->image }}">
                                   <center><input type="file" name="image" class="form-control col-md-4"></center>
								</div>


								<div class="form-group col-md-6">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" value="{{ $view->name }}" required="">
								</div>

								<div class="form-group col-md-6">
									<label>Email Address :</label>
									<input type="email" name="email" class="form-control" value="{{ $view->email }}" required="">
								</div>


								<div class="form-group col-md-6">
									<label>Phone :</label>
									<input type="text" name="phone" class="form-control" value="{{ $view->phone }}">
								</div>

								<div class="form-group col-md-6">
									<label>Established :</label>
									<input type="text" name="est" class="form-control" value="{{ $view->est }}">
								</div>

								<div class="form-group col-md-6">
									<label>Meta :</label>
									<input type="text" name="meta" class="form-control" value="{{ $view->meta }}">
								</div>
								<div class="form-group col-md-6">
									<label>Meta Title :</label>
									<input type="text" name="title" class="form-control" value="{{ $view->title }}">
								</div>
								<div class="form-group col-md-6">
									<label>Description :</label>
									<textarea name="description" class="form-control">{!! $view->description !!}</textarea>
								</div>

								<div class="form-group col-md-6">
									<label>Google Map :</label>
									<textarea name="map" class="form-control">{!! $view->map !!}</textarea>
								</div>

								<div class="form-group col-md-6">
									<label>Facebook Page :</label>
									<textarea name="facebook" class="form-control">{!! $view->facebook !!}</textarea>
								</div>

								<div class="form-group col-md-6">
									<label>Youtube Vedio :</label>
									<textarea name="vedio" class="form-control">{!! $view->vedio !!}</textarea>
								</div>


								<div class="form-group col-md-12">
									<label>Address :</label>
									<textarea rows="5" id="summernote2" class="form-control" name="address" required="">{{ $view->address }}</textarea>
								</div>


							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Change</button>
						</form>
					</div>
				</div>
			</div>




		</div>
	</main>
</div>




@endsection

