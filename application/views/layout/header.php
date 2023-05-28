<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title><?= $title; ?></title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"  rel="stylesheet" />
    <!-- DATATABLES BS 4-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css_admin/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Library leaflet maps -->
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- library google chart -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        $data_cms = $this->db->get('background');
        $bg_name = $data_cms->row('bg_name');
        $bg_color = $data_cms->row('bg_color');
        $bg_color_second = $data_cms->row('bg_color_second');
    ?>

    <style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: <?= $bg_color; ?>;
        z-index: 100;
        transition: all 0.5s ease;
    }

    .sidebar.close {
        width: 78px;
    }

    .sidebar .logo-details {
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .sidebar .logo-details i {
        font-size: 30px;
        color: #fff;
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
    }

    .sidebar .logo-details .logo_name {
        font-size: 22px;
        color: #fff;
        font-weight: 600;
        transition: 0.3s ease;
        transition-delay: 0.1s;
    }

    .sidebar.close .logo-details .logo_name {
        transition-delay: 0s;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links {
        height: 100%;
        padding: 30px 0 150px 0;
        overflow: auto;
    }

    .sidebar.close .nav-links {
        overflow: visible;
    }

    .sidebar .nav-links::-webkit-scrollbar {
        display: none;
    }

    .sidebar .nav-links li {
        position: relative;
        list-style: none;
        transition: all 0.4s ease;
    }

    .sidebar .nav-links li:hover {
        background: <?= $bg_color; ?>;
    }

    .sidebar .nav-links li .iocn-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar.close .nav-links li .iocn-link {
        display: block
    }

    .sidebar .nav-links li i {
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .sidebar .nav-links li.showMenu i.arrow {
        transform: rotate(-180deg);
    }

    .sidebar.close .nav-links i.arrow {
        display: none;
    }

    .sidebar .nav-links li a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .sidebar .nav-links li a .link_name {
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        transition: all 0.4s ease;
    }

    .sidebar.close .nav-links li a .link_name {
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links li .sub-menu {
        padding: 6px 6px 14px 80px;
        margin-top: -10px;
        background: <?= $bg_color; ?>;
        display: none;
    }

    .sidebar .nav-links li.showMenu .sub-menu {
        display: block;
    }

    .sidebar .nav-links li .sub-menu a {
        color: #fff;
        font-size: 15px;
        padding: 5px 0;
        white-space: nowrap;
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    .sidebar .nav-links li .sub-menu a:hover {
        opacity: 1;
    }

    .sidebar.close .nav-links li .sub-menu {
        position: absolute;
        left: 100%;
        top: -10px;
        margin-top: 0;
        padding: 10px 20px;
        border-radius: 0 6px 6px 0;
        opacity: 0;
        display: block;
        pointer-events: none;
        transition: 0s;
    }

    .sidebar.close .nav-links li:hover .sub-menu {
        top: 0;
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
    }

    .sidebar .nav-links li .sub-menu .link_name {
        display: none;
    }

    .sidebar.close .nav-links li .sub-menu .link_name {
        font-size: 18px;
        opacity: 1;
        display: block;
    }

    .sidebar .nav-links li .sub-menu.blank {
        opacity: 1;
        pointer-events: auto;
        padding: 3px 20px 6px 16px;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar .nav-links li:hover .sub-menu.blank {
        top: 50%;
        transform: translateY(-50%);
    }

    .sidebar .profile-details {
        position: fixed;
        bottom: 0;
        width: 260px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: <?= $bg_color_second ?>;
        padding: 12px 0;
        transition: all 0.5s ease;
    }

    .sidebar.close .profile-details {
        background: none;
    }

    .sidebar.close .profile-details {
        width: 78px;
    }

    .sidebar .profile-details .profile-content {
        display: flex;
        align-items: center;
    }

    .sidebar .profile-details img {
        height: 52px;
        width: 52px;
        object-fit: cover;
        border-radius: 16px;
        margin: 0 14px 0 12px;
        background: #7f3e98;
        transition: all 0.5s ease;
    }

    .sidebar.close .profile-details img {
        padding: 10px;
    }

    .sidebar .profile-details .profile_name,
    .sidebar .profile-details .job {
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        white-space: nowrap;
    }

    .sidebar.close .profile-details i,
    .sidebar.close .profile-details .profile_name,
    .sidebar.close .profile-details .job {
        display: none;
    }

    .sidebar .profile-details .job {
        font-size: 12px;
    }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        #map { 
            height: 180px; 
        }
    </style>

</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-injection'></i>
            <span class="logo_name"><?= $bg_name; ?></span>
        </div>
        <ul class="nav-links">
            <!-- <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/dashboard/index"); ?>" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                        <i class='bx bx-grid'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                </div>
            </li> -->
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/dashboard"); ?>">
                        <i class='bx bxs-home'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-book-alt'></i>
                        <span class="link_name">Informasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Informasi</a></li>
                    <li><a href="<?= base_url("administrator/data/area"); ?>">Data Kecamatan</a></li>
                    <li><a href="<?= base_url("administrator/data/data_vaksinasi"); ?>">Data Vaksinasi</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/proses/index"); ?>">
                        <i class='bx bx-book-reader'></i>
                        <span class="link_name">Proses Perhitungan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Proses Perhitungan</a></li>
                    <li><a href="<?= base_url("administrator/kmeans/index"); ?>">Kmeans</a></li>
                    <!-- <li><a href="<?= base_url("administrator/kmeans/iterasi_hasil"); ?>">DBI</a></li> -->
                    <li><a href="<?= base_url("administrator/proses/index"); ?>">Pengelompokan</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("administrator/dashboard/index"); ?>">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">CMS</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">CMS</a></li>
                    <li><a href="<?= base_url("administrator/cms/index"); ?>">Background</a></li>
                    <li><a href="<?= base_url("administrator/cms/sosmed"); ?>">Social Media</a></li>
                    <li><a href="<?= base_url("administrator/cms/about"); ?>">About</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <i class='bx bx-user-pin'></i>
                    </div>
                    <div class="name-job">
                        <div class="profile_name"></div>
                        <div class="job">
                            <font color='#ffffff'>Log Out</font>
                        </div>
                    </div>
                    <a href="<?= base_url("auth/logout"); ?>"><i class='bx bx-log-out'></i></a>
                </div>
            </li>
            
        </ul>
    </div>

    <section class="section-p1">
        <div class="preloader">
            <div class="loading">
                <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
                <p><strong>Harap Tunggu</strong></p>
            </div>
        </div>
    </section>