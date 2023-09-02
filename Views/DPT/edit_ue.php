<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>Modifier | UE <?= $this->endSection()?>

<?= $this->section('content')?>

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(session('msg.body')):?>
                    <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show" role="alert">
                        <strong><?= session('msg.body') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif;?>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Modification d'unité d'enseignement</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <form action="<?= base_url(route_to('update_ue')) ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Code de l'UE</label>
                                                <input type="text" id="code_ue"
                                                    value="<?= old('code_ue') ?? $ue->code_ue ?>" name="code_ue">
                                                <p class="text-danger" id="error-code"><?= session('errors.code_ue') ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Intitulé</label>
                                                <input type="text" id="intitule"
                                                    value="<?= old('intitule') ?? $ue->intitule ?>" name="intitule">
                                                <p class="text-danger" id="error-intitule">
                                                    <?= session('errors.intitule') ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Nombre de crédit</label>
                                                <input type="number" id="credit"
                                                    value="<?= old('credit') ?? $ue->nb_credit ?>" name="credit">
                                                <p class="text-danger" id="error-credit"><?= session('errors.credit') ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Parcours</label>
                                                <select class="select" name="parcours" id="parcours">
                                                    <option disabled selected><?= old('parcours') ?? $ue->id_parcours ?></option>
                                                    <?php
                                                        foreach ($parcours as $key => $row):?>
                                                    <option value="<?= $parcours[$key]->id_parcours ?>">
                                                        <?= $parcours[$key]->parcours ?>
                                                    </option>
                                                    <?php endforeach;?>
                                                    ?>
                                                </select>
                                                <p class="text-danger" id="error-parcours">
                                                    <?= session('errors.parcours') ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Spécialité</label>
                                                <select class="select" name="specialite" id="specialite">
                                                    <option disabled selected>
                                                        <?= old('specialite') ?? $ue->id_specialite ?></option>
                                                    <?php
                                                    foreach ($specialite as $key => $row):?>
                                                    <option value="<?= $specialite[$key]->id_specialite ?>">
                                                        <?= $specialite[$key]->specialite ?></option>
                                                    <?php endforeach;?>
                                                    ?>
                                                </select>
                                                <p class="text-danger" id="error-specialite">
                                                    <?= session('errors.specialite') ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Semestre</label>
                                                <select class="select" name="semestre" id="semestre">
                                                    <option disabled selected><?= old('semestre') ?? $ue->id_semestre ?>
                                                    </option>
                                                    <?php
                                                            foreach ($semestre as $key => $row):?>
                                                    <option value="<?= $semestre[$key]->id_semestre ?>">
                                                        <?= $semestre[$key]->semestre ?></option>
                                                    <?php endforeach;?>
                                                    ?>
                                                </select>
                                                <p class="text-danger" id="error-semestre">
                                                    <?= session('errors.semestre') ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Objectif de l'UE</label>
                                                <textarea name="object" class="tinymce" id="object" cols="30" rows="10"
                                                    value="<?= old('object') ?? $ue->object_ue?>"></textarea>
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

    </div>
</div>

<?= $this->endSection()?>

<?= $this->section('js')?>
<script>


</script>
<?= $this->endSection()?>