<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/favicon.png') ;?> ">
	<link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') ;?> ">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css') ;?> ">
	<link rel="stylesheet" href="<?=base_url('assets/css/skin.css') ;?> ">
	<link rel="stylesheet" href="<?=base_url('assets/vendor/fullcalendar/css/fullcalendar.min.css') ;?> ">
	<link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') ;?> ">
	
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?= $this->include('etudiant/layout/header') ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <?= $this->renderSection('content') ;?>
        <!--**********************************
            Content body end
        ***********************************-->
        <?= $this->include('etudiant/layout/footer') ?>