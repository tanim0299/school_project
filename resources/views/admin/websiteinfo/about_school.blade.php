@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;আমাদের সম্পর্কে</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							আমাদের সম্পর্কে
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('aboutupdate/'.$view->id) }}" class="btn-submit" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-md-12">
									<label>Description :</label>
									<textarea  id="summernote" class="form-control" name="About_Massage">{{ $view->About_Massage }}</textarea>
								</div>


								<div class="form-group col-md-12">
									<label>Picture :</label>
									<input type="file" name="image" class="form-control" placeholder="Image"><br>
									<input type="hidden" name="old_image" value="{{ $view->image }}">
									<img src="{{ url($view->image) }}" class="img-fluid" style="height: 100px;">
								</div>


							</div>

							
							<button type="submit" class="btn btn-success btn-sm button">Update</button>
						</form>
					</div>
				</div>
			</div>




		</div>
	</main>
</div>






@endsection