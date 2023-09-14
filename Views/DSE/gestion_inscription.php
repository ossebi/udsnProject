<?php session()?>
<?= $this->extend('DPT/layout/main') ?>
<?= $this->section('title')?> des Inscription <?= $this->endSection()?>
<?= $this->section('content')?>
<div class="page-wrapper cardhead">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                   <h4>FICHE D'INSCRIPTION ACADEMIQUE</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane" id="progress-seller-details">
                            <div class="mb-4">
                                <h5>Identification de l'étudiant</h5>
                            </div>
                            <?php if(session('msg.body')):?>
                            <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show"
                                role="alert">
                                <strong><?= session('msg.body') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                            <?php endif;?>
                            <form method="post" action="<?= base_url(route_to('store_enseignant')) ?>"
                                enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Photo de profile</label>
                                                    <div class="image-upload image-upload-new">
                                                        <input type="file" id="profil" name="profil">
                                                        <div class="image-uploads">
                                                            <img src="<?= base_url('assets/img/icons/upload.svg')?>"
                                                                alt="img">
                                                            <h4>Glisser déposer la photo ici</h4>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?= session('errors.profil') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" id="nom" name="nom">
                                                    <span class="text-danger"><?= session('errors.nom') ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Prenom</label>
                                                    <input type="text" id="prenom" name="prenom">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date de naissance</label>
                                                    <div class="input-groupicon">
                                                        <input type="text" placeholder="JJ-MM-AAAA"
                                                            class="datetimepicker" name="date" id="date">
                                                        <div class="addonset">
                                                            <img src="<?= base_url('assets/img/icons/calendars.svg')?>"
                                                                alt="img">
                                                        </div>
                                                        <span class="text-danger"><?= session('errors.date') ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lieu de naissance</label>
                                                    <input type="text" id="lieu" name="lieu">
                                                    <span class="text-danger"><?= session('errors.lieu') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Nationalité</label>
                                                        <input type="text" id="nationalite" name="nationalite">
                                                        <span class="text-danger"><?= session('errors.phone') ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-sm-6 col-12 col-form-label">Genre</label>
                                                    <div class="col-lg-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="genre"
                                                                id="gender_male" value="Homme">
                                                            <label class="form-check-label" for="gender_male">
                                                                Homme
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="genre"
                                                                id="gender_female" value="Femme">
                                                            <label class="form-check-label" for="gender_female">
                                                                Femme
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?= session('errors.genre') ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input type="text" id="adresse" name="adresse">
                                                    <span
                                                        class="text-danger"><?= session('errors.nationalite') ?></span>
                                                </div>
                                                <div class="form-group">
                                                <div class="form-group">
                                                    <label>Arrondissement</label>
                                                    <input type="text" id="adresse" name="adresse">
                                                    <span
                                                        class="text-danger"><?= session('errors.nationalite') ?></span>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Quartier</label>
                                                        <input type="text" id="quartier" name="quartier">
                                                        <span class="text-danger"><?= session('errors.phone') ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-lg-6 col-sm-6 col-12 col-form-label">Situation Matrimoniale</label>
                                                        <div class="col-lg-3">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    id="celibataire" value="celibataire">
                                                                <label class="form-check-label" for="permanent">
                                                                    Célibataire
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    id="marie" value="marie">
                                                                <label class="form-check-label" for="marie">
                                                                    Marié(e)
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    id="divorce" value="divorce">
                                                                <label class="form-check-label" for="divorce">
                                                                    Divorcé(e)
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    id="veuf" value="veuf">
                                                                <label class="form-check-label" for="veuf">
                                                                    Veuf(Veuve)
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <span class="text-danger"><?= session('errors.status') ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input type="tel" id="phone" name="phone">
                                                    <span class="text-danger"><?= session('errors.phone') ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="email" id="email" name="email">
                                                    <span class="text-danger"><?= session('errors.phone') ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h5>Identification de l'étudiant</h5>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Cycle</label>
                                                    <select class="select" id="cycle" name="cycle">
                                                        <option disabled selected>Selectionner le cycle</option>
                                                        <option value="MA">1er cycle</option>
                                                    </select>
                                                    <span class="text-danger"><?= session('errors.grade') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Niveaux</label>
                                                    <select class="select" id="niveau" name="niveau">
                                                        <option disabled selected>Selectionner le niveau</option>
                                                        <option value="MA">1ere année</option>
                                                    </select>
                                                    <span class="text-danger"><?= session('errors.grade') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-sm-6 col-12 col-form-label">Statut</label>
                                                    <div class="col-lg-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="statut"
                                                                id="nouveau" value="nouveau">
                                                            <label class="form-check-label" for="nouveau">Nouveau</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="statut"
                                                                id="redoublant" value="redoublant">
                                                            <label class="form-check-label" for="redoublant">Redoublant</label>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?= session('errors.genre') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-5 col-sm-6 col-12 col-form-label">Mouvement</label>
                                                    <div class="col-lg-6">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="mouvement"
                                                                id="inscription" value="inscription">
                                                            <label class="form-check-label" for="inscription">Inscription</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="mouvement"
                                                                id="reinscription" value="reinscription">
                                                            <label class="form-check-label" for="reinscription">Réinscription</label>
                                                        </div>
                                                    </div>
                                                    <span class="text-danger"><?= session('errors.status') ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <button id="step1" class="btn btn-success">Valider <i class="bx bx-chevron-right ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
