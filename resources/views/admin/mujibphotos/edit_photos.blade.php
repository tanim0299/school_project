@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;মুজিব কর্ণার ফটো গ্যালারী</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							মুজিব কর্ণার ফটো গ্যালারী
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('updateMujibPhoto') }}/{{$data->id}}" enctype="multipart/form-data">
							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title" value="{{$data->title}}">
								</div>

									<div class="form-group col-md-12">
									<label>Details :</label>
									<textarea rows="4" id="summernote2" class="form-control" name="details">{!! $data->details !!}</textarea>
								</div>



								<div class="form-group col-md-12">
									<label>Image :</label>
									<input type="file" name="image" class="form-control" placeholder="Image" >

                                    <img src="{{asset('public/mujib100/pages/image')}}/{{$data->image}}" class="img-fluid" height="70px" width="90px">
								</div>

							</div>
                            @if($data->type == '1')
                            <strong><input checked type="checkbox" name="type" value="1">&nbsp;&nbsp;Slider</strong>
                            @else
                            <strong><input type="checkbox" name="type" value="1">&nbsp;&nbsp;Slider</strong>
                            @endif
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