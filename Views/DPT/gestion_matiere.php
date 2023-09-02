<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?> de Matière <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire des éléments constitutifs</h4>
            </div>
            <?php if(session('msg.body')):?>
            <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show" role="alert">
                <strong><?= session('msg.body') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?= base_url(route_to('recherche_ecue')) ?>">
                    <!-- <p class="text-danger"><?= session('errors.id_parcours') ?></p> -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select" name="id_parcours" id="id_parcours">
                                    <option disabled selected>Trier par Parcours</option>
                                    <?php
                                    foreach ($parcours as $key => $row):?>
                                    <option value="<?= $parcours[$key]->id_parcours ?>">
                                        <?= $parcours[$key]->code ?>
                                    </option>
                                    <?php endforeach;?>
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select" name="id_specialite">
                                    <option disabled selected>Trier par Spécialité</option>
                                    <?php
                                    foreach ($specialite as $key => $row):?>
                                    <option value="<?= $specialite[$key]->id_specialite ?>">
                                        <?= $specialite[$key]->code ?></option>
                                    <?php endforeach;?>
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select" name="id_niveau">
                                    <option disabled selected>Trier par Niveau</option>
                                    <?php
                                    foreach ($semestre as $key => $row):?>
                                    <option value="<?= $semestre[$key]->id_semestre ?>">
                                        <?= $semestre[$key]->semestre ?></option>
                                    <?php endforeach;?>
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <button type="submit" class="btn btn-success">Recherche</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="setvaluecash">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="paymentmethod" data-bs-toggle="modal"
                                data-bs-target="#create_ecue">
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
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/debitcard.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count=""></span></h5>
                        <h6>Total d'unité d'enseignement</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/scan.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="385656.50">385,656.50</span></h5>
                        <h6>Total Sale Amount</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/dash4.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="40000.00">400.00</span></h5>
                        <h6>Total Sale Amount</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Liste des éléments constitutifs des unités d'enseignement</h4>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Intitulé</th>
                                    <th>Crédit</th>
                                    <th>Volume Horaire</th>
                                    <th>Unité Ens</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="dataue">
                                <?php
                                    if(session('ecue')){
                                        $ecue = session('ecue');
                                        foreach($ecue as $row):?>
                                    <tr>
                                        <td><?= $row->code ?></td>
                                        <td><span class="badges bg-lightgreen"><?= $row->titre ?></span></td>
                                        <td><?= $row->credit?></td>
                                        <td><span class="badges bg-lightgrey"><?= $row->vol_heure?>h</span></td>
                                        <td class="text-red"><?= $row->unite_ens?></td>
                                        <td class="text-center">
                                            <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href=""
                                                        class="dropdown-item"><img
                                                            src="<?= base_url('assets/img/icons/eye1.svg')?>" class="me-2"
                                                            alt="img">Détail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                            alt="img">Modifier</a>
                                                </li>
                                                <li>
                                                    <button value="<?= $row->code ?>"
                                                        class="dropdown-item confirm-text"><img
                                                            src="<?= base_url('assets/img/icons/delete1.svg')?>"
                                                            class="me-2" alt="img">Supprimer</button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach;
                                    } 


                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de création d'unité d'enseignement -->

        <div class="modal fade" id="create_ecue" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Inserez un Elément Constitutif d'unité d'enseignement</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab1">
                                                <p class="text-success msg"></p>
                                                <form action="<?= base_url(route_to('departement/storeECUE')) ?>"
                                                    method="post">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Code de l'ECUE</label>
                                                                <input type="text" id="code_ecue" value=""
                                                                    name="code_ecue">
                                                                <p class="text-danger" id="error-code"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Intitulé</label>
                                                                <input type="text" id="intitule" value=""
                                                                    name="intitule">
                                                                <p class="text-danger" id="error-intitule"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Nombre de crédit</label>
                                                                <input type="number" id="credit" value="" name="credit">
                                                                <p class="text-danger" id="error-credit"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>U.E associée</label>
                                                                <select class="select" name="ue" id="ue">
                                                                    <option disabled selected>Selectionner l'UE</option>
                                                                    <?php foreach($ue as $row):?>
                                                                    <option value="<?= $row->id_ue?>">
                                                                        <?= $row->unite_ens?>
                                                                    </option>
                                                                    <?php endforeach; ?>

                                                                </select>
                                                                <p class="text-danger" id="error-ue"></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Coéfficient</label>
                                                                <input type="number" id="coef" value="" name="coef">
                                                                <p class="text-danger" id="error-coef"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Volume Horaire</label>
                                                                <input type="number" id="heure" value="" name="heure">
                                                                <p class="text-danger" id="error-heure"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Contenu notionnel</label>
                                                                <textarea name="object" class="" id="contenu_not" cols="30"
                                                                    rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-success me-2"
                                                            id="save-ecue">valider</button>
                                                        <a class="btn btn-primary" data-bs-dismiss="modal">Annuler</a>
                                                    </div>
                                                </form>
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
<?= $this->endSection()?>

<?= $this->section('js')?>

<script>
$(document).on('click', '#save-ecue', function(e) {
    e.preventDefault();
    var data = {
        'code': $('#code_ecue').val(),
        'intitule': $('#intitule').val(),
        'credit': $('#credit').val(),
        'ue': $('#ue').val(),
        'coef': $('#coef').val(),
        'heure': $('#heure').val(),
        'object': $('#contenu_not').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store-ecue",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-code').text(response.error1.code);
                $('#error-intitule').text(response.error1.intitule);
                $('#error-credit').text(response.error1.credit);
                $('#error-ue').text(response.error1.ue);
                $('#error-coef').text(response.error1.coef);
                $('#error-heure').text(response.error1.heure);
            } else if (response.error2) {
                Swal.fire({
                    title: "Erreur!",
                    text: "Désolé l'enregistrement n'a pas abouti",
                    type: "error",
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: !1
                });

            } else if (response.success) {
                $('#create_ecue').modal('hide');
                $('#create_ecue').find('input').val('');
                Swal.fire({
                    title: "Bravo!",
                    text: response.success,
                    type: "success"
                });
                location.reload(true);
            }
        }
    });


});

// $(document).on('click', '#update-contenu', function(e) {
//     e.preventDefault();
//     var data = {
//         $('#object').val()
//     };

//     $.ajax({
//         type: "POST",
//         url: "/departement/update_contenu",
//         data: data,
//         success: function(response) {
//             if (response.error1) {
//                 $('#error-code').text(response.error1.code);
//                 $('#error-intitule').text(response.error1.intitule);
//             } else if (response.error2) {
//                 Swal.fire({
//                     title: "Erreur!",
//                     text: "Désolé l'enregistrement n'a pas abouti",
//                     type: "error",
//                     confirmButtonClass: "btn btn-danger",
//                     buttonsStyling: !1
//                 });
//             } else if (response.success) {
//                 $('.msg').text(
//                     "Enregistrement réussi, veuillez cliquer sur l'onglet contenu notionnel");
//             }
//         }
//     });
// });
</script>
<?= $this->endSection()?>