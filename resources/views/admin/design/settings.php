<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Settings</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Settings
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">

							<div class="row">

								<div class="form-group col-md-12 text-center">
                                   <img src="assets/img/logo.png" class="img-fluid" style="height: 100px;"><br>
                                   <center><input type="file" name="" class="form-control col-md-4"></center>
								</div>


								<div class="form-group col-md-6">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" value="Feni Govt. College">
								</div>

								<div class="form-group col-md-6">
									<label>Email Address :</label>
									<input type="email" name="email" class="form-control" value="info@sbit.com.bd">
								</div>


								<div class="form-group col-md-6">
									<label>Phone :</label>
									<input type="number" name="phone" class="form-control" value="018113586022">
								</div>


								<div class="form-group col-md-12">
									<label>Address :</label>
									<textarea rows="5" id="summernote2" class="form-control">Feni, Bangladesh</textarea>
								</div>


							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Change</button>
						</form>
					</div>
				</div>
			</div>




		</div>
	</main>
</div>






<?php include 'footer.php'; ?>