<?php session()?>
<?= $this->extend('Config/layout/main') ?>

<?= $this->section('content')?>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title text-white">Bienvenu sur Votre Gestionnaire</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <div class="account-logo">
                        <p>
                            Afin de mieux utiliser votre application il est nécéssaire de la configurer avant son utilisation, veuillez
                            donc remplir toutes les information ci-après
                        </p>
                    </div>
                    <div>                 
                        <div class="form-group text-center custom-mt-form-group">
                            <a href="<?= base_url(route_to('config_ets'))?>" class="btn btn-primary btn-block account-btn" style="color:white">Suivant</a>
                        </div>
                        <div class="text-center">
                            <span>Besoin d'aide ? cliquez</span>
                            <a href="forgot-password.html">ici </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>