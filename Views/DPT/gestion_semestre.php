<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>des Semestres <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire de Semestre</h4>
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
        </div>


        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Liste des semestres</h4>
                <div class="row">
                    <div class="table-responsive">
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
                                    <th>Année Académique</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($semestres as $row): ?>
                                <tr>
                                    <td><label class="checkboxs"><input type="checkbox"><span
                                                class="checkmarks"></span></label>
                                    </td>
                                    <td><?= $row->code ?></td>
                                    <td><?= $row->annee ?></td>
                                    <td><?= $row->debut ?></td>
                                    <td><?= $row->fin ?></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button value="<?= $row->id_semestre ?>" id="btn-edit-semestre"
                                                    class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                        alt="img">Modifier
                                                </button>
                                            </li>
                                            <li>
                                                <button value="<?= $row->id_semestre ?>" id="btn-del-semestre"
                                                    class="dropdown-item confirm-text"><img
                                                        src="<?= base_url('assets/img/icons/delete1.svg')?>"
                                                        class="me-2" alt="img">Supprimer
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire insert -->

        <div class="modal fade" id="createUE" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un semestre</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Code du semestre</label>
                                        <input type="text" id="id_semestre" value="" name="id_semestre">
                                        <p class="text-danger" id="error-id_semestre"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Titre du semestre</label>
                                        <input type="text" id="intitule" value="" name="intitule">
                                        <p class="text-danger" id="error-intitule"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Début du semestre</label>
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
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Fin du semestre</label>
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
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Année Académique</label>
                                        <select class="select" id="annee_ac" name="annee_ac">
                                            <option disabled selected>Selectionner Année Académique</option>
                                            <?php foreach($annee_ac as $row): ?>
                                            <option value="<?= $row->id_annee ?>"><?= $row->session?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="text-danger" id="error-annee_ac"></span>
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

        <!-- Formulaire update-->

        <div class="modal fade" id="edit_semestreModal" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modification du semestre</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" class="txt_csrf" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Code du semestre</label>
                                        <input type="text" id="edit_code_semestre" value="" name="edit_code_semestre">
                                        <p class="text-danger" id="error_edit_code_semestre"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Titre du semestre</label>
                                        <input type="text" id="edit_intitule" value="" name="edit_intitule">
                                        <p class="text-danger" id="error_edit_intitule"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Année Académique</label>
                                        <select class="select" id="edit_annee_ac" name="edit_annee_ac">
                                            <option disabled selected>Selectionner Année Académique</option>
                                            <?php foreach($annee_ac as $row): ?>
                                            <option value="<?= $row->id_annee ?>"><?= $row->session ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span class="text-danger" id="error_edit_annee_ac"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Début du semestre</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="edit_debut" id="edit_debut">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error_edit_debut"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Fin du semestre</label>
                                        <div class="input-groupicon">
                                            <input type="text" placeholder="JJ-MM-AAAA" class="datetimepicker"
                                                name="edit_fin" id="edit_fin">
                                            <div class="addonset">
                                                <img src="<?= base_url('assets/img/icons/calendars.svg')?>" alt="img">
                                            </div>
                                            <span class="text-danger" id="error_edit_fin"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2"
                                    id="save_edit_semestre">valider</button>
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
        'id_semestre': $('#id_semestre').val(),
        'intitule': $('#intitule').val(),
        'debut': $('#debut').val(),
        'fin': $('#fin').val(),
        'annee_ac': $('#annee_ac').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store-semestre",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-id_semestre').text(response.error1.id_semestre);
                $('#error-intitule').text(response.error1.intitule);
                $('#error-debut').text(response.error1.debut);
                $('#error-fin').text(response.error1.fin);
                $('#error-annee_ac').text(response.error1.annee_ac);
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
                    text: response.success,
                    type: "success"
                });
                location.reload(true);
            }
        }
    });


});
$(document).on('click', '#btn-edit-semestre', function(e) {
    e.preventDefault();
    var data = {
        'id': $(this).val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/edit_semestre",
        data: data,
        success: function(response) {
            console.log(response);
            $.each(response, function(key, value) {
                $('#edit_code_semestre').val(value['code']);
                $('#edit_intitule').val(value['label']);
                $('#edit_debut').val(value['debut']);
                $('#edit_fin').val(value['fin']);
                $('#edit_semestreModal').modal('show');
            });
        }
    });


});
$(document).on('click', '#save_edit_semestre', function(e) {
    e.preventDefault();
    var csrfName =  $('.txt_csrf').attr('name');
    var csrfHash =  $('.txt_csrf').val();
    var data = {
        [csrfName] : csrfHash,
        'id_semestre': $('#edit_code_semestre').val(),
        'intitule': $('#edit_intitule').val(),
        'debut': $('#edit_debut').val(),
        'fin': $('#edit_fin').val(),
        'annee_ac': $('#edit_annee_ac').val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/update_semestre",
        data: data,
        success: function(response) {
            $('.txt_csrf').val(response.token);
            if (response.error1) {
                $('#error_edit_debut').text(response.error1.debut);
                $('#error_edit_fin').text(response.error1.fin);
                $('#error_edit_annee_ac').text(response.error1.annee_ac);
                $('#error_edit_intitule').text(response.error1.intitule);
                $('#error_edit_code_semestre').text(response.error1.id_semestre);              
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
                    text: response.success,
                    type: "success"
                });
                location.reload(true);
            }
        }
    });


});
$(document).on('click', '#btn-del-semestre', function(e) {
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
                url: "<?= base_url(route_to('delete_semestre')) ?>",
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
</script>
<?= $this->endSection()?>