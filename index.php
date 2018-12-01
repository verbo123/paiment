<?php
$title="Accueil";
require 'pages/includes/htmlheader.php';
?>

<link type="text/css" href="assets/devop/css/argon_index.css?v=1.0.1" rel="stylesheet">
<link href="assets/devop/vendor/nucleo/css/nucleo.css" rel="stylesheet">



            <style type="text/css">

                #photoShowWrap{
                    /*height: 300px;*/
                    overflow: hidden;
                    position: relative;
                    width: 100%;
                    z-index: 1;

                }

                #photoShow{
                    /*height: 300px;*/
                    position: relative;
                    width: 1200px;
                }

                #photoShow img{
                    float: left;
                    /*height: 300px;*/
                    /*width: 200px;*/
                }
            </style>
    <!--================Slider Area =================-->
<!--    <section class="main_slider_area">-->
<!--        <div id="main_slider" class="rev_slider" style="height: 400px" data-version="5.3.1.6">-->
<!--            <ul>-->
<!--                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
<!---->
<!--                    <div class="slider_text_box">-->
<!--                        <div class="tp-caption first_text"-->
<!--                             data-x="['center','center','center','center']"-->
<!--                             data-y="['middle','middle','middle','middle']"-->
<!--                             data-hoffset="['0','0','0','0']"-->
<!--                             data-voffset="['0','0','0','0']"-->
<!--                             data-fontsize="['200','100','100','100','60']"-->
<!--                             data-lineheight="['100','100','100','100','70']"-->
<!--                             data-width="['none','none','none','none']"-->
<!--                             data-height="none"-->
<!--                             data-whitespace="['nowrap','nowrap','nowrap','normal']"-->
<!--                             data-type="text"-->
<!--                             data-responsive_offset="on"-->
<!--                             data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'-->
<!--                             data-textAlign="['center','center','center','center']"-->
<!--                             data-paddingtop="[0,0,0,0]"-->
<!--                             data-paddingright="[0,0,0,0]"-->
<!--                             data-paddingbottom="[10,10,10,10]"-->
<!--                             data-paddingleft="[0,0,0,0]">OnTouch</div>-->
<!---->
<!--                        <div class="tp-caption secand_text"-->
<!--                             data-x="['center','center','center','center']"-->
<!--                             data-y="['middle','middle','middle','middle']"-->
<!--                             data-hoffset="['0','0','0','0']"-->
<!--                             data-voffset="['150','100','100','100','70']"-->
<!--                             data-fontsize="['28','28','28','28']"-->
<!--                             data-lineheight="['38','38','38','38']"-->
<!--                             data-width="none"-->
<!--                             data-height="none"-->
<!--                             data-whitespace="nowrap"-->
<!--                             data-type="text"-->
<!--                             data-responsive_offset="on"-->
<!--                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'-->
<!--                             data-textAlign="['left','left','left','left']"-->
<!--                             data-paddingtop="[0,0,0,0]"-->
<!--                             data-paddingright="[0,0,0,0]"-->
<!--                             data-paddingbottom="[0,0,20,0]"-->
<!--                             data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">SIGN UP</a></div>-->
<!---->
<!---->
<!--                        <div class="tp-caption"-->
<!--                             data-x="['center','center','center','center']"-->
<!--                             data-y="['middle','middle','middle','middle']"-->
<!--                             data-hoffset="['0','0','0','0']"-->
<!--                             data-voffset="['150','100','100','100','70']"-->
<!--                             data-fontsize="['28','28','28','28']"-->
<!--                             data-lineheight="['38','38','38','38']"-->
<!--                             data-width="none"-->
<!--                             data-height="none"-->
<!--                             data-whitespace="nowrap"-->
<!--                             data-type="text"-->
<!--                             data-responsive_offset="on"-->
<!--                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'-->
<!--                             data-textAlign="['left','left','left','left']"-->
<!--                             data-paddingtop="[0,0,0,0]"-->
<!--                             data-paddingright="[0,0,0,0]"-->
<!--                             data-paddingbottom="[0,0,0,0]"-->
<!--                             data-margintop="[50,0,0,0]"-->
<!--                             data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="index.php">Ouvrir un compte gratuitement</a></div>-->
<!---->
<!---->
<!--                    </div>-->
<!--                </li>-->
<!--                <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
<!---->
<!--                    <div class="slider_text_box">-->
<!--                        <div class="tp-caption first_text"-->
<!--                             data-x="['center','center','center','center']"-->
<!--                             data-y="['middle','middle','middle','middle']"-->
<!--                             data-hoffset="['0','0','0','0']"-->
<!--                             data-voffset="['0','0','0','0']"-->
<!--                             data-fontsize="['200','100','100','100','60']"-->
<!--                             data-lineheight="['100','100','100','100','70']"-->
<!--                             data-width="['none','none','none','none']"-->
<!--                             data-height="none"-->
<!--                             data-whitespace="['nowrap','nowrap','nowrap','normal']"-->
<!--                             data-type="text"-->
<!--                             data-responsive_offset="on"-->
<!--                             data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'-->
<!--                             data-textAlign="['center','center','center','center']"-->
<!--                             data-paddingtop="[0,0,0,0]"-->
<!--                             data-paddingright="[0,0,0,0]"-->
<!--                             data-paddingbottom="[10,10,10,10]"-->
<!--                             data-paddingleft="[0,0,0,0]">OnTouch</div>-->
<!---->
<!--                        <div class="tp-caption secand_text"-->
<!--                             data-x="['center','center','center','center']"-->
<!--                             data-y="['middle','middle','middle','middle']"-->
<!--                             data-hoffset="['0','0','0','0']"-->
<!--                             data-voffset="['150','100','100','100','70']"-->
<!--                             data-fontsize="['28','28','28','28']"-->
<!--                             data-lineheight="['38','38','38','38']"-->
<!--                             data-width="none"-->
<!--                             data-height="none"-->
<!--                             data-whitespace="nowrap"-->
<!--                             data-type="text"-->
<!--                             data-responsive_offset="on"-->
<!--                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'-->
<!--                             data-textAlign="['left','left','left','left']"-->
<!--                             data-paddingtop="[0,0,0,0]"-->
<!--                             data-paddingright="[0,0,0,0]"-->
<!--                             data-paddingbottom="[0,0,0,0]"-->
<!--                             data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">SIGN UP</a></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->

    <div id="header" class="major special" >
        <div class="ve_center">
            <h1 style="font-size: 50px;font-family: 'Pacifico'; display:none">
            <span style="color:#e0c3fc;">Gandokin</span><span style="color: #8ec5fc">Tche</span></h1>

           <!--  <img style="max-width: 120px;" src="assets/img/logof.png" alt=""> -->
            <h2 style="font-size: 25px">Le système de paiement, <br> en ligne sécurisé au Bénin</h2>
            <div style="margin-top: 50px;" class="call-to-action">
                <button style="width: 300px; height: 50px"  class="ouvrir btn submint_btn form-control">
                    Ouvrir un compte gratuitement
                </button>
            </div>

        </div>


    </div>


    <!--================End Slider Area =================-->

