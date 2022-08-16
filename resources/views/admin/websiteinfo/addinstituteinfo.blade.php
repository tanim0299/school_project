@extends('admin.index')
@section('content')

@php 
$setting = DB::table('settings')->where('id',1)->first();
@endphp
<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{ url($setting->image) }}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Institute Information</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Institute Information
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="" class="btn-submit" data-id="{{ $view->id }}">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Total Student :</label>
									<input type="text" name="student" class="form-control" placeholder="Total Student" value="{{ $view->student }}" id="student">
								</div>


								<div class="form-group col-md-12">
									<label>Total Teacher :</label>
									<input type="text" name="teacher" class="form-control" placeholder="Total Teacher" value="{{ $view->teacher }}" id="teacher">
								</div>


								<div class="form-group col-md-12">
									<label>Total Staff :</label>
									<input type="text" name="staff" class="form-control" placeholder="Total Staff" value="{{ $view->staff }}" id="staff">
								</div>


								<div class="form-group col-md-12">
									<label>Total Department :</label>
									<input type="text" name="department" class="form-control" placeholder="Total Department" value="{{ $view->department }}" id="department">
								</div>



							</div>
							
							<button type="submit" class="btn btn-success btn-sm button">Update</button>
							<button type="button" class="btn btn-success btn-sm loading">Loading...</button>
						</form>
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


	function getdata(){
		$.ajax({
			url:"{{ url('getinstituteinfo') }}",
			method:'get',
			data:data,
			success:function(){


			},
		});



	}


	$('.loading').hide();
	$(".btn-submit").submit(function(e){
		e.preventDefault();

		var data = $(this).serialize();
		var id = $(this).data("id");

		$.ajax({
			url:"{{ url('instituteinfoupdate') }}/"+id,
			method:'POST',
			data:data,

			beforeSend:function(response) { 

				$('.loading').show();
				$('.button').hide();

			},


			success:function(response){

				UIkit.notification({
					message: 'Data Update Successfully Done',
					status: 'primary',
					pos: 'top-right',
					timeout: 2000
				});
				$('.loading').hide();
				$('.button').show();

				

				getdata();

			},


			error:function(error){
				console.log(error)
			}
		});
	});




</script>



@endsection