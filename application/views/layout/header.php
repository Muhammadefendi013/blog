<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>STT-NF</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <style>
            body {
                background-image: linear-gradient( 109.6deg,  rgba(247,253,166,1) 11.2%, rgba(128,255,221,1) 57.8%, rgba(255,128,249,1) 85.9% );
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">STT-NF</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a  class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/mahasiswa/index")?>">Mahasiswa</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/dosen/index")?>">Dosen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/matakuliah/index")?>">Matakuliah</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url("index.php/login/logout")?>">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>