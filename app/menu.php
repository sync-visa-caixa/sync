<div class="sidebar-wrap  sidebar-pushcontent">
        <div class="sidebar dark-bg">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 ">
                    <div class="card shadow-sm bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="avatar avatar-44 rounded-15">
                                        <img src="../assets/img/user2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col px-0 align-self-center">
                                    <p class="mb-1">Rita</p>
                                    <p class="text-muted size-12">AG: <?=  $_SESSION['branchCode']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-opac text-white border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="display-4"><?= $_SESSION['availableAmountAccount']  ?></h1>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-muted">Saldo carteira</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="settings" href="settings">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                                <div class="col">Conta</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="stats" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-chat-text"></i></div>
                                <div class="col">Metas</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="signin" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                                <div class="col">Sair</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>