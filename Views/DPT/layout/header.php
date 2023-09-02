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
                        <a href="<?= base_url(route_to('departement'))?>"
                            class="<?=service('request')->uri->getPath() == 'departement/home' ? 'active' : '' ?>"><img
                                src="<?= base_url('assets/img/icons/dashboard.svg') ?>" alt="img"><span>
                                Dashboard</span> </a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <img src="<?= base_url('assets/img/icons/settings.svg') ?>" alt="img">
                            <span>Parametre</span> <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= base_url(route_to('gestion_academique'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-annee-academique' ? 'active' : '' ?>">Année
                                    Académique
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_semestre'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-semestre' ? 'active' : '' ?>">
                                    Semestres
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_cycle'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-cycle' ? 'active' : '' ?>">Cycle
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_parcours'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-parcours' ? 'active' : '' ?>">Parcours
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_specialite'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-specialite' ? 'active' : '' ?>">Spécialités
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_niveau'))?>"><span>Niveaux</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <img src="<?= base_url('assets/img/icons/users1.svg') ?>" alt="img">
                            <span>Gestion Académique</span> <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= base_url(route_to('gestion_ue'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-unite-enseignement' ? 'active' : '' ?>">Géstion
                                    des UE
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_matiere'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-matiere' ? 'active' : '' ?>">Gestion
                                    des matières
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_enseignant'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-enseignant' ? 'active' : '' ?>">Gérer
                                    les enseignants
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_emploi_du_temps'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion-emploi-du-temps' ? 'active' : '' ?>">Gérer
                                    les emplois du temps
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url(route_to('gestion_fiche'))?>"
                                    class="<?=service('request')->uri->getPath() == 'departement/gestion_fiche' ? 'active' : '' ?>">Gérer
                                    les fiches
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="si si-graduation"></i><span>
                                Gestion étudiants</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?= base_url(route_to('liste_etudiant'))?>">Liste des étudiants</a></li>
                            <li><a href="<?= base_url(route_to('groupe_etudiant'))?>">Groupe des étudiants </a></li>
                            <li><a href="<?= base_url(route_to('profile_etudiant'))?>">Profile étudiant</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="si si-book-open"></i><span>
                                Gestion des notes</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="add-examen">Relevé de notes</a></li>
                            <li><a href="view-examen">Evaluation</a></li>
                            <li><a href="createexpense.html">Résultats Examen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="<?= base_url('assets/img/icons/time.svg') ?>"
                                alt="img"><span>
                                Affectation</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="affectation-matiere">Affectations des matières</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="gestion-classe"><i data-feather="bar-chart-2"></i> <span> Géstion des
                                classes</span></a>
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