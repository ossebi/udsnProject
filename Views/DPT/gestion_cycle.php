<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>de cycle <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire de Cycles</h4>
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
                                data-bs-target="#create-cycle">
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
                <h4 class="card-title">Liste de tous les cycles</h4>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Intitulé</th>
                                        <th>Chef du département</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="dataue">
                                    <?php foreach ($cycles as $key => $cycle):?>
                                    <tr>
                                        <td><?= $key+1?></td>
                                        <td><?= $cycle->label?></td>
                                        <td><?= $cycle->responsable?></td>
                                        <td class="text-center">
                                            <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                            <li>
                                                <button value="<?= $cycle->id_cycle ?>" id="btn-edit-cycle"
                                                    class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                        alt="img">Modifier
                                                </button>
                                            </li>
                                            <li>
                                                <button value="<?= $cycle->id_cycle ?>" id="btn-del-cycle"
                                                    class="dropdown-item confirm-text"><img
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
        </div>

        <!-- Formulaire de création d'unité d'enseignement -->

        <div class="modal fade" id="create-cycle" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Insertion du cycle</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Intitulé du cycle</label>
                                        <input type="text" id="cycle" value="" name="cycle">
                                        <p class="text-danger" id="error-cycle"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Responsable du cycle</label>
                                        <input type="text" id="responsable" value="" name="responsable">
                                        <p class="text-danger" id="error-code"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2" id="save-cycle">Valider</button>
                                <a class="btn btn-primary" data-bs-dismiss="modal">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire update -->

        <div class="modal fade" id="edit_cycleModal" tabindex="-1" aria-labelledby="create" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modification du cycle</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <input type="hidden" class="txt_csrf" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        <input type="hidden" id="edit_id_cycle">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Intitulé du cycle</label>
                                        <input type="text" id="edit_cycle" value="" name="edit_cycle">
                                        <p class="text-danger" id="error_edit_cycle"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Responsable du cycle</label>
                                        <input type="text" id="edit_responsable" value="" name="edit_responsable">
                                        <p class="text-danger" id="error_edit_responsable"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success me-2" id="save_edit_cycle">Valider</button>
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
$(document).on('click', '#save-cycle', function(e) {
    e.preventDefault();
    var data = {
        'cycle': $('#cycle').val(),
        'responsable': $('#responsable').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store-cycle",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-cycle').text(response.error1.cycle);
            }
            if (response.msg) {
                $('#error-cycle').text(response.msg);
            }
            $('#create-cycle').modal('hide');
            $('#create-cycle').find('input').val('');
            Swal.fire({
                title: "Bravo!",
                text: response.success,
                type: "success"
            });
            location.reload(true);
        }
    });

});
$(document).on('click', '#btn-edit-cycle', function(e) {
    e.preventDefault();
    var data = {
        'id': $(this).val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/edit_cycle",
        data: data,
        success: function(response) {
            $.each(response, function(key, value) {
                $('#edit_id_cycle').val(value['id_cycle']);
                $('#edit_cycle').val(value['label']);
                $('#edit_responsable').val(value['responsable']);
                $('#edit_cycleModal').modal('show');
            });
        }
    });


});
$(document).on('click', '#save_edit_cycle', function(e) {
    e.preventDefault();
    var csrfName =  $('.txt_csrf').attr('name');
    var csrfHash =  $('.txt_csrf').val();
    var data = {
        [csrfName] : csrfHash,
        'id': $('#edit_id_cycle').val(),
        'cycle': $('#edit_cycle').val(),
        'responsable': $('#edit_responsable').val()
    };
    $.ajax({
        type: "POST",
        url: "/departement/update_cycle",
        data: data,
        success: function(response) {
            $('.txt_csrf').val(response.token);
            if (response.error1) {
                $('#error-cycle').text(response.error1.cycle);              
            } else if (response.error2) {
                Swal.fire({
                    title: "Erreur!",
                    text: "Désolé l'enregistrement n'a pas abouti",
                    type: "error",
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: !1
                });
            } else if (response.success) {
                $('#edit_cycleModal').modal('hide');
                $('#edit_cycleModal').find('input').val('');
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
$(document).on('click', '#btn-del-cycle', function(e) {
    Swal.fire({
        title: "Êtes vous sur de supprimer ce cycle?",
        text: "Une fois confirmer ce cycle sera supprimé",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: !0,
        cancelButtonText: "Annuler",
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6", 
    }).then((t)=>{
        if(t.value){
            const id = $(this).val();
            $.ajax({
                    type: "POST",
                    url: "<?= base_url(route_to('delete_cycle')) ?>",
                    data: {
                        'id': id
                    },
                    success: function(response) {
                        if(response.success){
                            Swal.fire({
                                title: "Bravo!",
                                text: "Suppression réussie",
                                type: "success"
                            });
                            location.reload(true);
                        }else{
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
    return false;
});
</script>
<?= $this->endSection()?>