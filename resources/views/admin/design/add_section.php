<?php include 'header.php'; ?>



<div class="app-body">
	<main class="main-content">
		<div class="container-fluid p-0">
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head"><img src="assets/img/logo.png" class="img-fluid" style="height: 40px;">&nbsp;&nbsp;Add Section</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							Add Section
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="">
							<div class="row">

								<div class="form-group col-md-12">
									<label>Class Name :</label>
									<select class="form-control selecttextfill" id="option_s1">
										<option>Select Class</option>
									</select>
								</div>

								<div class="form-group col-md-12">
									<label>Group Name :</label>
									<select class="form-control selecttextfill" id="option_s2">
										<option>Select Group</option>
									</select>
								</div>

								<div class="form-group col-md-12">
									<label>Section Name :</label>
									<input type="text" name="section_name" class="form-control" placeholder="Section Name">
								</div>



							</div>

							<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Save Info.</button>
						</form>
					</div>
				</div>
			</div>



			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							View Section
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
										<th>Section Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>Ten</td>
										<td>Commerce</td>
										<td>A</td>
										<td>
											<div class="dropdown ">
												<a href="#" class="btn btn-success text-light btn-sm border p-2 default-color dropdown-hover p-0 rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Manage</span>
												</a>
												<div class="dropdown-menu ">
													<a class="dropdown-item text-dark" href="#"><i class="fa fa-edit pr-2"></i>Edit</a>
													<a class="dropdown-item text-dark" href="#"><i class="fa fa-trash  pr-2"></i>Delete</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>



					</div>
				</div>
			</div>





		</div>
	</main>
</div>






<?php include 'footer.php'; ?>