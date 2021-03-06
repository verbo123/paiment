<?php
require 'localization.php';
$title=ma_tra("Partenaires/Développeurs");
require 'pages/includes/htmlheader.php';
?>
<link type="text/css" href="assets/devop/css/argon.css?v=1.0.1" rel="stylesheet">
<link href="assets/devop/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/devop/vendor/nucleo/css/nucleo.css" rel="stylesheet">

<div id="header_paiement" class="major special" >
    <div class="ve_center">
        <!-- <h1 style="font-size: 50px;font-family: 'Pacifico';"> <span style="color:#e0c3fc;">Gandokin</span><span style="color: #8ec5fc">Tche  </span> </span></h1> -->
        <h2 style="font-size: 25px"><?php echo ma_tra("Intégrer facilement")?> <br> <?php echo ma_tra("l'API sur votre platforme")?></h2>
        <div class="call-to-action">
            <button style="width: 300px; height: 50px" type="submit" value="submit your quote" class="doc btn submint_btn form-control">
               <?php echo ma_tra("Documentation")?>
            </button>
        </div>

    </div>
</div>



<section style="padding-bottom:0" class="section section-lg pt-lg-0 mt--100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div style="text-align: left;margin-bottom: 15px" class="satisfaction_item">
                                    <div class="sat_icon">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                </div>
                                <h6 style="font-size: 1em;" class="text-primary text-uppercase">API/REST API</h6>
                                <p class="description mt-3">
                                   <?php echo ma_tra("Nous mettons à votre disposition les services REST que vous pouvez invoquer dans vos plateformes e-commerce, transport,..etc.")?></p>
                                <div>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-primary">web</span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-primary">IOS</span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-primary">Android</span>
                                </div>
                                <a href="https://docs.gandokintche.com/" class="btn btn-primary mt-4"><?php echo ma_tra("Lire la suite...")?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div style="text-align: left;margin-bottom: 15px" class="satisfaction_item">
                                    <div class="sat_icon">
                                        <i class="ni ni-books"></i>
                                    </div>
                                </div>
                                <h6 style="font-size: 1em;" class="text-success text-uppercase"><?php echo ma_tra("Documentation complète");?></h6>
                                <p class="description mt-3">
                                    <?php echo ma_tra("Nous mettons à votre disposition la documentation complète d'intégration du service.")?>
                                   </p>
                                <div>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-success"><?php echo ma_tra("Simple") ?></span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-success"><?php echo ma_tra("Rapide")?></span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-success"><?php echo ma_tra("Sécurisé")?></span>
                                </div>
                                <a href="https://docs.gandokintche.com/quick-start" class="btn btn-success mt-4"><?php echo ma_tra("Consulter...")?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                <div style="text-align: left;margin-bottom: 15px" class="satisfaction_item">
                                    <div class="sat_icon">
                                        <i class="ni ni-planet"></i>
                                    </div>
                                </div>
                                <h6 style="font-size: 1em;" class="text-warning text-uppercase"><?php echo ma_tra("Nos services")?></h6>
                                <p class="description mt-3">
                                    <?php echo ma_tra("Vous pouvez")?> <a target="_blank" href="#"><?php echo ma_tra("créer un compte")?></a>
                                    <?php echo ma_tra("chez nous et utiliser nos différents services (Virements, achats en ligne,...etc) juste en quelques clics.")?>
                                   </p>
                                <div>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-warning"><?php echo ma_tra("Rapide")?></span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-warning"><?php echo ma_tra("Fiable")?></span>
                                    <span style="font-size: 0.8em" class="badge badge-pill badge-warning"><?php echo ma_tra("Sécurisé")?></span>
                                </div>
                                <a href="payment" class="btn btn-warning mt-4"><?php echo ma_tra("Lire la suite...")?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section style="padding-top:0" class="section section-lg">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="assets/devop/img/theme/promo-1.png" class="img-fluid floating">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="pr-md-5">
                    <div style="width: 5em;height: 5em" class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                        <i style="font-size: 2em" class="ni ni-settings-gear-65"></i>
                    </div>
                    <h3><?php echo ma_tra("Profitez des avantages du partenariat")?></h3>
                    <p><?php echo ma_tra("Notre Programme Partenaires vous donne toutes les clés pour proposer à vos marchands des expériences de paiement innovantes.")?>
                    </p>
                    <ul class="list-unstyled mt-5">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div style="width: 4em;height: 4em"  class="badge badge-circle badge-success mr-3">
                                        <i style="font-size: 2em" class="ni ni-notification-70"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="line-height: 2em;font-size: 1em;" class="mb-0">
                                        <?php echo ma_tra("Des informations actualisées sur les dernières initiatives et améliorations des produits GandokinTché")?>
                                    </h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div style="width: 4em;height: 4em"  class="badge badge-circle badge-success mr-3">
                                        <i style="font-size: 2em" class="ni ni-support-16"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="line-height: 2em;font-size: 1em;" class="mb-0">
                                        <?php echo ma_tra("Un accès interne à l'assistance technique et aux experts commerciaux")?>
                                    </h6>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div style="width: 4em;height: 4em" class="badge badge-circle badge-success mr-3">
                                        <i style="font-size: 2em" class="ni ni-satisfied"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="line-height: 2em;font-size: 1em;" class="mb-0">
                                        <?php echo ma_tra("Une meilleure visibilité de votre entreprise dans notre Annuaire des partenaires")?>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<section  class="question_area">
    <div class="container">
        <div class="main_title">
            <h2><?php echo ma_tra("Nos outils pour les développeurs")?></h2>
            <p><?php echo ma_tra("Que vous cherchiez un outil de développement ou une API, nos documentations pour les développeurs GandokinTché vous aideront à vous lancer. ")?></p>
        </div>
