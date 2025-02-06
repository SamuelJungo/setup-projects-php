  
<?php include '../includes/top.php'; ?>


    
<div id="pcoded" class="pcoded">

    <div class="pcoded-container">
        <!-- Menu header start -->
        <?php include '../includes/nav.php'; ?>
        <!-- Menu header end -->
        <div class="pcoded-main-container">
            <!-- Main menu header -->
            <?php include_once '../includes/header.php'; ?>

            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body" style="margin-top: 40px;">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-c-yellow update-card">
                                                <div class="card-block">
                                                    <div class="row align-items-end">
                                                        <div class="col-8">
                                                            <h4 class="text-white">23</h4>
                                                            <h6 class="text-white m-b-0">Empresas Cadastradas</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <canvas id="update-chart-1" height="50"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>último registo : 10-08-2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-c-green update-card">
                                                <div class="card-block">
                                                    <div class="row align-items-end">
                                                        <div class="col-8">
                                                            <h4 class="text-white">3</h4>
                                                            <h6 class="text-white m-b-0">Empresas Regime Geral</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <canvas id="update-chart-2" height="50"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>Data de Entrega - AGT: 31-05-2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-c-pink update-card">
                                                <div class="card-block">
                                                    <div class="row align-items-end">
                                                        <div class="col-8">
                                                            <h4 class="text-white">20</h4>
                                                            <h6 class="text-white m-b-0">Empresas Regime Simplificado</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <canvas id="update-chart-3" height="50"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>Data de Entrega - AGT: 30-04-2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-c-lite-green update-card">
                                                <div class="card-block">
                                                    <div class="row align-items-end">
                                                        <div class="col-8">
                                                            <h4 class="text-white">Fiscalidade</h4>
                                                            <a href="https://agt.minfin.gov.ao" target="_blank">
                                                            <h6 class=" m-b-0" style="color:yellow">Regime Geral</h6>
                                                            </a>
                                                            <h6 class="text-white m-b-0">Regime Simplificado</h6>
                                                        </div>
                                                        <div class="col-4 text-right">
                                                            <canvas id="update-chart-4" height="50"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>última actividade : 20-08-2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