<!--================App Feature Area =================-->
<section class="app_feature_area " id="feature">
    <div class="container">
        <div class="main_title">

            <div class="tit">
                <span style="font-size: 30px;font-family: 'Pacifico'; display:none">
                <span style="color:#e0c3fc;">Gandokin</span><span style="color: #8ec5fc">Tche : </span> </span>
                <span style="color: #0d1c3f;font-size:25px;font-weight: 600;">Une solution simple et sûr pour être payé et se faire payer partout au Bénin</span>
            </div>
            <h2></h2>


            <p> 
                Grâce à GandokinTché, nous construisons une économie rapide basée sur un système complet et surtout adaptés aux réalités de son environnement.
                Nous mettons à disposition des Entrepreneurs du Bénin et du continents où qu'ils soient des outils flexibles pour le commerce en ligne.
                 Que vous lanciez un business SaaS,
                une place de marché sur demande, un site e-commerce ou une plateforme de
                crowdfunding, l'API GandokinTché vous offre une facilité d’intégration et des 
                nouvelles fonctionnalités sans équivalent ceci pour vous permettre de créer les meilleurs produits pour vos clients.
            </p>

        </div>
        <div class="row app_feature_inner">
            <div class="col-md-3">
                <div class="app_feature_item_inner">
                    <div class="app_feature_item">
                        <div class="round_icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <a href="#"><h4>PAIEMENTS</h4></a>
                        <p>Payé désormais vos achats en ligne et depuis chez vous en 
                        seulement quelques clics et faites-vous livrés vos achats à un point 
                        relais proche de chez vous pour encore plus de faciliter au quotidien.
                         <a style="font-size: 12px;" href="#" class="badge badge-pill badge-primary"> Voir Plus...  </a>
                         </p>
                    </div>
                    <div class="app_feature_item">
                        <div class="round_icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <a href="#"><h4>FACTURATIONS</h4></a>
                        <p>Une facturation automatisée pour une comptabilité propre 
                        garantissant une progression claire de votre chiffre d’affaire. 
                        Nous vous accompagnons dans toutes les étapes de votre activité avec un seul but : 
                        <b> la croissance de votre business. </b><a style="font-size: 12px;" href="#" class="badge badge-pill badge-primary"> Voir Plus...  </a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="app_round_image">
                    <img class="round_c" src="assets/img/round-circle.png" alt="">
                    <!--<img class="app_mobile" src="assets/img/app-mobile.png" alt="">-->

                     <div id="app" style="margin-top: -100%;" class="app_screen_inner">
                                    <div id="photoShowWrap">
                                        <div id="photoShow">

                                            <img src="assets/img/screenshot/app-mobile_screen.jpg" alt="">

                                            <img src="assets/img/screenshot/screenshot-1.jpg"/>

                                            <img src="assets/img/screenshot/screenshot-2.jpg" alt="">

                                            <img src="assets/img/screenshot/screenshot-3.jpg" alt="">
                                        </div>
                                    </div>
                        </div>

                </div>
                <div class="app_feature_item app_middle">
                    <div class="round_icon">
                        <i class="fa fa-simplybuilt"></i>
                    </div>
                    <a href="#"><h4>TARIFS</h4></a>
                    <p>
                       Une commission simple et fixe sans aucun risque de variation donc sans surprise pour les utilisateurs. 
