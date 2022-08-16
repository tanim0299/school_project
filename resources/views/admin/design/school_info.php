<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;School/College Information</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							School/College Information
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Total Student :</label>
									<input type="text" name="total_student" class="form-control" placeholder="Total Student" value="0">
								</div>

								<div class="form-group col-md-12">
									<label>Total Department :</label>
									<input type="text" name="total_department" class="form-control" placeholder="Total Department" value="0">
								</div>



								<div class="form-group col-md-12">
									<label>Total Teacher :</label>
									<input type="text" name="total_teacher" class="form-control" placeholder="Total Teacher" value="0">
								</div>


								<div class="form-group col-md-12">
									<label>Total Staff :</label>
									<input type="text" name="total_staff" class="form-control" placeholder="Total Staff" value="0">
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