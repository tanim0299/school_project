@extends('admin.index')
@section('content')

@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp


<div class="app-body">
	<main class="main-content">

		<div class="container-fluid mt-4">

			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;সদস্যগণের তালিকা</h3>
			</div>



			<div class="card mb-4 border-0">

				<div class="card-body">
					<div class="table-responsive">
						<table id="bs4-table" class="table table-bordered" cellspacing="0">
							<thead class="bgtable">
								<tr class="text-light">
									<th>SL.</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Type</th>
									<th>Image</th>
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
									<td>{{ $v->name }}</td>
									<td>{{ $v->email }}</td>
									<td>{{ $v->mobile }}</td>
									<td>{{ $v->address }}</td>
									<td>
										@if($v->type == 0)
										Managing Comitte
										@elseif($v->type == 1)
										Chairman
										@elseif($v->type == 2)
										Principle
										@elseif($v->type == 3)
										Donar
										@else
										Ex-member
										@endif
										
									</td>
									<td><img src="{{ url($v->image) }}" style="height: 50px;"></td>
									<td>
										<div class="dropdown ">
											<a href="#" class="btn btn-success text-light btn-sm border p-2 default-color dropdown-hover p-0 rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manage</span>
											</a>
											<div class="dropdown-menu ">
												<a class="dropdown-item text-dark" href="{{ url('edit_member/'.$v->id) }}"><i class="fa fa-edit pr-2"></i>Edit</a>
												<a class="dropdown-item text-dark delete"  data-id="{{ $v->id }}"><i class="fa fa-trash  pr-2"></i>Delete</a>
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
			url: "{{ url('deletetmember') }}/"+id,
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