<a style="font-size: 12px;" href="#" class="badge badge-pill badge-primary"> Voir Plus...  </a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="app_feature_item_inner left_feature">
                    <div class="app_feature_item">
                        <div class="round_icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <a href="#"><h4>API/Développeurs</h4></a>
                        <p> Nous travaillons sans relâche pour vous proposer 
                        des solutions simples, flexibles et élégantes autour du paiement en ligne et mobile. 
                            <a style="font-size: 12px;" href="#" class="badge badge-pill badge-primary"> Voir Plus...  </a>
                        </p>
                    </div>
                    <div class="app_feature_item">
                        <div class="round_icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#"><h4>FONCTIONNALITES</h4></a>
                        <p>
                            Faites des virements, des paiements et des transferts simples ou groupés, sans erreurs, rapidement avec le sourire aux lèvres. 
                             <a style="font-size: 12px;" href="#" class="badge badge-pill badge-primary"> Voir Plus...  </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End App Feature Area =================-->



<section  class="section pb-0 bg-gradient-warning">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-md-6 order-lg-2 ml-lg-auto">
                <div class="position-relative pl-md-5">
                    <img src="assets/devop/img/ill/ill-2.svg" class="img-center img-fluid">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="d-flex px-3">
                    <div>
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="ni ni-building text-primary"></i>
                        </div>
                    </div>
                    <div class="pl-4">
                        <h4 class="display-3 text-white">PRIORITÉ AUX UTILISATEURS</h4>
                        <p class="text-white">
                           Une solution simple et facile à utiliser
                        </p>
                    </div>
                </div>
                <div class="card shadow shadow-lg--hover mt-5">
                    <div class="card-body">
                        <div class="d-flex px-3">
                            <div>
                                <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                    <i class="ni ni-image"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="title text-success">Transfère d'argent</h5>
                                <p>
                                    Utiliser le QRcode de vos proches pour leurs faire des transferts sécurités et rapide à travers tout le Bénin. 
                                </p>
                                <a style="font-size: 12px;" href="http://dashboard.gandokintche.com/payment" class="badge badge-pill badge-primary"> faire un transfère  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow shadow-lg--hover mt-5">
                    <div class="card-body">
                        <div class="d-flex px-3">
                            <div>
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                    <i class="ni ni-active-40"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="title text-warning">Générer des factures</h5>
                                <p>
                                    Disposé d’un outil de facturation au formats PDF lié à chaque transaction réalisée sur votre site d’e-commerce afin d’assurer la traçabilité de toutes vos interactions avec vos clients. 
                                </p>
                                <a style="font-size: 12px;" href="http://dashboard.gandokintche.com/invoice" class="badge badge-pill badge-warning">générer une facture</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>



