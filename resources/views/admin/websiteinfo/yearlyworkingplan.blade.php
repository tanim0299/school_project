@extends('admin.index')
@section('content')

@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp

<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;বার্ষিক কর্ম পরিকল্পনা</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							বার্ষিক কর্ম পরিকল্পনা
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="{{ url('insertyearlyworkingplan') }}" enctype="multipart/form-data">

							@csrf

							<div class="row">

								<div class="form-group col-md-12">
									<label>Date :</label>
									<input type="date" name="date" class="form-control" placeholder="Date" required="">
								</div>


								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title" required="">
								</div>




								<div class="form-group col-md-12">
									<label>Image/Pdf File :</label>
									<input type="file" name="image" class="form-control" placeholder="Image" required="">
								</div>



							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info</button>
						</form>
					</div>
				</div>
			</div>






			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							বার্ষিক কর্ম পরিকল্পনার তালিকা
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="bs4-table" class="table table-bordered" cellspacing="0">
								<thead class="bgtable">
									<tr class="text-light">
										<th>SL.</th>
										<th>Title</th>
										<th>File</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									@php $i=0; @endphp

									@if(isset($view))
									@foreach($view as $v)
									@php $i+=1; @endphp

									<tr id="tr{{ $v->id }}">
										<td>{{ $i }}</td>
										<td>{{ $v->title }}</td>
										<td><a href="{{ $v->image }}" download="{{ $v->title }}" class="btn btn-warning btn-sm">Download</a></td>
										<td>
											<div class="dropdown ">
												<a href="#" class="btn btn-success text-light btn-sm border p-2 default-color dropdown-hover p-0 rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manage</span>
												</a>
												<div class="dropdown-menu ">
													<a class="dropdown-item text-dark delete" data-id="{{ $v->id }}"><i class="fa fa-trash  pr-2"></i>Delete</a>
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




<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});


	$(".delete").click(function(){
		var id = $(this).data("id");
		$.ajax(
		{
			url: "{{ url('deleteyearlyworkingplan') }}/"+id,
			type: 'get',
			success: function ()
			{
				$('#tr'+id).hide();

				UIkit.notification({
					message: 'Data Delete Successfully Done',
					status: 'primary',
					pos: 'top-right',
					timeout: 2000
				});
			}
		});

	});





</script>




@endsection