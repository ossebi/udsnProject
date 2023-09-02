<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Gestion &nbsp;|&nbsp;<?= $this->renderSection('title')?></title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/simpleline/simple-line-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/fontawesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>

<body>
    <?= $this->include('DPT/layout/header') ?>
    <?= $this->renderSection('content') ?>
    </div>
    <?= $this->include('DPT/layout/footer') ?> 
    <?= $this->renderSection('js') ?> 
</body>

</html>