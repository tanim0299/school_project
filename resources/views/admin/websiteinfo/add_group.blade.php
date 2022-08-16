@extends('admin.index')
@section('content')
@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp
<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;গ্রুপ যোগ করুন</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							গ্রুপ যোগ করুন
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="" class="btn-submit">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Class Name :</label>
									<select class="form-control selecttextfill" id="option_s1" name="class_id">
										@php $class = DB::table('add_class')->get();  @endphp
										@if(isset($class))
										@foreach($class as $c)
										<option value="{{ $c->id }}">{{ $c->class_name }}</option>
										@endforeach
										@endif
									</select>
								</div>

								<div class="form-group col-md-12">
									<label>Group Name :</label>
									<input type="text" name="group_name" class="form-control" placeholder="Group Name" id="group_name">
								</div>


							</div>

							<button type="submit" class="btn btn-success btn-sm button">Save</button>
							<button type="button" class="btn btn-success btn-sm loading">Loading...</button>
						</form>
					</div>
				</div>
			</div>



			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							গ্রুপ সমূহ
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="bs4-table" class="table table-bordered" cellspacing="0">
								<thead class="bgtable">
									<tr class="text-light">
										<th>SL.</th>
										<th>Class Name</th>
										<th>Group Name</th>
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
										<td>{{ $v->class_name }}</td>
										<td>{{ $v->group_name }}</td>
										<td>
											<div class="dropdown ">
												<a href="#" class="btn btn-success text-light btn-sm border p-2 default-color dropdown-hover p-0 rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manage</span>
												</a>
												<div class="dropdown-menu ">
													<a class="dropdown-item text-dark edit" data-id="{{ $v->id }}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit pr-2"></i>Edit</a>
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




<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Update</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


			<div class="modal-body">
				
			</div>

			
		</div>
	</div>
</div>







<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});




	$('.loading').hide();
	$(".btn-submit").submit(function(e){
		e.preventDefault();

		var data = $(this).serialize();

		$.ajax({
			url:"{{ url('insertgroup') }}",
			method:'POST',
			data:data,

			beforeSend:function(response) { 

				$('.loading').show();
				$('.button').hide();

			},


			success:function(response){

				UIkit.notification({
					message: 'Data Insert Successfully Done',
					status: 'primary',
					pos: 'top-right',
					timeout: 2000
				});
				$('.loading').hide();
				$('.button').show();

				$('#title').val('');
				$('#url').val('');

				window.location="";

			},


			error:function(error){
				console.log(error)
			}
		});
	});



	$(".edit").click(function(){
		var id = $(this).data("id");
		$.ajax(
		{
			url: "{{ url('editgroup') }}/"+id,
			type: 'get',
			data:{},
			success: function (data)
			{
				$('.modal-body').html(data);
			}
		});

		console.log("It failed");
	});




	$(".delete").click(function(){
		var id = $(this).data("id");
		$.ajax(
		{
			url: "{{ url('deletegroup') }}/"+id,
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