@extends('admin.index')
@section('content')
@php
$setting  = DB::table('settings')->first();
@endphp
<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="{{url($setting->image)}}" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;অ্যাডমিন তথ্যসমূহ</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
						অ্যাডমিন তৈরি করুন
						</div>
					</div>
					<div class="card-body">
					    
					    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
					    
					    
						<form method="post" action="{{ url('insertadmin') }}" class="btn-submit">
						    @csrf
							<div class="row">

								<div class="form-group col-md-12">
									<label>নাম :</label>
									<input type="text" name="name" class="form-control" placeholder="নাম" id="name" required="">
								</div>
								
									<div class="form-group col-md-12">
									<label>ই-মেইল :</label>
									<input type="email" name="email" class="form-control" placeholder="ই-মেইল" id="email" required="">
								</div>
								
								<div class="form-group col-md-12">
									<label>পাসওয়ার্ড :</label>
									<input type="password" name="password" class="form-control" placeholder="পাসওয়ার্ড" id="password" required="">
								</div>

						

							</div>

							<button type="submit" class="btn btn-success btn-sm button">সাবমিট</button>
						
						</form>
					</div>
				</div>
			</div>





		</div>
	</main>
</div>













@endsection