<!--================Choose Us Area =================-->
<section style="display:none" class="choose_us_area">
    <div class="col-md-6">
        <div class="row left_choose_image">
            <ul>
                <li><img src="assets/img/mockup-img/m-image-1.png" alt=""></li>
                <li><img src="assets/img/mockup-img/m-image-2.png" alt="" data-parallax='{"x": 25, "y": -50}'></li>
                <li><img src="assets/img/mockup-img/m-image-3.png" alt="" data-parallax='{"x": 50, "y": -100}'></li>
                <li><img src="assets/img/mockup-img/m-image-4.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
                <li><img src="assets/img/mockup-img/m-image-5.png" alt="" data-parallax='{"x": 20, "y": -30}'></li>
                <li><img src="assets/img/mockup-img/m-image-6.png" alt="" data-parallax='{"x": 90, "y": -100}'></li>
                <li><img src="assets/img/mockup-img/m-image-7.png" alt=""></li>
                <li><img src="assets/img/mockup-img/m-image-8.png" alt="" data-parallax='{"x": 90, "y": -180}'></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="right_choose_image">
            <div class="left_title">
                <h2>Nos services </h2>
                <p>GandokinTche est un outils qui permet aux marchands ou des particluers
                    d'effectuer des transactions rapidement et surtout à moindre coût
                    sur des sites e-commerce, de transport comme wazemi
                    avec un seul compte chez nous.

                </p>

                <div class="call-to-action">
                    <button  style="width: 300px; height: 50px"   class="ouvrir btn submint_btn form-control">
                       Créez un compte maintenant
                    </button>
                </div>

            </div>
            <div class="row choose_item_inner">
                <div class="col-md-6 col-xs-6">
                    <div class="choose_item">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><i class="fa fa-taxi"></i></a>
                            </div>
                            <div class="media-body">
                                <h4>WAZEMI</h4>
                                <p>GandokinTche est utilisé sur wazemi, une platforme de covoiturage pour payez les conducteurs</p>
                                <a class="badge badge-pill badge-success" href="">Je visite</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="choose_item">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><i class="fa fa-shopping-basket"></i></a>
                            </div>
                            <div class="media-body">
                                <h4>E-commerce</h4>
                                <p>Faite vous payé et se faire payer sur notre site de vente en ligne</p>
                                <a class="badge badge-pill badge-success" href="">Je visite</a>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="col-md-6 col-xs-6">-->
