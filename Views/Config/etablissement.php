<?php session()?>
<?= $this->extend('Config/layout/main') ?>

<?= $this->section('content')?>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title text-white">Informations de l'établissement</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <form action="<?= base_url(route_to('store_ets')) ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Code établissement</label>
                            <input type="text" class="form-control" placeholder="Exemple: FSA" name="code_ets">
                            <span class="text-danger"><?= session('errors.code_ets') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Nom établissement</label>
                            <input type="text" class="form-control" name="nom_ets">
                            <span class="text-danger"><?= session('errors.nom_ets') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Logo établissement</label>
                            <input type="file" name="logo" accept="image/*" class="form-control">
                            <span class="text-danger"><?= session('errors.logo') ?></span>
                        </div>
                        <div class="form-group text-center custom-mt-form-group">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>