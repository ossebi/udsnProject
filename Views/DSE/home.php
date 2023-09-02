<?php session()?>
<?= $this->extend('DSE/layout/main') ?>

<?= $this->section('title')?>Scolarité <?= $this->endSection()?>

<?= $this->section('content')?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><i data-feather="user"></i></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="307144.00">307,144.00</span></h5>
                        <h6>Total des Etudiants</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><i class="si si-user-female"></i></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="4385.00">4,385.00</span></h5>
                        <h6>Total des Etudiants Filles</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><i class="si si-people"></i></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="385656.50">385,656.50</span></h5>
                        <h6>Enseignants Permanents</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><i class="si si-people"></i></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="40000.00">400.00</span></h5>
                        <h6>Total Vacataire</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Customers</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Suppliers</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Purchase Invoice</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das3">
                    <div class="dash-counts">
                        <h4>105</h4>
                        <h5>Sales Invoice</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-12 col-12">
                <div class="card-body">
                    <div id="s-col" class="chart-set"></div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-12">
			<div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Evolution des contrôles continus</h4>
                <div class="table-responsive dataview">
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>ECUE</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                                    <td>1</td>
									<td>Thomas M. Martin</td>
                                    <td><span class="badges bg-lightred">Pending</span></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/eye1.svg')?>" class="me-2"
                                                        alt="img">Voir relévé de note</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="<?= base_url('assets/img/icons/edit.svg')?>" class="me-2"
                                                        alt="img">Contacter l'enseignant</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="<?= base_url('assets/img/icons/delete1.svg')?>"
                                                        class="me-2" alt="img">Marquer l'enseignant</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
									<td>2</td>
                                    <td>Thomas M. Martin</td>
                                    <td><span class="badges bg-lightgreen">Completed</span></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                    Detail</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                    Sale</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"
                                                    data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                        src="assets/img/icons/dollar-square.svg" class="me-2"
                                                        alt="img">Show
                                                    Payments</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"
                                                    data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                        src="assets/img/icons/plus-circle.svg" class="me-2"
                                                        alt="img">Create
                                                    Payment</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><img
                                                        src="assets/img/icons/download.svg" class="me-2"
                                                        alt="img">Download
                                                    pdf</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete
                                                    Sale</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
									<td>3</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges bg-lightgreen">Completed</span></td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                    Detail</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                    Sale</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"
                                                    data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                        src="assets/img/icons/dollar-square.svg" class="me-2"
                                                        alt="img">Show
                                                    Payments</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"
                                                    data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                        src="assets/img/icons/plus-circle.svg" class="me-2"
                                                        alt="img">Create
                                                    Payment</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><img
                                                        src="assets/img/icons/download.svg" class="me-2"
                                                        alt="img">Download
                                                    pdf</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="assets/img/icons/delete1.svg" class="me-2" alt="img">Delete
                                                    Sale</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Expired Products</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable ">
                        <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Brand Name</th>
                                <th>Category Name</th>
                                <th>Expiry Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="javascript:void(0);">IT0001</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="productlist.html">
                                        <img src="assets/img/product/product2.jpg" alt="product">
                                    </a>
                                    <a href="productlist.html">Orange</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>12-12-2022</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="javascript:void(0);">IT0002</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="productlist.html">
                                        <img src="assets/img/product/product3.jpg" alt="product">
                                    </a>
                                    <a href="productlist.html">Pineapple</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>25-11-2022</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="javascript:void(0);">IT0003</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="productlist.html">
                                        <img src="assets/img/product/product4.jpg" alt="product">
                                    </a>
                                    <a href="productlist.html">Stawberry</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>19-11-2022</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="javascript:void(0);">IT0004</a></td>
                                <td class="productimgname">
                                    <a class="product-img" href="productlist.html">
                                        <img src="assets/img/product/product5.jpg" alt="product">
                                    </a>
                                    <a href="productlist.html">Avocat</a>
                                </td>
                                <td>N/D</td>
                                <td>Fruits</td>
                                <td>20-11-2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection()?>