<!--                    <div class="choose_item">-->
<!--                        <div class="media">-->
<!--                            <div class="media-left">-->
<!--                                <a href="#"><i class="icofont icofont-star"></i></a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <h4>Easy To Share</h4>-->
<!--                                <p>There are high ranke.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-xs-6">-->
<!--                    <div class="choose_item">-->
<!--                        <div class="media">-->
<!--                            <div class="media-left">-->
<!--                                <a href="#"><i class="icofont icofont-star"></i></a>-->
<!--                            </div>-->
<!--                            <div class="media-body">-->
<!--                                <h4>Best Apps</h4>-->
<!--                                <p>There are high ranke.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
<!--================End Choose Us Area =================-->

<!--================Satisfaction Area =================-->
<section class="satisfaction_area" id="about">
    <div class="container">
        <div class="main_title">
            <h2>INTEGRATION API</h2>
            <p>
               Nous sommes convaincus que les paiements en ligne constitueront le socle du commerce national et régionale en Afrique et nous travaillons alors à sa démocratisation à travers des solutions évolutives et flexibles. En éliminant les complexités inutiles et chronophages, nous vous permettons de vous lancer grâce GandokinTche en quelques minutes seulement avec une API codé avec les langages de base à savoir PHP, Java et Javascript.
            <a style="font-size: 12px;" href="#" class="badge badge-pill badge-warning">Voir Plus...</a>
            </p>
        </div>
        <div class="row satisfaction_item_inner">
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                    </div>
                    <a href="developpeur"><h4>Facile à mettre en place</h4></a>
                    <p>Nous travaillons sans relâche pour mettre au profit des utilisateurs,
                        un outils simple à intégrer</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <a href="support"><h4>24/7 Support</h4></a>
                    <p>Vous pouvez contacter notre service support pour une assistance ou pour avoir des informations particulière sur l'outil</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <a href="#"><h4> Documentation</h4></a>
                    <p>Vous pouvez aussi consulter la documentation de l'API </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Satisfaction Area =================-->

<!--================Video Area =================-->
<style type="text/css">
    .video_inner
    {
        background:  url('assets/img/ordi.png') no-repeat center center;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);
       height: 498px;
    }

</style>
<section style="margin-top:0" class="video_area">
    <div class="container">

        <div  class="user_slider_inner">
            <div class="user_slider owl-carousel">
                <div class="item">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#"><h4>Mr. Verbeck DEGBESSE</h4></a>
                    <h5>CEO, Hazrat Group</h5>
                    <img class="img-circle" src="assets/img/user/user-1.png" alt="">
                </div>
                <div class="item">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#"><h4>Mr. Jonathon Smith</h4></a>
                    <h5>CEO, Hazrat Group</h5>
                    <img class="img-circle" src="assets/img/user/user-1.png" alt="">
                </div>
                <div class="item">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#"><h4>Mr. Jonathon Smith</h4></a>
                    <h5>CEO, Hazrat Group</h5>
                    <img class="img-circle" src="assets/img/user/user-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Video Area =================-->

<!--================MacBook Mockup Area =================-->
<section style="display: none" class="install_app_area">
    <div class="col-md-6">
        <div class="row">
            <div class="install_left_content">
                <div class="left_title">
                    <h2>NOW INSTALL AVAILABLE ON</h2>
                </div>
                <div class="install_content">
                    <h5>Create Your Apps Galary</h5>
                    <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                    <a class="gradient_bg_btn" href="#"><i class="fa fa-android" aria-hidden="true"></i>Android </a>
                    <a class="gradient_bor_btn" href="#"><i class="fa fa-apple" aria-hidden="true"></i>App Store</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="install_mockup_img">
                <img src="assets/img/macbook-res.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End MacBook Mockup Area =================-->

