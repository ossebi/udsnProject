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
            <form action="<?= base_url(route_to('signin')) ?>" method="post">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                        <?php if(session('msg.body')):?>
                        <div class="alert alert-<?= session('msg.type') ?> alert-dismissible fade show" role="alert">
                            <strong><?= session('msg.body') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                        <?php endif;?>
                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4>Please login account</h4>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="email" placeholder="Entrer votre adresse email" name="email"
                                        value="<?= old('email')?>">
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
                                <button type "submit" class="btn btn-login">Valider</button>
                            </div>
                            <div class="form-login">
                                <div class="alreadyuser">
                                    <h4>Vous n'avez pas de compte? veuillez cliquez <a href="<?= base_url(route_to('register')) ?>" class="hover-a"> ici</a></h4>
                                </div>
                            </div>
                                <div class="form-login">
                                    <button type "submit" class="btn btn-login">Prendre une préinscription</button>
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