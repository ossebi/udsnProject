<?php session()?>
<?= $this->extend('Config/layout/main') ?>

<?= $this->section('content')?>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title text-white">Création du compte admin</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <form action="<?= base_url(route_to('store_admin')) ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nom de l'administrateur</label>
                            <input type="text" class="form-control" name="nom">
                            <span class="text-danger"><?= session('errors.nom') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Adresse email</label>
                            <input type="email" class="form-control" name="email">
                            <span class="text-danger"><?= session('errors.email') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" name="mdp">
                            <span class="text-danger"><?= session('errors.mdp') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="c_mdp">
                            <span class="text-danger"><?= session('errors.c_mdp') ?></span>
                        </div>
                        <div class="form-group">
                            <label>Photo de profil</label>
                            <input type="file" name="profil" accept="image/*" class="form-control">
                            <span class="text-danger"><?= session('errors.profil') ?></span>
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