<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Notice</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Notice
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Date :</label>
									<input type="date" name="date" class="form-control" placeholder="Date">
								</div>



								<div class="form-group col-md-12">
									<label>Title :</label>
									<input type="text" name="title" class="form-control" placeholder="Title">
								</div>


								<div class="form-group col-md-12">
									<label>Details :</label>
									<textarea rows="4" id="summernote2" class="form-control" placeholder="Note" name="details"></textarea>
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