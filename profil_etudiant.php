<?php session() ;?>
<?= $this->extend('etudiant/layout/main') ;?>
        <!--**********************************
            Content body start
        ***********************************-->
        <?= $this->section('content') ?>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    
                                </div>
                                <div class="profile-info">
									
                                    <div class="row">
										<div class="col-sm-3">
											<div class="profile-photo">
												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
											</div>
										</div>
                                        <div class="col-sm-9 col-12">
                                            <div class="row">
                                            <?php foreach ($etudiants as $etu) :?>
                                                <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary mb-0"><?= $etu->etu_prenom;?> <?= $etu->etu_nom;?></h4>
                                                        <p>Etudiant</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6 border-right-1">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted mb-0"><?= $etu->etu_email?></h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-blog pt-3 border-bottom-1 pb-1">
                                    <h5 class="text-primary d-inline">Today Highlights</h5><a href="javascript:void()" class="pull-right f-s-16">More</a>
                                    <img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4>Darwin Creative Agency Theme</h4>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                </div>
                                <div class="profile-interest mt-4 pb-2 border-bottom-1">
                                    <h5 class="text-primary d-inline">Interest</h5>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/2.jpg" alt="" class="img-fluid">
                                                <p>Shopping Mall</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/3.jpg" alt="" class="img-fluid">
                                                <p>Photography</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/4.jpg" alt="" class="img-fluid">
                                                <p>Art &amp; Gallery</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/2.jpg" alt="" class="img-fluid">
                                                <p>Visiting Place</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/3.jpg" alt="" class="img-fluid">
                                                <p>Shopping</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-sm-4 col-6 int-col">
                                            <a href="javascript:void()" class="interest-cat">
                                                <img src="images/profile/4.jpg" alt="" class="img-fluid">
                                                <p>Biking</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-news mt-4 pb-3">
                                    <h5 class="text-primary d-inline">Our Latest News</h5>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/5.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/6.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="images/profile/7.jpg" alt="image" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="m-b-5">John Tomas</h5>
                                            <p>I shared this on my fb wall a few months back, and I thought I'd share it here again because it's such a great read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">Information</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Parametre</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-4">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the
                                                            bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed
                                                            in a nice, gilded frame.</p>
                                                    </div>
                                                </div>
                                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                                    <h4 class="text-primary mb-4">Skills</h4>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Crypto</a>
                                                </div>
                                                <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                    <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Information Personnelle</h4>
                                                    
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Nom <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_nom;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Prenom<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_prenom;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Date de naissance <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_naissance_date;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Lieu de naissance <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_naissance_lieu;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Genre <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_genre;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Matricule<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_matricule?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Situation matrimoniale<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_matrimonial?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Email<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_email?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Téléphone<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_tel?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Statut<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_statut?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Ville<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_ville?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                            <h5 class="f-w-500">Adresse<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-lg-6 col-md-8 col-sm-6 col-6"><span><?= $etu->etu_adresse?></span>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                                
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Informations</h4>
                                                        <form action="<?= base_url(route_to('enregistrement')) ;?>" method="post">
                                                            <div class="form-row">
                                                                    <input type="hidden" name="id" value="<?= session('user_id') ;?>">
                                                                <div class="form-group col-md-6">
                                                                    <label>Email</label>
                                                                    <input disabled value="<?= $etu->etu_email?>" type="email" placeholder="Email" class="form-control" name="email">
                                                                    <p><?= session('error.email') ;?></p>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Mot de passe</label>
                                                                    <input disabled value="1234" type="password" placeholder="Password" class="form-control" name="password">
                                                                    <p><?= session('error.password') ;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Nom</label>
                                                                    <input value="<?= $etu->etu_nom?>" type="text" placeholder="Nom" class="form-control" name="nom">
                                                                    <p><?= session('error.nom') ;?></p>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Prenom</label>
                                                                    <input value="<?= $etu->etu_prenom?>" type="text" placeholder="Prenom" class="form-control" name="prenom">
                                                                    <p><?= session('error.prenom') ;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Matricule</label>
                                                                    <input value="<?= $etu->etu_matricule?>" type="text" placeholder="Matricule" class="form-control" name="matricule">
                                                                    <p><?= session('error.matricule') ;?></p>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Téléphone</label>
                                                                    <input value="<?= $etu->etu_tel?>" type="text" placeholder="exemple : +242 06 000 00 00" class="form-control" name="telephone">
                                                                    <p><?= session('error.telephone') ;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Date de naissancz</label>
                                                                    <input value="<?= $etu->etu_naissance_date?>" type="date" placeholder="Date de naissance" class="form-control" name="date_naissance">
                                                                    <p><?= session('error.date_naissance') ;?></p>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Lieu de naissance</label>
                                                                    <input value="<?= $etu->etu_naissance_lieu?>" type="text" placeholder="Lieu de naissance" class="form-control" name="lieu_naissance">
                                                                    <p><?= session('error.lieu_naissance') ;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Genre</label>
                                                                    <select class="form-control" id="inputState" name="genre">
                                                                        <option selected value="<?= $etu->etu_genre?>"><?= $etu->etu_genre?></option>
                                                                        <option value="M">Masculin</option>
                                                                        <option value="F">Feminin</option>
                                                                    </select>
                                                                <p><?= session('error.genre') ;?></p></div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Situation Matrimoniale</label>
                                                                    <select class="form-control" id="inputState" name="situation_matrimoniale">
                                                                    <option selected value="<?= $etu->etu_matrimonial?>"><?= $etu->etu_matrimonial?></option>
                                                                        <option value="C">Célibataire</option>
                                                                        <option value="M">Marié</option>
                                                                        <option value="D">Divorcé</option>
                                                                    </select>
                                                                <p><?= session('error.situation_matrimoniale') ;?></p></div>
                                                            </div>
                                                            
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Statut</label>
                                                                    <select class="form-control" id="inputState" name="statut">
                                                                    <option selected value="<?= $etu->etu_statut?>"><?= $etu->etu_statut?></option>
                                                                        <option value="R" >Redoublant</option>
                                                                        <option value="N" >Nouveau</option>

                                                                    </select>
                                                                <p><?= session('error.statut') ;?></p></div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Nationalité</label>
                                                                    <input value="<?= $etu->etu_nationalite?>" type="text" placeholder="Lieu de naissance" class="form-control" name="nationalite">
                                                                    <p><?= session('error.nationalite') ;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Addresse</label>
                                                                <input value="<?= $etu->etu_adresse?>" type="text" placeholder="n°, rue, quartier" class="form-control" name="adresse">
                                                                <p><?= session('error.adresse') ;?></p>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Ville</label>
                                                                    <input value="<?= $etu->etu_ville?>" type="text" class="form-control" name="ville">
                                                                    <p><?= session('error.ville') ;?></p>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>State</label>
                                                                    <select class="form-control" id="inputState" name="etat">
                                                                        <option selected="">Choose...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                    <p><?= session('error.etat') ;?></p>
                                                                </div>
                                                        
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="gridCheck" name="">
																	<label class="custom-control-label" for="gridCheck"> Check me out</label>
																</div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                                                        </form>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
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
