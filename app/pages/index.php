<?php
include_once('../api/mockUser.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>SYNC - Você conectado ao seu dinheiro</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="../assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="../assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="index">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="../assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4">SYNC<br><strong>Suas Finanças...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <?php include('../menu.php');?>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <?php include('../header.php');?>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <!-- welcome user -->
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="avatar avatar-50 shadow rounded-10">
                        <img src="../assets/img/user2.jpg" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <h4 class="text-color-theme"><span class="fw-normal">Oi</span>, Rita</h4>
                    <p class="text-muted">Bom Dia</p>
                </div>
            </div>

            <!-- swiper credit cards -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <div class="swiper-container cardswiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($_SESSION['creditCardData'] as $creditCard) { ?>
                                <div class="swiper-slide">
                                    <div class="card dark-bg">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-auto align-self-center">
                                                    <img src="../assets/img/visacard.png" alt="">
                                                </div>
                                                <div class="col align-self-center text-end">
                                                    <p class="small">
                                                        <span class="text-uppercase size-10">Vencimento</span><br>
                                                        <span class="text-muted"><?= $creditCard['dueDate'] ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">   
                                                <div class="col-12">
                                                    <h4 class="fw-normal mb-2">
                                                        <?= $creditCard['availableAmount'] ?>
                                                        <span class="small text-muted"><?= $currency ?></span>
                                                    </h4>
                                                    <p class="mb-0 text-muted size-12">XXXX XXXX XXXX <?= $creditCard['identificationNumber'] ?></p>
                                                    <p class="text-muted size-12">Fatura atual:  <?= $creditCard['billTotalAmount'] ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- offers banner -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card theme-bg text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h1>15% OFF</h1>
                                    <p class="size-12 text-muted">
                                        On every bill pay, launch offer get 5% Extra
                                    </p>
                                    <div class="tag border-dashed border-opac">
                                        BILLPAY15OFF
                                    </div>
                                </div>
                                <div class="col-6 align-self-center ps-0">
                                    <img src="../assets/img/offergraphics.png" alt="" class="mw-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dark mode switch -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="darkmodeswitch">
                                <label class="form-check-label text-muted px-2 " for="darkmodeswitch">Activate Dark
                                    Mode</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Saving targets -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Saving Targets</h6>
                </div>
                <div class="col-auto">

                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">USA Trip</p>
                                    <p>60<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Car loan</p>
                                    <p>85<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                        <i class="bi bi-house"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="small text-muted mb-0">Home Loan</p>
                                            <p>3510.00 $</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-0">Next EMI</p>
                                            <p class="small">1 Aug 2024</p>
                                        </div>
                                    </div>

                                    <div class="progress alert-danger h-4">
                                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Transactions<br><small class="fw-normal text-muted">Today, 24 Aug 2021</small>
                    </h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="transactions" class="small">View all</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush bg-none">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow rounded-10 ">
                                        <img src="../assets/img/company4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0">Zomato</p>                                   
                                    <p class="text-muted size-12">Food</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-25.00</p>                                   
                                    <p class="text-muted size-12">Debit Card 4545</p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow rounded-10">
                                        <img src="../assets/img/company5.png" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0">Uber</p>                                   
                                    <p class="text-muted size-12">Travel</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-26.00</p>                                   
                                    <p class="text-muted size-12">Debit Card 4545</p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow rounded-10">
                                        <img src="../assets/img/company1.png" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0">Starbucks</p>                                   
                                    <p class="text-muted size-12">Food</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-18.00</p>                                   
                                    <p class="text-muted size-12">Cash</p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow rounded-10">
                                        <img src="../assets/img/company3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="text-color-theme mb-0">Walmart</p>                                   
                                    <p class="text-muted size-12">Clothing</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-105.00</p>                                   
                                    <p class="text-muted size-12">Wallet</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Inicio</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stats">
                        <span>
                            <i class="nav-icon bi bi-laptop"></i>
                            <span class="nav-text">Meta</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <div class="nav-link">
                        <span class="theme-radial-gradient">
                            <i class="close bi bi-x"></i>
                            <img src="../assets/img/centerbutton.svg" class="nav-icon" alt="">
                        </span>
                        <div class="nav-menu-popover justify-content-between">
                            <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace('pay');">
                                <i class="bi bi-credit-card size-32"></i><span>Pagar</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace('sendmoney');">
                                <i class="bi bi-arrow-up-right-circle size-32"></i><span>Enviar</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace('bills');">
                                <i class="bi bi-receipt size-32"></i><span>Contas</span>
                            </button>

                            <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace('receivemoney');">
                                <i class="bi bi-arrow-down-left-circle size-32"></i><span>Receber</span>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rewards">
                        <span>
                            <i class="nav-icon bi bi-gift"></i>
                            <span class="nav-text">Recompensas</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wallet">
                        <span>
                            <i class="nav-icon bi bi-wallet2"></i>
                            <span class="nav-text">Carteira</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->


    <!-- Required jquery and libraries -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="../assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="../assets/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="../assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="../assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="../assets/js/app.js"></script>

</body>

</html>