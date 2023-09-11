<?php session() ;?>
<?= $this->extend('etudiant/layout/main') ;?>
<!--**********************************
            Content body start
        ***********************************-->
<?= $this->section('content') ?>
 <div class="content-body">
             <!-- row  -->
            <div class="container-fluid">
				    
                <div class="row">
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Students</h4>
										<h3>3280</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
										</div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">New Students</h4>
										<h3>245</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
										</div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Course</h4>
										<h3>28</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
										</div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Fees Collection</h4>
										<h3>25160$</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
										</div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>					
					<div class="col-xl-6 col-xxl-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Income/Expense Report</h3>
							</div>
							<div class="card-body">
								 <div id="morris_bar_2" class="morris_chart_height"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des professeurs</h4>
                            </div>
                            <div class="card-body">
								<?php foreach ($enseignants as $num => $ens) : ?>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/pic1.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky"><?= $ens->nom ;?> <small class="text-muted">( B.Com )</small></h5>
                                        <small class="text-primary mb-0">Cours</small>
									</div>
								</div>
								<?php if ($num>=4) {break;}?>
								<?php endforeach ?>
								<div class="text-center pt-3">
									<a href="javascript:void(0);" class="btn btn-primary btn-rounded btn px-5 btn-lg">Voir plus</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des Etudiants </h4>
                            </div>
                            <div class="card-body">
							    <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nom </th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Téléphone</th>
												<th scope="col">Matricule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php foreach($etudiants as $num => $etudiant):?>
                                            <tr>
                                                <td><?= $etudiant->etu_nom ?></td>
                                                <td><?= $etudiant->etu_prenom ?></td>
                                                <td><?= $etudiant->etu_email ?></td>
												<td><?= $etudiant->etu_tel ?></td>
                                                <td><?= $etudiant->etu_matricule ?></td>
												<?php if ($num>=6) {break;}?>
												<?php endforeach;?>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
						<div class="card profile-tab">
                            <div class="card-header">
                                <h4 class="card-title">Salary Status</h4>
                            </div>
							<div class="card-body custom-tab-1">
								<ul class="nav nav-tabs mb-3">
									<li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link pb-2 active show">Professors</a></li>
									<li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link pb-2">Librarian</a></li>
									<li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link pb-2">Other</a></li>
								</ul>
								<div class="tab-content">
									<div id="my-posts" class="tab-pane fade active show">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="images/profile/education/pic1.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic2.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic3.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic4.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic5.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div id="about-me" class="tab-pane fade">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="images/profile/education/pic6.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic7.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic8.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic10.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic9.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div id="profile-settings" class="tab-pane fade">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">Status</th>
														<th scope="col">Date</th>
														<th scope="col">Ammount</th>
														<th scope="col">Transaction ID</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="images/profile/education/pic5.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Angelica Ramos</td>
														<td><span class="badge badge-rounded badge-success">Paid</span></td>
														<td>12 August 2020</td>
														<td>$100</td>
														<td>#42317</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic8.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Bradley Greer</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>11 July 2020</td>
														<td>$200</td>
														<td>#54682</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic6.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Cedric Kelly</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>10 May 2020</td>
														<td>$400</td>
														<td>#57894</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic2.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Caesar Vance</td>
														<td><span class="badge badge-rounded badge-danger">Unpaid</span></td>
														<td>09 April 2020</td>
														<td>$300</td>
														<td>#57864</td>
													</tr>
													<tr>
														<td><img src="images/profile/education/pic7.jpg" class="rounded-circle" width="35" alt=""></td>
														<td>Rhona Davidson</td>
														<td><span class="badge badge-rounded badge-warning">Pending</span></td>
														<td>08 March 2020</td>
														<td>$500</td>
														<td>#56387</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
</div> 
<?= $this->endsection('content') ?>
<!--**********************************
            Content body end
        ***********************************-->