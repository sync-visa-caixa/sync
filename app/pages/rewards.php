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

<body class="body-scroll" data-page="rewards">

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
            <!-- summary blocks -->
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

            <!-- offers banner-->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card theme-bg text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h1>ATÉ 15% OFF</h1>
                                    <p class="size-12 text-muted">
                                        Cumpra suas metas e ganhe descontos na próxima fatura
                                    </p>
                                    <div class="tag border-dashed border-opac">
                                        DESCPAG15OFF
                                    </div>
                                </div>
                                <div class="col-6 align-self-center ps-0">
                                    <img src="../assets/img/offergraphics.png" alt="" class="mw-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  ''

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
                    <a class="nav-link active" href="rewards">
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
                            <span class="nav-text">Wallet</span>
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