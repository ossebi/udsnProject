<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?> de Matière <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Gestionnaire des enseignants</h4>
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

            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="setvaluecash">
                    <ul>
                        <li>
                            <a href="<?= base_url(route_to('ajout_enseignant'))?>" class="paymentmethod">
                                <img src="<?= base_url('assets/img/icons/plus.svg')?>" alt="img" class="me-2">
                                Ajouter
                            </a>
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
                        <h6>Total d'enseignant</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="<?= base_url('assets/img/icons/filter.svg')?>" alt="img">
                                <span><img src="<?= base_url('assets/img/icons/closes.svg')?>" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="<?= base_url('assets/img/icons/search-white.svg')?>" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top">
                                    <i class="fa fa-th" data-bs-toggle="tooltip" title="Affichage grille"></i>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="<?= base_url('assets/img/icons/pdf.svg')?>" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="<?= base_url('assets/img/icons/excel.svg')?>" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="imprimer"><img
                                        src="<?= base_url('assets/img/icons/printer.svg')?>" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>ID </th>
                                <th>Nom</th>
                                <th>Prenom </th>
                                <th>Genre </th>
                                <th>Grade</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($enseignants as $row): ?>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td><?= $row['matricule'] ?></td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="<?= base_url('assets/img/profiles/enseignants/'.$row['profil']) ?>"
                                            alt="product">
                                    </a>
                                    <?= $row['nom'] ?>
                                </td>
                                <td><?= $row['prenom'] ?></td>
                                <td><?= $row['genre'] ?> </td>
                                <td><?= $row['grade'] ?> </td>
                                <td><span class="badges bg-lightgreen"><?= $row['statut'] ?></span></td>
                                <td><?= $row['phone'] ?></td>
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
                                                Detail Enseignant</a>
                                        </li>
                                        <li>
                                            <a href="edit-sales.html" class="dropdown-item"><img
                                                    src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                    alt="img">Modifier Enseignant
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#createpayment"><img
                                                    src="<?= base_url('assets/img/icons/plus-circle.svg')?>"  class="me-2" alt="img">
                                                    Affecter Matière</a>
                                        </li>
                                        <li>
                                            <button value="<?= $row['id_enseignant'] ?>"  class="dropdown-item confirm-text"><img
                                                    src="<?= base_url('assets/img/icons/delete1.svg')?>" class="me-2"
                                                    alt="img">Supprimer Enseignant
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

        <!-- Formulaire de création d'unité d'enseignement -->

        <div class="modal fade" id="createUE" tabindex="-1" aria-labelledby="create" aria-hidden="true">
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
                                        <ul class="nav nav-tabs nav-tabs-solid">
                                            <li class="nav-item"><a class="nav-link active" href="#solid-tab1"
                                                    data-bs-toggle="tab">Etape 1</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab2"
                                                    data-bs-toggle="tab">Contenu notionnel</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab3"
                                                    data-bs-toggle="tab">Objectif</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid-tab4"
                                                    data-bs-toggle="tab">Métode pédagogique</a></li>
                                        </ul><br><br>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="solid-tab1">
                                                <p class="text-success msg"></p>
                                                <form action="<?= base_url(route_to('departement/storeECUE')) ?>"
                                                    method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Code de l'ECUE</label>
                                                                <input type="text" id="code_ecue" value=""
                                                                    name="code_ecue">
                                                                <p class="text-danger" id="error-code"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Intitulé</label>
                                                                <input type="text" id="intitule" value=""
                                                                    name="intitule">
                                                                <p class="text-danger" id="error-intitule"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>U.E associée</label>
                                                                <select class="select" name="ue" id="ue">
                                                                    <option disabled selected>Selectionner l'UE</option>
                                                                </select>
                                                                <p class="text-danger" id="error-ue"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Nombre de crédit</label>
                                                                <input type="number" id="credit" value="" name="credit">
                                                                <p class="text-danger" id="error-credit"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Coéfficient</label>
                                                                <input type="number" id="coef" value="" name="coef">
                                                                <p class="text-danger" id="error-coef"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Volume Horaire</label>
                                                                <input type="number" id="heure" value="" name="heure">
                                                                <p class="text-danger" id="error-heure"></p>
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
                                            <div class="tab-pane" id="solid-tab2">
                                                <div class="card-header">
                                                    <h5 class="card-title">Contenu notionnel</h5>
                                                </div>
                                                <form action="<?= base_url(route_to('departement/storeUE')) ?>"
                                                    method="post">
                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <textarea name="object" class="tinymce" id="object"
                                                                cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-success me-2"
                                                            id="save-ue">valider</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="solid-tab3">
                                                <div class="card-header">
                                                    <h5 class="card-title">Objectif de l'ECUE</h5>
                                                </div>
                                                <form action="<?= base_url(route_to('departement/storeUE')) ?>"
                                                    method="post">
                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <textarea name="object" class="tinymce" id="object"
                                                                cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-success me-2"
                                                            id="save-ue">valider</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="solid-tab4">
                                                <div class="card-header">
                                                    <h5 class="card-title">Méthode pédagogique</h5>
                                                </div>
                                                <form action="<?= base_url(route_to('departement/storeUE')) ?>"
                                                    method="post">
                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <textarea name="object" class="tinymce" id="object"
                                                                cols="30" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-success me-2"
                                                            id="save-ue">valider</button>
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
$(function() {
    $('#id_ens').select2({
        ajax: {
            url: "<?= base_url(route_to('search_enseignant_by_id')) ?>",
            type: "post",
            dataType: "json",
            delay: 250,
            data: function(params) {
                return {
                    id: params.term
                };
            },
            processResults: function(data) {
                console.log(data);
                // return {results: response.data};
            },
            cache: true
        }
    });
});
$(document).on('click', '.confirm-text', function(e) {
    Swal.fire({
        title: "Êtes vous sur de supprimer cet enseignant ?",
        text: "Une fois confirmer l'enseignant sera définitivement supprimé",
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
                    url: "<?= base_url(route_to('delete_enseignant')) ?>",
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