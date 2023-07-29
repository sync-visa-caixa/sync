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

<body class="body-scroll" data-page="wallet">

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
            <!-- wallet balance -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-44 rounded-10">
                                <img src="../assets/img/user1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <p class="mb-0 text-color-theme">Rita</p>
                            <p class="text-muted size-12">AG: <?=  $_SESSION['branchCode']?> <?=  $_SESSION['currency']?></p>
                        </div>
                        <div class="col-auto">
                            <a href="addmoney" class="btn btn-44 btn-light shadow-sm">
                                <i class="bi bi-plus-circle"></i>
                            </a>
                            <a href="withdraw" class="btn btn-44 btn-default shadow-sm ms-1">
                                <i class="bi bi-arrow-down-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card theme-bg text-white border-0 text-center">
                    <div class="card-body">
                        <h1 class="display-1 my-2"><?= $_SESSION['availableAmountAccount'];?></h1>
                        <p class="text-muted mb-2"></p>
                    </div>
                </div>
            </div>

            <!-- summary -->
            <div class="row mb-3">
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-warning text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0">Pontos</p>
                                    <p>48546 pts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-success text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0">Cashback</p>
                                    <p>15 BRL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tabs structure -->
            <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">Cards</button>
                </li>
            </ul>
            <div class="tab-content" id="assetstabsContent">
                <div class="tab-pane fade show active" id="cards" role="tabpanel">
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

                    <!-- Transactions -->
                    <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Transações<br><small class="fw-normal text-muted">Hoje, 29 jul 2023</small>
                    </h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="transactions" class="small">Ver tudo</a>
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
                                    <p class="text-muted size-12">Comida</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-25.00</p>                                   
                                    <p class="text-muted size-12">Crédito Final 4545</p>
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
                                    <p class="text-muted size-12">Transporte</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-26.00</p>                                   
                                    <p class="text-muted size-12">Crédito Final 4545</p>
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
                                    <p class="text-muted size-12">Comida</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-18.00</p>                                   
                                    <p class="text-muted size-12">Débito Final 5500</p>
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
                                    <p class="text-muted size-12">Outros</p>
                                </div>                                
                                <div class="col align-self-center text-end">
                                    <p class="mb-0">-105.00</p>                                   
                                    <p class="text-muted size-12">Débito Final 5500 </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

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
                    <a class="nav-link" href="index">
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
                    <a class="nav-link active" href="wallet">
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