// $(function() {
//     $('#id_parcours').select2({
//         placeholder: 'Choisir parcours',
//         tags: true
//     }).on('select2:close', function() {
//         var element = $(this);
//         var parcours = $.trim(element.val());
//         if (parcours != '') {
//             $.ajax({
//                 type: "post",
//                 url: "/departement/searchECUE",
//                 data: {
//                     'id_parcours': parcours
//                 },
//                 success: function(response) {
//                     $.each(response.matieres, function(key, value) {
//                         $('.dataue').append(
//                             '<tr> \
//                                     <td>' + value['code_ecue'] + '</td>\
//                                     <td>' + value['titre'] + '</td>\
//                                     <td>' + value['credit'] + '</td>\
//                                     <td>' + value['coef'] + '</td>\
//                                     <td>' + value['vol_heure'] + '</td>\
//                                     <td>' + value['ue'] + '</td>\
//                                     <td class="text-center">\
//                                         <a class="detail-ue"href=detail-element-cumul/' + value['code_ecue'] + '><i class="si si-eye" data-bs-toggle="tooltip" title="Voir détail"></i></a>&nbsp;\
//                                         <a class="edit-ue"href=modifie-element-cumul/' + value['code_ecue'] + '><i class="si si-note" data-bs-toggle="tooltip" title="Modifier"></i></a>&nbsp;\
//                                         <button class="deleteue"style="color:red;border:none;background:none"value=' +
//                             value['code_ecue'] + '><i class="si si-trash" data-bs-toggle="tooltip" title="Supprimer"></i></button>\
//                                     </td>\
//                                 </tr>'
//                         );
//                     });
//                 }
//             });
//         }
//     });
// });
// 
</script>
<script>
// $(document).on('click', '#step1', function(e) {
//     e.preventDefault();
//     var data = {
//         'nom': $('#nom').val(),
//         'prenom': $('#prenom').val(),
//         'date': $('#date').val(),
//         'lieu': $('#lieu').val(),
//         'phone': $('#phone').val(),
//         'genre': $('input[name=genre]:checked').val(),
//         'nationalite': $('#nationalite').val(),
//         'domaine': $('#domaine').val(),
//         'grade': $('#grade').val(),
//         'status': $('input[name=status]:checked').val(),
//         'profil': $('#profil').val()
//     };

//     $.ajax({
//         type: "POST",
//         url: "<?= base_url(route_to('store_enseignant')) ?>",
//         data: data,
//         success: function(response) {
//             if (response.error1) {
//                 $('#error-nom').text(response.error1.nom);
//                 $('#error-date').text(response.error1.date);
//                 $('#error-lieu').text(response.error1.lieu);
//                 $('#error-phone').text(response.error1.phone);
//                 $('#error-genre').text(response.error1.genre);
//                 $('#error-nationalite').text(response.error1.nationalite);
//                 $('#error-domaine').text(response.error1.domaine);
//                 $('#error-grade').text(response.error1.grade);
//                 $('#error-status').text(response.error1.status);
//                 $('#error-profil').text(response.error1.profil);
//             } else if (response.error2) {

//                 Swal.fire({
//                     title: "Erreur!",
//                     text: "Désolé l'enregistrement n'a pas abouti",
//                     type: "error",
//                     confirmButtonClass: "btn btn-danger",
//                     buttonsStyling: !1
//                 });

//             } else if (response) {
//                 console.log(response);
//             }
//         }
//     });


// });

// $(document).on('click', '#searchUE', function(e) {
//     e.preventDefault();
//     var data = {
//         'id_parcours': $('#id_parcours').val()
//     };

//     $.ajax({
//         type: "POST",
//         url: "/departement/searchUE",
//         data: data,
//         success: function(response) {
//             $.each(response.ue, function(key, value) {

//                 $('.dataue').append(
//                     '<tr> \
//                         <td>' + parseInt(key + 1) + '</td>\
//                         <td>' + value['code_ue'] + '</td>\
//                         <td>' + value['intitule'] + '</td>\
//                         <td>' + value['nb_credit'] + '</td>\
//                         <td>' + value['intitule_cycle'] + '</td>\
//                         <td>' + value['id_parcours'] + '</td>\
//                         <td>' + value['id_specialite'] + '</td>\
//                         <td>' + value['id_semestre'] + '</td>\
//                         <td>' + value['id_semestre'] + '</td>\
//                         <td class="text-center">\
//                             <a class="detail-ue"href=detail-unite-enseignement/' + value['code_ue'] + '><i class="si si-eye" data-bs-toggle="tooltip" title="Voir détail"></i></a>&nbsp;\
//                             <a class="edit-ue"href=modifie-unite-enseignement/' + value['code_ue'] + '><i class="si si-note" data-bs-toggle="tooltip" title="Modifier"></i></a>&nbsp;\
//                             <button class="deleteue"style="color:red;border:none;background:none"value=' + value[
//                         'code_ue'] + '><i class="si si-trash" data-bs-toggle="tooltip" title="Supprimer"></i></button>\
//                         </td>\
//                     </tr>'
//                 );
//             });
//             // console.log(response.ue);
//         }
//     });

// });

// $(document).on('click', '.detail-ue', function(e) {

//     // $(this).val()

//     // $('#createUE').modal('show');

// });
</script>
<?= $this->endSection()?>