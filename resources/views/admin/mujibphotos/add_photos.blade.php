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
						<form method="post" action="{{ url('addMujibPhoto') }}" enctype="multipart/form-data">
							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title">
								</div>

									<div class="form-group col-md-12">
									<label>Details :</label>
									<textarea rows="4" id="summernote2" class="form-control" name="details"></textarea>
								</div>



								<div class="form-group col-md-12">
									<label>Image :</label>
									<input type="file" name="image" class="form-control" placeholder="Image" required="">
								</div>

							</div>

							<strong><input type="checkbox" name="type" value="1">&nbsp;&nbsp;Slider</strong>
							<br><br>
							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info.</button>
						</form>
					</div>
				</div>
			</div>


			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							মুজিব কর্ণার ফটো গ্যালারী সমূহ
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
						<table id="bs4-table" class="table table-bordered" cellspacing="0">
							<thead class="bgtable">
								<tr class="text-light">
									<th>SL.</th>
									<th>Title</th>
									<th>Details</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
                                @if($data)
                                @foreach($data as $showdata)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$showdata->title}}</td>
                                    <td>{!! $showdata->details !!}</td>
                                    <td><img src="{{asset('public/mujib100/pages/image')}}/{{$showdata->image}}" class="img-fluid" height="70px" width="90px"></td>
                                    <td>
                                        <div class="dropdown ">
											<a href="#" class="btn btn-success text-light btn-sm border p-2 default-color dropdown-hover p-0 rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manage</span>
											</a>
											<div class="dropdown-menu ">
												<a class="dropdown-item text-dark" href="{{url('editphoto')}}/{{$showdata->id}}"><i class="fa fa-edit  pr-2"></i>Edit</a>
												<a class="dropdown-item text-dark delete" href="{{url('deletePhoto')}}/{{$showdata->id}}"><i class="fa fa-trash  pr-2"></i>Delete</a>
											</div>
										</div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
							</tbody>
						</table>
					</div>



					</div>
				</div>
			</div>






		</div>
	</main>
</div>

@endsection