<!--================App Screen Area =================-->
<section style="display: none" class="app_screen_area" id="screenshot">
    <div class="container">
        <div class="main_title">
            <h2>NOS APPLICATION MOBILE</h2>
            <p>Nous avons mis à votre disposition des platformes mobiles permettant de simplifier vos transactions</p>
        </div>
        <div class="app_screen_inner">
            <div class="app_screen_slider owl-carousel">
                <div class="item"><img src="assets/img/screenshot/screenshot-1.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-2.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-3.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-1.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-2.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-3.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-1.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-2.jpg" alt=""></div>
                <div class="item"><img src="assets/img/screenshot/screenshot-3.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!--================End App Screen Area =================-->

<!--================Pricing Table Area =================-->
<!--<section  class="price_table_area" id="price">-->
<!--    <div class="container">-->
<!--        <div class="main_title">-->
<!--            <h2>NOS OFFRES</h2>-->
<!--            <p style="font-weight: 300;color: #6772e5;display: block;font-size: 30px">Prêt(e) à vous lancer ?</p>-->
<!--        </div>-->
<!--        <div class="price_table_inner">-->
<!--            <div class="price_item">-->
<!--                <div class="price_header">-->
<!--                    <h3>COMPTE PERSONNEL</h3>-->
<!--<!--                    <h2>$00</h2>-->
<!--<!--                    <h6>/month</h6>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href="#">Compte lié à vos transactions personnel</a></li>-->
<!--                    <li><a href="#">Faire des virements sur d'autres comptes</a></li>-->
<!--                    <li><a href="#">Achats en ligne</a></li>-->
<!--                    <li><a href="#">Recevoir de l'argent</a></li>-->
<!--                    <li><a href="#">Administrer par une personne</a></li>-->
<!--                </ul>-->
<!--                <a class="price_btn" href="#">OUVRIR UN COMPTE</a>-->
<!--            </div>-->
<!--            <div class="price_item">-->
<!--                <div class="price_header">-->
<!--                    <h3>COMPTE MARCHAND</h3>-->
<!--<!--                    <h2>$50</h2>-->
<!--<!--                    <h6>/month</h6>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href="#">Compte lié à votre activité</a></li>-->
<!--                    <li><a href="#">Faire des virements sur d'autres comptes</a></li>-->
<!--                    <li><a href="#">Achats en ligne et Accepte des paiements</a></li>-->
<!--                    <li><a href="#">Transfère de fond à plusieurs personnes</a></li>-->
<!--                    <li><a href="#">Administrer par une personne</a></li>-->
<!--                </ul>-->
<!--                <a class="price_btn" href="#">OUVRIR UN COMPTE</a>-->
<!--            </div>-->
<!--            <div class="price_item">-->
<!--                <div class="price_header">-->
<!--                    <h3>COMPTE PRO</h3>-->
<!--<!--                    <h2>$90</h2>-->
<!--<!--                    <h6>/month</h6>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li><a href="#">Compte lié à plusieur personne</a></li>-->
<!--                    <li><a href="#">Faire des virements sur d'autres comptes</a></li>-->
<!--                    <li><a href="#">Achats en ligne et Accepte des paiements</a></li>-->
<!--                    <li><a href="#">Transfère de fond à plusieurs personnes</a></li>-->
<!--                    <li><a href="#">Administrer par plusieur personne</a></li>-->
<!--                </ul>-->
<!--                <a class="price_btn" href="#">OUVRIR UN COMPTE</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--================End Pricing Table Area =================-->