<!--        <div class="row">-->
<!--            <div class="col-md-7">-->
<!--                <div class="left_question_inner">-->
<!--                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading" role="tab" id="headingOne">-->
<!--                                <h4 class="panel-title">-->
<!--                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<!--                                        --><?php //echo ma_tra("1.Intégration sur Application Android")?>
<!--                                        <i class="fa fa-minus" aria-hidden="true"></i>-->
<!--                                        <i class="fa fa-plus" aria-hidden="true"></i>-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">-->
<!--                                <div class="panel-body">-->
<!--                                    <a class="price_btn" href="#">--><?php //echo ma_tra("Lancer le téléchargement") ?><!--</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading" role="tab" id="headingTwo">-->
<!--                                <h4 class="panel-title">-->
<!--                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
<!--                                        --><?php //echo ma_tra("2. Intégration sur Application IOS") ?>
<!--                                        <i class="fa fa-minus" aria-hidden="true"></i>-->
<!--                                        <i class="fa fa-plus" aria-hidden="true"></i>-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">-->
<!--                                <div class="panel-body">-->
<!--                                    <a class="price_btn" href="#">--><?php //echo ma_tra("Lancer le téléchargement") ?><!--</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading" role="tab" id="headingThree">-->
<!--                                <h4 class="panel-title">-->
<!--                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--                                        --><?php //echo ma_tra("3. Intégration sur Application web (PHP)")?>
<!--                                        <i class="fa fa-minus" aria-hidden="true"></i>-->
<!--                                        <i class="fa fa-plus" aria-hidden="true"></i>-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">-->
<!--                                <div class="panel-body">-->
<!--                                    <a class="price_btn" href="#">--><?php //echo ma_tra("Lancer le téléchargement")?><!--</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading" role="tab" id="headingfour">-->
<!--                                <h4 class="panel-title">-->
<!--                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">-->
<!--                                        --><?php //echo ma_tra("4.Intégration sur Application web (Javascript)")?>
<!--                                        <i class="fa fa-minus" aria-hidden="true"></i>-->
<!--                                        <i class="fa fa-plus" aria-hidden="true"></i>-->
<!--                                    </a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">-->
<!--                                <div class="panel-body">-->
<!--                                    <a class="price_btn" href="#">--><?php //echo ma_tra("Lancer le téléchargement")?><!--</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <a href="#" class="lip pull-right" style="color: #00A0D1;font-size: 18px">-->
<!--                        --><?php //echo ma_tra("Voir la documentation")?>
<!--                    <span> <i class="fa fa-arrow-right"></i> </span>-->
<!--                </a>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-5" id="qui">-->
<!--                <div class="right_question_img" >-->
<!--                    <img src="assets/img/enr.png" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>





<?php
require 'pages/includes/htmlfooter.php';
?>

<script type="text/javascript">
    $('.doc').click(function () {
        window.location.href="https://docs.gandokintche.com";
    });
</script>