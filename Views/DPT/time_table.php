<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>de Parcours <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire de Parcours</h4>
            </div>
            <?php if(session('msg.body')):?>
            <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show" role="alert">
                <strong><?= session('msg.body') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="setvaluecash">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="paymentmethod" data-bs-toggle="modal"
                                data-bs-target="#createUE">
                                <img src="<?= base_url('assets/img/icons/plus.svg')?>" alt="img" class="me-2">
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <!-- <a href="javascript:void(0);" class="paymentmethod">
                                <img src="<?= base_url('assets/img/icons/debitcard.svg')?>" alt="img" class="me-2">
                                Debit
                            </a> -->
                        </li>
                        <li>
                            <!-- <a href="javascript:void(0);" class="paymentmethod">
                                <img src="<?= base_url('assets/img/icons/scan.svg')?>" alt="img" class="me-2">
                                Scan
                            </a> -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/dash4.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="40000.00">400.00</span></h5>
                        <h6>Total d'emploi du Temps du cycle</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Liste des Emplois du Temps</h4>
                <div class="row">
                    <div class="table-responsive">
                        <!-- <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" class="txt_csrfname"> -->
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>ID</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Spécialité</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td><label class="checkboxs"><input type="checkbox"><span
                                                class="checkmarks"></span></label></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/eye1.svg')?>" class="me-2"
                                                        alt="img">
                                                    Voir</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                        alt="img">Modifier
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="<?= base_url('assets/img/icons/delete1.svg')?>"
                                                        class="me-2" alt="img">Supprimer
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de création d'unité d'enseignement -->

        <div class="modal fade" id="createUE" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Insertion d'emploi du temps</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Jour</label>
                                        <select class="select" id="jour" name="jour">
                                            <option disabled selected>Selectionner le jour</option>
                                            <?php foreach($jours as $row): ?>
                                            <option value="<?= $row->id_jour?>"><?= $row->jour?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-jour"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Horaire</label>
                                        <select class="select" id="horaire" name="horaire">
                                            <option disabled selected>Selectionner l'heure</option>
                                            <?php foreach($horaires as $row): ?>
                                            <option value="<?= $row->id_horaire?>"><?= $row->id_horaire?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-horaire"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Matière</label>
                                        <select class="select" id="ecue" name="ecue">
                                            <option disabled selected>Selectionner la matière</option>
                                            <?php foreach($matieres as $row): ?>
                                            <option value="<?= $row->code_ecue?>"><?= $row->intitule_ecue?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-ecue"></p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 col-sm-6 col-12 col-form-label">Type
                                            d'enseignement</label>
                                        <div class="col-lg-3" style="display: flex">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cm" id="cm"
                                                    value="cm">
                                                <label class="form-check-label" for="cm">
                                                    CM
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="td"
                                                    value="td">
                                                <label class="form-check-label" for="td">
                                                    TD
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type" id="tp"
                                                    value="tp">
                                                <label class="form-check-label" for="tp">
                                                    TP
                                                </label>
                                            </div>
                                        </div>
                                        <span class="text-danger"><?= session('errors.genre') ?></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Intervenant</label>
                                        <select class="select" id="ens" name="ens">
                                            <option disabled selected>Selectionner l'intervenant</option>
                                            <?php foreach($intervenants as $row): ?>
                                            <option value="<?= $row->id_ens?>"><?= $row->nom?> <?= $row->prenom ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-ens"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Semestre</label>
                                        <select class="select" id="semestre" name="semestre">
                                            <option disabled selected>Selectionner le semestre</option>
                                            <?php foreach($semestres as $row): ?>
                                            <option value="<?= $row->id_semestre?>"><?= $row->id_semestre?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-semestre"></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Groupe</label>
                                        <select class="select" id="groupe" name="groupe">
                                            <option disabled selected>Selectionner le groupe</option>
                                            <?php foreach($groupes as $row): ?>
                                            <option value="<?= $row->groupe?>"><?= $row->groupe?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-groupe"></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Salle</label>
                                        <input type="text" id="salle" name="salle">
                                        <p class="text-danger" id="error-salle"></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>site</label>
                                        <input type="text" id="site" name="site">
                                        <p class="text-danger" id="error-site"></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Bâtiment</label>
                                        <input type="text" id="bat" name="bat">
                                        <p class="text-danger" id="error-bat"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2" id="save-ue">valider</button>
                                <a class="btn btn-primary" data-bs-dismiss="modal">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection()?>

<?= $this->section('js')?>
<!-- <script>
    //     $(document).ready(function(){
    //         $('#parcoursTable').DataTable({
    //             'processing': true,
    //             'serverSide': true,
    //             'serverMethod': 'post',
    //             'ajax': {
    //                 'url': "<?= site_url('departement/get-parcours') ?>",
    //                 'data': function(data){
    //                     var csrfName = $('.txt_csrfname').attr('name');
    //                     var csrfHash = $('.txt_csrfname').val();

    //                     return {
    //                         data: data,
    //                         [csrfName]: csrfHash
    //                     }
    //                 },
    //                 'dataSrc': function (data) { 
    //                     $('.txt_csrfname').val(data.token);
    //                     $('data-count').val(data.nbrParcours);

    //                     return data.aaData;
    //                  }
    //             },
    //             'columns': [
    //                 {data: 'id'},
    //                 {data: 'intitule'},
    //                 {data: 'responsable'}
    //             ]
    //         });
    //     });
</script> -->
<script>
$(document).on('click', '#save-ue', function(e) {
    e.preventDefault();
    var data = {
        'jour': $('#jour').val(),
        'horaire': $('#horaire').val(),
        'ecue': $('#ecue').val(),
        'cm': $('#cm').val(),
        'td': $('#td').val(),
        'tp': $('#tp').val(),
        'ens': $('#ens').val(),
        'semestre': $('#semestre').val(),
        'groupe': $('#groupe').val(),
        'salle': $('#salle').val(),
        'site': $('#site').val(),
        'bat': $('#bat').val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/store-timeTable",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-bat').text(response.error1.bat);
                $('#error-site').text(response.error1.site);
                $('#error-salle').text(response.error1.salle);
                $('#error-semestre').text(response.error1.semestre);
                $('#error-ens').text(response.error1.ens);
                $('#error-ecue').text(response.error1.ecue);
                $('#error-horaire').text(response.error1.horaire);
                $('#error-jour').text(response.error1.jour);
            } else if (response.error2) {

                Swal.fire({
                    title: "Erreur!",
                    text: "Désolé l'enregistrement n'a pas abouti",
                    type: "error",
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: !1
                });

            } else if (response.success) {

                $('#createUE').modal('hide');
                $('#createUE').find('input').val('');
                Swal.fire({
                    title: "Bravo!",
                    text: "Enregistrement réussi",
                    type: "success"
                });
                location.reload(true);
            }
        }
    });


});
</script>
<?= $this->endSection()?>