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
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="<?= base_url('assets/img/icons/debitcard.svg')?>" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="<?= $totalRecords?>"></span></h5>
                        <h6>Total de parcours du cycle</h6>
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
                <h4 class="card-title">Liste des parcours</h4>
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
                                    <th>Intitulé</th>
                                    <th>Responsable</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($parcours as $row):?>
                                <tr>
                                    <td><label class="checkboxs"><input type="checkbox"><span
                                                class="checkmarks"></span></label></td>
                                    <td><?= $row->code?></td>
                                    <td><?= $row->label?></td>
                                    <td><?= $row->responsable?></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button value="<?= $row->id_parcours?>" class="dropdown-item" id="detail_parcours"><img
                                                        src="<?= base_url('assets/img/icons/eye1.svg')?>" class="me-2" alt="img">
                                                    Detail</button>
                                            </li>
                                            <li>
                                                <button value="<?= $row->id_parcours?>" class="dropdown-item" id="edit_parcours"><img
                                                    src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2" alt="img">Modifier
                                                </button>
                                            </li>
                                            <li>
                                                <button value="<?= $row->id_parcours?>" class="dropdown-item confirm-text" id="btn-del-parcours"><img
                                                    src="<?= base_url('assets/img/icons/delete1.svg')?>" class="me-2" alt="img">Supprimer
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
                        <h5 class="modal-title">Insertion du parcours</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Code du parcours</label>
                                        <input type="text" id="id_parcours" value="" name="id_parcours">
                                        <p class="text-danger" id="error-id_parcours"></p>
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
                                        <label>Cycle</label>
                                        <select class="select" id="cycle" name="cycle">
                                            <option disabled selected>Selectionner le cycle</option>
                                            <?php foreach($cycles as $row): ?>
                                                <option value="<?= $row->id_cycle ?>"><?= $row->label ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <p class="text-danger" id="error-cycle"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Responsable</label>
                                        <input type="text" id="responsable" value="" name="responsable">
                                        <p class="text-danger" id="error-responsable"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Objectif du parcours</label>
                                        <textarea name="object" class="" id="object" cols="30" rows="3"></textarea>
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
        'id_parcours': $('#id_parcours').val(),
        'intitule': $('#intitule').val(),
        'responsable': $('#responsable').val(),
        'cycle': $('#cycle').val(),
        'object': $('#object').val()
    };

    $.ajax({
        type: "POST",
        url: "/departement/store-parcours",
        data: data,
        success: function(response) {
            if (response.error1) {
                $('#error-id_parcours').text(response.error1.code);
                $('#error-intitule').text(response.error1.intitule);
                $('#error-cycle').text(response.error1.cycle);
                $('#error-responsable').text(response.error1.credit);
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
$(document).on('click', '#btn-del-parcours', function(e) {
    Swal.fire({
        title: "Êtes vous sur de procéder à la suppréssion?",
        text: "Une fois confirmer ce champ sera supprimé",
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
                    url: "<?= base_url(route_to('delete_parcours')) ?>",
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