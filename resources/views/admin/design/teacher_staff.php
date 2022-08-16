<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Add Teacher/Staff</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Add Teacher/Staff
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="row">

								<div class="form-group col-md-8">
									<label>Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Name">
								</div>

								<div class="form-group col-md-4">
									<label>Designation :</label>
									<input type="text" name="designation" class="form-control" placeholder="Designation">
								</div>


								<div class="form-group col-md-4">
									<label>Department Name :</label>
									<select class="form-control selecttextfill" id="option_s1">
										<option>Select Department</option>
									</select>
								</div>


								<div class="form-group col-md-4">
									<label>Voter ID No. :</label>
									<input type="text" name="voter_id" class="form-control" placeholder="ID No.">
								</div>


								<div class="form-group col-md-4">
									<label>Date Of Birth :</label>
									<input type="date" name="name" class="form-control" placeholder="Name">
								</div>


								<div class="form-group col-md-4">
									<label>Blood Group :</label>
									<input type="text" name="blood" class="form-control" placeholder="Blood Group">
								</div>

								
								<div class="form-group col-md-4">
									<label>Religion :</label>
									<select class="form-control selecttextfill" id="option_s2">
										<option>Select Religion</option>
									</select>
								</div>

								<div class="form-group col-md-4">
									<label>Relationship :</label>
									<select class="form-control selecttextfill" id="option_s2">
										<option>Select Relationship</option>
									</select>
								</div>



								<div class="form-group col-md-6">
									<label>Father Name :</label>
									<input type="text" name="father_name" class="form-control" placeholder="Father Name">
								</div>


								<div class="form-group col-md-6">
									<label>Mother Name :</label>
									<input type="text" name="name" class="form-control" placeholder="Mother Name">
								</div>



								<div class="form-group col-md-6">
									<label>Mobile :</label>
									<input type="text" name="name" class="form-control" placeholder="Mobile">
								</div>


								<div class="form-group col-md-6">
									<label>Email :</label>
									<input type="text" name="name" class="form-control" placeholder="Email">
								</div>

								<div class="form-group col-md-6">
									<label>Join Date :</label>
									<input type="date" name="name" class="form-control" placeholder="Email">
								</div>

								<div class="form-group col-md-6">
									<label>MPO Date :</label>
									<input type="date" name="name" class="form-control" placeholder="Email">
								</div>



								<div class="form-group col-md-6">
									<label>Present Address :</label>
									<textarea rows="3" class="form-control"></textarea>
								</div>

								<div class="form-group col-md-6">
									<label>Permanent Address :</label>
									<textarea rows="3" class="form-control"></textarea>
								</div>


								<div class="form-group col-md-12">
									<label>Education Qualification :</label>
									<textarea rows="3" id="summernote2" class="form-control"></textarea>
								</div>


								<div class="form-group col-md-6">
									<label>Gender :</label>
									<select class="form-control selecttextfill" id="option_s2">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>


								<div class="form-group col-md-6">
									<label>Type :</label>
									<select class="form-control selecttextfill" id="option_s2">
										<option value="0">Teacher</option>
										<option value="1">Staff</option>
									</select>
								</div>

								<div class="form-group col-md-6">
									<label>Image :</label>
									<input type="file" name="" class="form-control">
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