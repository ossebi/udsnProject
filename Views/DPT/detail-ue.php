<?php session()?>
<?= $this->extend('DPT/layout/main') ?>

<?= $this->section('title')?>Détail | UE <?= $this->endSection()?>

<?= $this->section('content')?>

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
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
                        <h5 class="card-title">Fiche descriptive d’unité d’enseignement (UE) et ses éléments
                            constitutifs (ECUE)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="productdetails productdetailnew">
                                    <ul class="product-bar">
                                        <li>
                                            <h6 class="manitoryblue">Code UE : <?= $ue->code_ue?></h6>
                                        </li>
                                        <li>
                                            <h6 class="manitoryblue">Nombre des crédits: <?= $ue->nb_credit?></h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="productdetails productdetailnew">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Intitulé de l'UE: </h4>
                                            <h6 class="manitoryblue"><?= $ue->intitule?></h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="productdetails productdetailnew">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>
                                                Diplôme et Parcours <br>
                                                Licence : Mathématiques & Informatique <br>
                                                Parcours : <?= $ue->id_parcours?> <br>
                                                Spécialité : <?= $ue->id_specialite?>
                                            </h4>
                                            <h6 class="manitoryblue">Semestre : <?= $ue->id_semestre?></h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="productdetails productdetailnew">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Université: Université Denis SASSOU NGUESSO</h4>
                                            <h6 class="manitoryblue">Etablissement : <?= $ue->id_etablissement?></h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="productdetails productdetailnew">
                                <li>1. Objectifs de l’UE (Savoirs, aptitudes et compétences)</li>
                                <ul class="product-bar">
                                    <li>
                                        <h6 class="manitoryblue"><span>Objectifs :</span> <?= $ue->object_ue?></h6>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-12 col-sm-12">
                            <div class="productdetails productdetailnew">
                                <li>2. Enseignements</li>
                                <ul class="product-bar">
                                    
                                </ul>
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