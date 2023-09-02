<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>Unité d'enseignement <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire des unités d'enseignement</h4>
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
                <form method="post" action="<?= base_url(route_to('search_ue')) ?>">
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
                                    <option value="<?= $semestre[$key]->code ?>">
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
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/debitcard.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="<?= $nbre_ue?>"></span></h5>
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
                <h4 class="card-title">Liste des unités d'enseignement</h4>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Code</th>
                                    <th>Intitulé</th>
                                    <th>Nbre de crédit</th>
                                    <th>Parcours</th>
                                    <th>Spécialité</th>
                                    <th>Semestre</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="dataue">
                                <?php
                                    if(session('ue')){
                                        $ue = session('ue');
                                        foreach($ue as $num => $row):?>
                                <tr>
                                    <td><?= $num+1 ?></td>
                                    <td><?= $row->code ?></td>
                                    <td><?= $row->label?></td>
                                    <td><span class="badges bg-lightgreen"><?= $row->nb_credit?></span></td>
                                    <td><?= $row->parcours?></td>
                                    <td class="text-red"><?= $row->specialite?></td>
                                    <td><?= $row->semestre?></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?= base_url(route_to('search_ue')) ?>/<?= $row->id_ue ?>"
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
                                                <button value="<?= $row->id_ue ?>"
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

        <div class="modal fade" id="createUE" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Insertion d'unité d'enseignement</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url(route_to('departement/storeUE')) ?>" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Code de l'UE</label>
                                        <input type="text" id="code_ue" value="" name="code_ue">
                                        <p class="text-danger" id="error-code"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Intitulé</label>
                                        <input type="text" id="intitule" value="" name="intitule">
                                        <p class="text-danger" id="error-intitule"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Nombre de crédit</label>
                                        <input type="number" id="credit" value="" name="credit">
                                        <p class="text-danger" id="error-credit"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Parcours</label>
                                        <select class="select" name="parcours" id="parcours">
                                            <option disabled selected>Selectionner le parcours</option>
                                            <?php foreach($parcours as $parcours):?>
                                            <option value="<?= $parcours->id_parcours?>"><?= $parcours->code?>
                                            </option>
                                            <?php endforeach; ?>

                                        </select>
                                        <p class="text-danger" id="error-parcours"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Spécialité</label>
                                        <select class="select" name="specialite" id="specialite">
                                            <option disabled selected>Selectionner la Spécialité</option>
                                            <?php foreach($specialite as $specialite):?>
                                            <option value="<?= $specialite->id_specialite?>">
                                            <?= $specialite->code?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-specialite"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Semestre</label>
                                        <select class="select" name="semestre" id="semestre">
                                            <option disabled selected>Selectionner le semestre</option>
                                            <?php foreach($semestre as $semestre):?>
                                            <option value="<?= $semestre->id_semestre?>"><?= $semestre->semestre?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-semestre"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Objectif de l'UE</label>
                                        <textarea name="object" id="object" cols="30"
                                            rows="10"></textarea>
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
<!-- 
<script>
    $(function () {
        $('#id_parcours').select2({
            placeholder: 'Choisir parcours',
            tags: true
        }).on('select2:close', function () { 
            var element = $(this);
            var parcours = $.trim(element.val());
            if(parcours !=''){
                $.ajax({
                    type: "post",
                    url: "/departement/searchUE",
                    data: {'id_parcours': parcours},
                    success: function(response) {
                        $.each(response.ue, function(key, value) {
                            $('.dataue').append(
                                '<tr> \
                                    <td>' + parseInt(key + 1) + '</td>\
                                    <td>' + value['code_ue'] + '</td>\
                                    <td>' + value['titre'] + '</td>\
                                    <td>' + value['nb_credit'] + '</td>\
                                    <td>' + value['cycle'] + '</td>\
                                    <td>' + value['parcours'] + '</td>\
                                    <td>' + value['specialite'] + '</td>\
                                    <td>' + value['semestre'] + '</td>\
                                    <td class="text-center">\
                                        <a class="detail-ue"href=detail-unite-enseignement/' + value['code_ue'] + '><i class="si si-eye" data-bs-toggle="tooltip" title="Voir détail"></i></a>&nbsp;\
                                        <a class="edit-ue"href=modifie-unite-enseignement/' + value['code_ue'] + '><i class="si si-note" data-bs-toggle="tooltip" title="Modifier"></i></a>&nbsp;\
                                        <button class="deleteue"style="color:red;border:none;background:none"value=' + value['code_ue'] + '><i class="si si-trash" data-bs-toggle="tooltip" title="Supprimer"></i></button>\
                                    </td>\
                                </tr>'
                            );
                        });
                    }
                });
            }
         });
    });

</script> -->
<script>
$(document).on('click', '#save-ue', function(e) {
    e.preventDefault();
    var data = {
        'code': $('#code_ue').val(),
        'intitule': $('#intitule').val(),
        'credit': $('#credit').val(),
        'parcours': $('#parcours').val(),
        'specialite': $('#specialite').val(),
        'semestre': $('#semestre').val(),
        'object': $('#object').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/storeUE",
        data: data,
        success: function(response) {

            if (response.error1) {

                $('#error-code').text(response.error1.code);
                $('#error-intitule').text(response.error1.intitule);
                $('#error-credit').text(response.error1.credit);
                $('#error-parcours').text(response.error1.parcours);
                $('#error-specialite').text(response.error1.specialite);
                $('#error-semestre').text(response.error1.semestre);
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

$(document).on('click', '.confirm-text', function(e) {
    Swal.fire({
        title: "Voulez-vous vraiment supprimer cette UE ?",
        text: "Une fois confirmer l'information sera supprimée",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: !0,
        cancelButtonText: "Annuler",
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
    }).then((t) => {
        if (t.value) {
            const id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url(route_to('delete_ue')) ?>",
                data: {
                    'id': id
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: "Bravo!",
                            text: "Suppression réussie",
                            type: "success"
                        });
                        location.reload(true);
                    } else {
                        Swal.fire({
                            title: "Erreur!",
                            text: response.error,
                            type: "error"
                        });
                    }
                }
            });
        }
    });
});

$(document).on('click', '.detail-ue', function(e) {

    // $(this).val()

    // $('#createUE').modal('show');

});
</script>
<?= $this->endSection()?>