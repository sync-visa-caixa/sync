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

    <!-- date rage picker -->
    <link rel="stylesheet" href="../assets/vendor/daterangepicker/daterangepicker.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="../assets/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll" data-page="stats">

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
            <!-- chart js areachart-->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <!-- calendar -->
                            <div class="row">
                                <div class="col position-relative align-self-center">
                                    <input type="text" placeholder="Select date range" readonly="readonly" id="daterange" class="calendar-daterange">
                                    <h6 class="mb-1">Expense</h6>
                                    <p class="small text-muted textdate">1/8/2024 - 7/8/2024</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-light btn-44 daterange-btn">
                                        <i class="bi bi-calendar-range size-22"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-2">
                            <canvas id="areachart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-6 col-md-12">
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 alert-success text-success rounded-circle">
                                                <i class="bi bi-arrow-down-left-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col px-0 align-self-center">
                                            <p class="text-muted size-12 mb-0">Income</p>
                                            <p>1544</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-12">
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                                <i class="bi bi-arrow-up-right-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col px-0 align-self-center">
                                            <p class="text-muted size-12 mb-0">Expense</p>
                                            <p>1424</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-12">
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 alert-primary text-primary rounded-circle">
                                                <i class="bi bi-arrow-down-left-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col px-0 align-self-center">
                                            <p class="text-muted size-12 mb-0">Invested</p>
                                            <p>1600</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-12">
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-40 alert-warning text-warning rounded-circle">
                                                <i class="bi bi-arrow-up-right-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col px-0 align-self-center">
                                            <p class="text-muted size-12 mb-0">Coins</p>
                                            <p>1254</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Saving targets -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Top Categories</h6>
                </div>
                <div class="col-auto">

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                    <div class="chartdoughnut mb-4">
                        <div class="datadisplay text-center shadow">
                            <h1 class="fw-normal">15.56k</h1>
                            <p class="text-muted">Expense</p>
                        </div>
                        <canvas id="doughnutchart"></canvas>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressfour"></div>
                                        <div class="avatar avatar-30 alert-warning text-warning rounded-circle">
                                            <i class="bi bi-basket"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Grocery</p>
                                    <p>55<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="smallchart">
                            <canvas id="smallchart4"></canvas>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressthree"></div>
                                        <div class="avatar avatar-30 alert-danger text-danger rounded-circle">
                                            <i class="bi bi-house"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Rent</p>
                                    <p>10<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="smallchart">
                            <canvas id="smallchart3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Travel</p>
                                    <p>25<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="smallchart">
                            <canvas id="smallchart2"></canvas>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <i class="bi bi-gear"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted">Other</p>
                                    <p>10<span class="small">%</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="smallchart">
                            <canvas id="smallchart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- offers banner-->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-danger text-white text-center">
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
                                    <img src="../assets/img/offergraphics-red.png" alt="" class="mw-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- summary blocks -->
            <div class="row">
                <div class="col-12 px-0">
                    <div class="swiper-container summayswiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-primary text-white rounded-circle">
                                                    <i class="bi bi-clock"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+155</h6>
                                                <p class="text-muted small">Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-warning">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-warning text-white rounded-circle">
                                                    <i class="bi bi-cpu"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+365</h6>
                                                <p class="text-muted small">Processing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-success">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-success text-white rounded-circle">
                                                    <i class="bi bi-folder"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+658</h6>
                                                <p class="text-muted small">Pojects</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-danger text-white rounded-circle">
                                                    <i class="bi bi-bar-chart"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+248</h6>
                                                <p class="text-muted small">Complete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- extra expense  -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Extra Expenses</h6>
                </div>
                <div class="col-auto align-self-center">

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-success text-success rounded-circle">
                                        <i class="bi bi-controller size-20"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-0">804.91 $</p>
                                    <p class="text-muted size-12">Gaming Console</p>
                                    <p class="small text-muted">Long days lockdown inspires to buy some gaming console
                                        to play.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                        <i class="bi bi-heart-fill"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-0">1424.91 $</p>
                                    <p class="text-muted size-12">Medical Treatment</p>
                                    <p class="small text-muted">Due to long illness and food infection medical treatment
                                        undergone 3 days</p>
                                </div>
                            </div>
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
                    <a class="nav-link active" href="stats">
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

    <!-- Chart js script -->
    <script src="../assets/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="../assets/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="../assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- daterange picker script -->
    <script src="../assets/css/momentjs/latest/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- page level custom script -->
    <script src="../assets/js/app.js"></script>

</body>

</html>