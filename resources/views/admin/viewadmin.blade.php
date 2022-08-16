@extends('admin.index')
@section('content')@php
$setting  = DB::table('settings')->first();
@endphp

<div class="app-body">
	<main class="main-content">
	
			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							সকল অ্যাডমিন সমূহ
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="bs4-table" class="table table-bordered" cellspacing="0">
								<thead class="bgtable">
									<tr class="text-light">
										<th>সিরিয়াল নং.</th>
										<th>নাম</th>
										<th>ই-মেইল</th>
										<th>অ্যাকশান</th>
									</tr>
								</thead>
								<tbody>

									@php $i=0; @endphp

									@if(isset($data))
									@foreach($data as $v)
									@php $i+=1; @endphp

									<tr id="tr{{ $v->id }}">
										<td>{{ $i }}</td>
										<td>{{ $v->name }}</td>
										<td>{{ $v->email }}</td>
										<td>
										<a href="{{ url('editadmin/'.$v->id) }}" class="btn btn-info btn-sm text-light delete"><i class="fa fa-edit  pr-2"></i>Edit</a>
										<a href="{{ url('deleteadmin/'.$v->id) }}" class="btn btn-danger btn-sm text-light delete"><i class="fa fa-trash  pr-2"></i>Delete</a>
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