<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>de cycle <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Modification du Cycle</h4>
            </div>
            <?php if(session('msg.body')):?>
            <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show" role="alert">
                <strong><?= session('msg.body') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;?>
        </div>

        <!-- Formulaire de création d'unité d'enseignement -->
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url(route_to('update_cycle')) ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $cycle->id_cycle?>">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Intitulé du cycle</label>
                                <input type="text" id="cycle" value="<?= old('cycle') ?? $cycle->intitule?>" name="cycle">
                                <p class="text-danger" id="error-cycle"><?= session('errors.intitule') ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Responsable du cycle</label>
                                <input type="text" id="responsable" value="<?= old('responsable') ?? $cycle->responsable?>" name="responsable">
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
<?= $this->endSection()?>