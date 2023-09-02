<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>de Parcours <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire Année Académique</h4>
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
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/debitcard.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h6>Total des années académiques</h6>
                        <h5><span class="counters" data-count="<?= $totalAnnee?>"></span></h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Liste des sessions</h4>
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
                                    <th>Session</th>
                                    <th>Début</th>
                                    <th>Fin</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($annee_ac as $row):?>
                                <tr>
                                    <td><label class="checkboxs"><input type="checkbox"><span
                                                class="checkmarks"></span></label></td>
                                    <td><?= $row->session?></td>
                                    <td><?= $row->debut_anne?></td>
                                    <td><?= $row->fin_anne?></td>
                                    <td>
                                        <div class="status-toggle d-flex justify-content-between align-items-center">
                                            <input type="checkbox" id="user6" class="check" checked>
                                            <label for="user6" class="checktoggle">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="action-set" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button value="<?= $row->id_annee?>" id="btn-edit-year" class="dropdown-item"><img
                                                    src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                    alt="img">Modifier
                                                </button>
                                            </li>
                                            <li>
                                                <button value="<?= $row->id_annee?>" id="btn-del-year" class="dropdown-item confirm-text"><img
                                                    src="<?= base_url('assets/img/icons/delete1.svg')?>"
                                                    class="me-2" alt="img">Supprimer
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach;?>
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
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Début année académique</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="debut" id="debut">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error-debut"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Fin année académique</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="fin" id="fin">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error-fin"></span>
                                        </div>
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

        <!-- Formulaire de modification -->

        <div class="modal fade" id="edit-anne" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modification Année académique</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <input type="hidden" class="txt_csrf" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                <input type="hidden" id="id_annee">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Début année académique</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="debut_annee" id="debut_annee">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error_debut_annee"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Fin année académique</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="fin_annee" id="fin_annee">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error_fin_annee"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2" id="save_annee_edit">Modifier</button>
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
<script>
$(document).on('click', '#save-ue', function(e) {
    e.preventDefault();
    var data = {
        'debut': $('#debut').val(),
        'fin': $('#fin').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store_annee_acd",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-debut').text(response.error1.debut);
                $('#error-fin').text(response.error1.fin);
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
$(document).on('click', '#btn-del-year', function(e) {
    Swal.fire({
        title: "Voulez-vous vraiment supprimer ce champ ?",
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
                url: "<?= base_url(route_to('delete_annee')) ?>",
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
$(document).on('click', '#btn-edit-year', function(e) {
    e.preventDefault();
    var data = {'id': $(this).val()};
    $.ajax({
        type: "POST",
        url: "/departement/edit_annee_ac",
        data: data,
        success: function(response) {
           $.each(response, function (key, value) { 
             $('#id_annee').val(value['id_annee_acad']);
             $('#debut_annee').val(value['debut_anne']);
             $('#fin_annee').val(value['fin_anne']);
             $('#edit-anne').modal('show');
           });
        }
    });


});
$(document).on('click', '#save_annee_edit', function(e) {
    e.preventDefault();
    var csrfName =  $('.txt_csrf').attr('name');
    var csrfHash =  $('.txt_csrf').val();
    var data = {
        [csrfName] : csrfHash,
        'id'    : $('#id_annee').val(), 
        'debut': $('#debut_annee').val(),
        'fin': $('#fin_annee').val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/update_annee_acc",
        data: data,
        success: function(response) {
            $('.txt_csrf').val(response.token);
            if (response.error1) {
                $('#error_debut_annee').text(response.error1.debut);
                $('#error_fin_annee').text(response.error1.fin);              
            } else if (response.error2) {
                Swal.fire({
                    title: "Erreur!",
                    text: "Désolé l'enregistrement n'a pas abouti",
                    type: "error",
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: !1
                });
            } else if (response.success) {
                $('#edit-anne').modal('hide');
                $('#edit-anne').find('input').val('');
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