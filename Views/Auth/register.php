<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css')?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <?php session() ?>
            <form action="<?= base_url(route_to('auth/store')) ?>" method="post">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <div class="login-userheading">
                                <h3>Create an Account</h3>
                                <!-- <h4>Continue where you left off</h4> -->
                            </div>
                            <div class="form-login">
                                <label>Nom utilisateur</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="Entrer votre nom utilisateur" name="username" value="<?= old('username')?>">
                                    <img src="<?= base_url('assets/img/icons/users1.svg') ?>" alt="img">
                                    <p class="text-danger"><?= session('errors.username') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="email" placeholder="Entrer votre adresse email" name="email" value="<?= old('email')?>">
                                    <img src="<?= base_url('assets/img/icons/mail.svg')?>" alt="img">
                                    <p class="text-danger"><?= session('errors.email') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Mot de passe</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="Entrer votre mot de passe"
                                        name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                    <p class="text-danger"><?= session('errors.password') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Mot de passe</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="Confirmer votre mot de passe"
                                        name="c_password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                    <p class="text-danger"><?= session('errors.c_password') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Fonction</label>
                                <div class="form-group">
                                    <select class="select" name="groupe">
                                        <option disabled selected>Selectionner une fonction</option>
                                        <?php foreach($groupes as $row) :?>
                                        <option value="<?= $row->id_groupe ?>"><?= $row->label ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p class="text-danger"><?= session('errors.groupe') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Etablissement</label>
                                <div class="form-group">
                                    <select class="select" name="id_ets">
                                        <option disabled selected>Selectionner votre établissement</option>
                                        <?php foreach($ets as $row) :?>
                                        <option value="<?= $row->id_etab ?>"><?= $row->label ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p class="text-danger"><?= session('errors.ets') ?></p>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type "submit" class="btn btn-login">Enregistrer</button>
                            </div>
                            <div class="signinform text-center">
                                <h4>Vous avez déjà un compte? cliquez <a href="<?= base_url(route_to('login')) ?>" class="hover-a">ici</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="login-img">
                        <img src="<?= base_url('assets/img/login.jpg')?>" alt="img">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="<?= base_url('assets/js/jquery-3.6.0.min.js')?>"></script>

    <script src="<?= base_url('assets/js/feather.min.js')?>"></script>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?= base_url('assets/js/script.js')?>"></script>
    <script src="<?= base_url('assets/plugins/select2/js/select2.min.js')?>"></script>
</body>

</html>