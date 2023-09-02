<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

    <div class="header">

        <div class="header-left active">
            <a href="index.html" class="logo">
                <!-- <img src="<?= base_url('assets/img/logo/ets/') ?>" alt=""> -->
            </a>
            <a href="index.html" class="logo-small">
                <img src="<?= base_url('assets/img/logo-small.png') ?>" alt="">
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <ul class="nav user-menu">
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <img src="<?= base_url('assets/img/icons/notification-bing.svg') ?>" alt="img"> <span
                        class="badge rounded-pill">4</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Tout éffacer </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt="" src="<?= base_url('assets/img/profiles/avatar-02.jpg') ?>">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                new task <span class="noti-title">Patient appointment booking</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="activities.html">Voir toutes les notifications</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-img"><img src="<?= base_url('assets/img/profiles/avator1.jpg') ?>" alt="">
                        <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                            <span class="user-img"><img src="<?= base_url('assets/img/profiles/avator1.jpg') ?>" alt="">
                                <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6><?= session('username') ?></h6>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> Mon
                            Compte</a>
                        <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                data-feather="settings"></i>Reglages</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="<?= base_url(route_to('signout'))?>"><img
                                src="<?= base_url('assets/img/icons/log-out.svg') ?>" class="me-2" alt="img">Se
                            déconncter</a>
                    </div>
                </div>
            </li>
        </ul>


        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.html">Mon compte</a>
                <a class="dropdown-item" href="generalsettings.html">Réglages</a>
                <a class="dropdown-item" href="<?= base_url(route_to('signout'))?>">Se deconnecter</a>
            </div>
        </div>

    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li>
                        <a href="<?= base_url(route_to('home'))?>"
                            class="<?=service('request')->uri->getPath() == 'departement/home' ? 'active' : '' ?>"><img
                                src="<?= base_url('assets/img/icons/dashboard.svg') ?>" alt="img"><span>
                                Tableau de Bord</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="si si-graduation"></i><span>Gestion des Etudiants</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="<?= base_url(route_to('inscription'))?>" class="<?=service('request')->uri->getPath() == 'DSE/gestion-inscription' ? 'active' : '' ?>">Inscrire un étudiant</a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion-student'))?>" class="<?=service('request')->uri->getPath() == 'DSE/gestion-etudiant' ? 'active' : '' ?>">Liste de tous les étudiants</a>
                            </li>
                            <li><a href="<?= base_url(route_to('view-student-inscrit'))?>" class="<?=service('request')->uri->getPath() == 'DSE/list-etudiant' ? 'active' : '' ?>">Liste des Inscrits</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="si si-book-open"></i><span>
                                Gestion des Notes</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="view-examen">Note de Contrôle Continu</a></li>
                            <li><a href="view-examen"> Note du Partiel</a></li>
                            <li><a href="createexpense.html">Note de Rattrape</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="si si-book-open"></i><span>
                                Gestion des Examens</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="view-examen">Note de Contrôle Continu</a></li>
                            <li><a href="view-examen"> Note du Partiel</a></li>
                            <li><a href="createexpense.html">Note de Rattrape</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="<?= base_url('assets/img/icons/settings.svg') ?>"
                                alt="img"><span>
                                Réglages</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="generalsettings.html">Parametre général</a></li>
                            <li><a href="emailsettings.html">Email Settings</a></li>
                            <li><a href="grouppermissions.html">Group Permissions</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>