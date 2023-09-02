<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>de Spécialité <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire de Spécialité</h4>
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
                                data-bs-target="#createSpecialite">
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
                        <h6>Total de Spécialité du Parcours</h6>
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
                        <h6>Total d'enseignant dans tout le cycle</h6>
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
                        <h6>Total d'étudiant dans tout le cycle</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Liste de toutes les spécialités</h4>
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
                                    <th>Intitulé</th>
                                    <th>Parcours Type</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($specialites as $row): ;?>
                                <tr>
                                    <td><label class="checkboxs"><input type="checkbox"><span
                                                class="checkmarks"></span></label></td>
                                    <td><?= $row->code?></td>
                                    <td><?= $row->label?></td>
                                    <td><?= $row->parcours?></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/eye1.svg')?>" class="me-2" alt="img">
                                                    Detail Spécialité</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2" alt="img">Modifier Spécialité
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="<?= base_url('assets/img/icons/delete1.svg')?>" class="me-2" alt="img">Supprimer Spécialité
                                                </a>
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

        <!-- Formulaire de création d'unité d'enseignement -->

        <div class="modal fade" id="createSpecialite" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Insertion de la spécialité</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Code de la spécialité</label>
                                        <input type="text" id="id_specialite" value="" name="id_specialite">
                                        <p class="text-danger" id="error-id_specialite"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Intitulé</label>
                                        <input type="text" id="intitule" value="" name="intitule">
                                        <p class="text-danger" id="error-intitule"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Parcours</label>
                                        <select class="select" name="id_parcours" id="id_parcours">
                                            <option selected disabled>Selectionnez la spécialité</option>
                                            <?php foreach($parcours as $row): ?>
                                                <option value="<?= $row->id_parcours ?>"><?= $row->code ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-id_parcours"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Objectif de la spécialité</label>
                                        <textarea name="object" id="object" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2" id="save-spc">valider</button>
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
tinymce.init({
    selector: '#object',
    height: 220,
    plugins: [
        'advlist', 'advcode', 'advtable', 'autolink', 'checklist',
        'lists', 'link', 'preview', 'anchor', 'searchreplace', 'visualblocks',
        'powerpaste', 'formatpainter', 'insertdatetime', 'table', 'wordcount'
    ],

    toolbar: 'undo redo | bold italic backcolor | ' +
        'alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist'
});
</script>

<script>
$(document).on('click', '#save-spc', function(e) {
    e.preventDefault();
    var data = {
        'id_specialite': $('#id_specialite').val(),
        'intitule': $('#intitule').val(),
        'id_parcours': $('#id_parcours').val(),
        'object_spc': $('#object').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store-specialite",
        data: data,
        success: function(response) {
            if (response.error1) {
                console.log(response);
                $('#error-id_specialite').text(response.error1.id_specialite);
                $('#error-intitule').text(response.error1.intitule);
                $('#error-id_parcours').text(response.error1.id_parcours);
            } else if (response.error2) {
                console.log(response);
                Swal.fire({
                    title: "Erreur!",
                    text: "Désolé l'enregistrement n'a pas abouti",
                    type: "error",
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: !1
                });

            } else if (response.success) {
                $('#createSpecialite').modal('hide');
                $('#createSpecialite').find('input').val('');
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