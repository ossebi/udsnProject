<?php session() ;?>
<?= $this->extend('etudiant/layout/main') ;?>
        <!--**********************************
            Content body start
        ***********************************-->
        <?= $this->section('content') ?>
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Controle Continues</h4>
                                <?php foreach ($ccs as $num => $cc) : ?>
                                    <?php $var = $cc->cc_label;?>
                                    
                                <?php endforeach ;?>

                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Events</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Events Management</a></li>
                        </ol>
                    </div>
                </div>
                
				
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">Legende</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Code couleur : </p>
                                        <div class="external-event" data-class="bg-danger"><i class="fa fa-move"></i>Controle continu</div>
                                        <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>Activité
                                        </div>
                                        <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Session</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Evenement selecctionne</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add a category</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
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