<!--================Team Members Area =================-->
<section style="display: none" class="team_members_area">
    <div class="container">
        <div class="main_title">
            <h2>TEAM MEMBER</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
        </div>
        <div class="team_slider owl-carousel">
            <div class="item">
                <div class="team_slider_item">
                    <img src="assets/img/team-slider/team-1.jpg" alt="">
                    <div class="team_hover">
                        <div class="team_hover_inner">
                            <div class="team_hover_inner">
                                <div class="team_inner_text">
                                    <h4>ROBERTO PE</h4>
                                    <h5>Developer</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team_slider_item">
                    <img src="assets/img/team-slider/team-2.jpg" alt="">
                    <div class="team_hover">
                        <div class="team_hover_inner">
                            <div class="team_hover_inner">
                                <div class="team_inner_text">
                                    <h4>ROBERTO PE</h4>
                                    <h5>Developer</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team_slider_item">
                    <img src="assets/img/team-slider/team-3.jpg" alt="">
                    <div class="team_hover">
                        <div class="team_hover_inner">
                            <div class="team_hover_inner">
                                <div class="team_inner_text">
                                    <h4>ROBERTO PE</h4>
                                    <h5>Developer</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team_slider_item">
                    <img src="assets/img/team-slider/team-4.jpg" alt="">
                    <div class="team_hover">
                        <div class="team_hover_inner">
                            <div class="team_hover_inner">
                                <div class="team_inner_text">
                                    <h4>ROBERTO PE</h4>
                                    <h5>Developer</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Team Members Area =================-->

<!--================Question Area =================-->
<section style="display: none" class="question_area">
    <div class="container">
        <div class="main_title">
            <h2>FREE QUENTLY ASKED QUESTION</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left_question_inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. Is it a long established fact that a reader will be distracted ?
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Is it a long established fact that a reader will be distracted ?
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Established fact that a reader will be distracted ?
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        4. Is it a long established fact that a reader ?
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, lege in Virginia,
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right_question_img">
                    <img src="assets/img/question-tab.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Question Area =================-->

<!--================Latest Blog Area =================-->
<section style="display: none"   class="latest_blog_area" id="blog">
    <div class="container">
        <div class="main_title">
            <h2>NOS DISTRIBUTEURS</h2>
            <p> Les distributeurs sont des partenaires
                présent sur le terrain et qui agissent auprès des utilisateurs pour le compte de GandokinTche et pour le bon
                fonctionnement du service</p>
        </div>
        <div class="row latest_blog_inner">
            <div class="col-md-6">
                <div class="l_blog_big_item">
                    <div class="l_blog_img">
                        <div class="l_blog_slider owl-carousel">
                            <div class="item">
                                <img src="assets/img/home-slider/16.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/img/home-slider/9.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="l_blog_text">
                        <div class="l_blog_text_inner">
                            <div class="blog_date">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>12 July 2016</a>
                                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i>235</a>
                                <a href="#">25 Comment</a>
                            </div>
                            <a href="#"><h4>Ontouch App news from blog</h4></a>
                            <p>Lorem ipsum dolor sit amet, to consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna to liqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right_l_blog">
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/img/blog/l-blog/l-blog-2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>On Graphics Design Post</h4></a>
                            <a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
                            <p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/img/blog/l-blog/l-blog-3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>On Graphics Design Post</h4></a>
                            <a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
                            <p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/img/blog/l-blog/l-blog-4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>On Graphics Design Post</h4></a>
                            <a href="#"><h5><i class="fa fa-calendar" aria-hidden="true"></i>16 JUNE 2016</h5></a>
                            <p>It is a long established fact that a reader will be dis-tracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Latest Blog Area =================-->



<?php

require 'pages/includes/htmlfooter.php';

?>

<script type="text/javascript">
    $(".ouvrir").click(function () {
        window.location.href="http://dashboard.gandokintche.com/register";
    });


    $(document).ready(function() {
        setInterval(rotateImages, 4000);
    });

    function rotateImages(){
        $("#photoShow").animate({marginLeft: "-510px"}, 1000).delay(4000); //-510px

        $("#photoShow").animate({marginLeft: "-260px"}, 1000).delay(4000); //-260px

        $("#photoShow").animate({marginLeft: "0px"}, 1000).delay(4000);
    }


    var swiper = new Swiper('.swiper-container', {
        loop:true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
    });


    if(screen.width <=500){
        $('#app').removeStyle("margin-top","-100%");
          $('#app').css('margin-bottom','30px');
    }else {
        $('#app').css("margin-top","-100%");
    }
    if(screen.width == 768){
        $('#app').css("margin-top","-48%");
    }





</script>
