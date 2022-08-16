<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Admin Information</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Admin Information
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Name">
								</div>


								<div class="form-group col-md-6">
									<label>Email :</label>
									<input type="Email" name="email" class="form-control" placeholder="Email">
								</div>

								<div class="form-group col-md-6">
									<label>Phone :</label>
									<input type="number" min="11" max="11" name="phone" class="form-control" placeholder="Phone">
								</div>



								<div class="form-group col-md-12">
									<label>Address :</label>
									<textarea rows="3" class="form-control" placeholder="Address" name="address"></textarea>
								</div>



								<div class="form-group col-md-12">
									<label>Image :</label>
									<input type="file" name="image" class="form-control" placeholder="Image">
								</div>



							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info.</button>
						</form>
					</div>
				</div>
			</div>






		</div>
	</main>
</div>






<?php include 'footer.php'; ?>