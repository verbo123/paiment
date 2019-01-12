<?php
require 'localization.php';
$title=ma_tra("Tarifs");
require 'pages/includes/htmlheader.php';
?>

<link type="text/css" href="assets/devop/css/argon.css?v=1.0.1" rel="stylesheet">
<link href="assets/devop/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/devop/vendor/nucleo/css/nucleo.css" rel="stylesheet">

<style>
    @media (min-width: 1000px)
    {
        #qr{
            max-width: 400px;
        }
        .lgdata{
            display: block;
        }

        .smdata{
            display: none;
        }


    }

    @media (max-width: 1000px)
    {

        .lgdata{
            display: none;
        }

        .smdata{
            display: block;
        }


    }

</style>

<div id="header_tarif" class="major special" >
    <div class="ve_center">
        <!-- <h1 style="font-size: 50px;font-family: 'Pacifico';"><span style="color:#e0c3fc;">Pai</span><span style="color: #8ec5fc">Me</span></h1> -->
        <h2 style="font-size: 25px"><?php echo ma_tra("Découvrez tous nos tarifs :")?> <br> <?php echo ma_tra("clairs, flexibles et sans suprises.")?></h2>
        <div class="call-to-action">
            <button style="width: 300px; height: 50px" type="submit" value="submit your quote" class="ouvrir btn submint_btn form-control"><?php echo ma_tra("Ouvrir un compte gratuitement")?></button>
        </div>


    </div>


</div>
<section style="padding-bottom: 0"   class="latest_blog_area" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="main_title">

                    <h2><?php echo ma_tra("Acheteurs")?></h2>
                    <?php echo ma_tra("Utilisez GandokinTché gratuitement pour payer vos achats en ligne. Des frais peuvent s'appliquer en cas de")?>
                    <b><?php echo ma_tra("conversion de devise.")?></b>
                </div>
            </div>

            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Vendeurs")?></h2>
                    <?php echo ma_tra("Nos frais de vente sont simples et transparents. Vous ne payez pour les paiements que vous recevez, il n'y a pas de frais mensuels.")?>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Envoyer de l'argent")?></h2>
                    <?php echo ma_tra("Depuis votre compte GandokinTché, envoyez sans frais, de l'argent en FCFA à vos proches au Bénin.")?>
                </div>

            </div>

            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Ouvrir ou Fermer un compte") ?></h2>
                    <?php echo ma_tra("L'ouverture et la fermeture d'un compte chez GandokinTché, ainsi que l'intégration de notre solution de paiement, sont entièrement gratuites.")?>
                </div>

            </div>
        </div>

    </div>
</section>

<section style="height: auto;padding-bottom: 0" id="woo">
    <div style="padding: 0 15px 0 15px;width: 100%" class="lgdata row">
        <div style="margin-top: 7%" class="col-md-6">
            <div style="" class="left_title">
                <div class="tit">
                    <span style="color: #fff;font-size:25px;font-weight: 600;"> <?php echo ma_tra("Grille tarifaire sur recharge de compte") ?></span>
                </div>
                <p style="color: #fff">
                    <?php echo ma_tra("Une commission unique suivant un grille qui ne s’applique qu’au dépôt de cash sur son compte et qui facilite le quotidien de tous en donnant accès aux services sécurisés à distance comme réservé un trajet en ligne ou encore effectuer des achats en ligne.")?>
                </p>
                <a style="font-size: 16px;text-transform: inherit;" class="badge badge-pill badge-white" href="grille" target="_blank"><?php echo ma_tra("Télécharger la grille")?></a>
            </div>
        </div>

        <div  class="col-md-6">
            <img id="qr" src="assets/img/rec.png" alt="">
        </div>
    </div>

    <div style="padding: 15px"  class="smdata left_title">
        <div class="tit">
            <span style="color: #fff;font-size:25px;font-weight: 600;"> <?php echo ma_tra("Grille tarifaire sur recharge de compte") ?></span>
        </div>
        <p style="color: #fff">
            <?php echo ma_tra("Une commission unique suivant un grille qui ne s’applique qu’au dépôt de cash sur son compte et qui facilite le quotidien de tous en donnant accès aux services sécurisés à distance comme réservé un trajet en ligne ou encore effectuer des achats en ligne.")?>
        </p>
        <a style="font-size: 16px;text-transform: inherit;" class="badge badge-pill badge-white" href="grille" target="_blank"><?php echo ma_tra("Télécharger la grille")?></a>
    </div>
</section>

<section class="app_feature_area " id="feature">
    <div class="container">
        <div class="main_title">
            <div class="tit">
                <span style="color: #0d1c3f;font-size:25px;font-weight: 600;"><?php echo ma_tra("Rechargez votre compte maintenant chez un distributeur !") ?></span>
            </div>
            <a style="font-size: 16px;margin-top:20px;text-transform: inherit;" class="badge badge-pill badge-warning" href="https://www.dashboard.gandokintche.com/balance"><?php echo ma_tra("Consultez votre solde")?></a>

        </div>
    </div>

</section>

<!---->
<!--<section  class="install_app_area">-->
<!---->
<!--    <div class="row container lgdata">-->
<!--        <div class="col-md-6">-->
<!--            <div class="tit">-->
<!--                <span style="color: #0d1c3f;font-size:25px;font-weight: 600;">-->
<!--                    --><?php //echo ma_tra("Grille Tarifaire sur recharge de compte") ?>
<!--                </span>-->
<!--            </div>-->
<!--                <p>-->
<!--                    --><?php //echo ma_tra("Une commission unique suivant un grille qui ne s’applique qu’au dépôt de cash sur son compte et qui facilite le quotidien de tous en donnant accès aux services sécurisés à distance comme réservé un trajet en ligne ou encore effectuer des achats en ligne.")?>
<!--                </p>-->
<!---->
<!--            <ul>-->
<!--                <li>-->
<!--                    <span>-->
<!--                        <i class="fa fa-arrow-right"></i>-->
<!--                    </span>-->
<!--                    <a href="#">-->
<!--                        --><?php
//                        echo ma_tra("De 500 à 250 000 FCFA ")
//                        ?>
<!--                    </a>-->
<!--                    --->
<!--                    --><?php
//                    echo ma_tra("Prélèvement de 100 FCFA")
//                    ?>
<!--                </li>-->
<!--                <li>-->
<!--                     <span>-->
<!--                        <i class="fa fa-arrow-right"></i>-->
<!--                    </span>-->
<!--                    <a href="#">-->
<!--                        --><?php
//                        echo ma_tra("De 250 001 à 500 000 FCFA ")
//                        ?>
<!--                    </a>-->
<!--                    --->
<!--                    --><?php
//                    echo ma_tra("Prélèvement de 200 FCFA")
//                    ?>
<!--                </li>-->
<!--                <li>-->
<!--                     <span>-->
<!--                        <i class="fa fa-arrow-right"></i>-->
<!--                    </span>-->
<!--                    <a href="#">-->
<!--                        --><?php
//                        echo ma_tra("De 500 001 à 750 000 FCFA ")
//                        ?>
<!--                    </a>-->
<!--                    --->
<!--                    --><?php
//                    echo ma_tra("Prélèvement de 300 FCFA")
//                    ?>
<!--                </li>-->
<!--                <li>-->
<!--                     <span>-->
<!--                        <i class="fa fa-arrow-right"></i>-->
<!--                    </span>-->
<!--                    <a href="#">-->
<!--                        --><?php
//                        echo ma_tra("De 750 001 à 1 000 000 FCFA ")
//                        ?>
<!--                    </a>-->
<!--                    --->
<!--                    --><?php
//                    echo ma_tra("Prélèvement de 400 FCFA")
//                    ?>
<!--                </li>-->
<!--                <li>-->
<!--                     <span>-->
<!--                        <i class="fa fa-arrow-right"></i>-->
<!--                    </span>-->
<!--                    <a href="#">-->
<!--                        --><?php
//                        echo ma_tra("+ 1 000 000 FCFA ")
//                        ?>
<!--                    </a>-->
<!--                    --->
<!--                    --><?php
//                    echo ma_tra("Prélèvement de 500 FCFA")
//                    ?>
<!--                </li>-->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!--            <div class="row">-->
<!--                <div class="install_mockup_img">-->
<!--                    <img style="width: 1024px; height: 536px" src="assets/img/home_laptop.png" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!---->
<!--    <div class="smdata install_left_content" style="padding: 0; box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);">-->
<!--        <div class="price_table_inner">-->
<!---->
<!--            <div style="width: 500px" class="price_item">-->
<!--                <div class="price_header">-->
<!--                    <h3>--><?php //echo ma_tra("Frais de Commission")?><!--</h3>-->
<!--                    <h2>10%</h2>-->
<!--                    <h6>--><?php //echo ma_tra("/dépôt de cash sur son compte")?><!-- </h6>-->
<!--                </div>-->
<!--                <ul>-->
<!--                    <li style="padding:10px"><a href="#">-->
<!--                            --><?php //echo ma_tra("Une commission unique de 10% qui ne s’applique qu’au dépôt de cash sur son compte et qui facilite le quotidien de tous en donnant accès aux services sécurisés à distance comme réservé un trajet en ligne ou encore effectuer des achats en ligne.")?><!--</a></li>-->
<!--                </ul>-->
<!--                <a class="price_btn" href="http://dashboard.gandokintche.com/register">--><?php //echo ma_tra("Créez un compte")?><!--</a>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php
require 'pages/includes/htmlfooter.php';
?>
<script type="text/javascript">
    $('.ouvrir').click(function () {
        window.location.href="https://dashboard.gandokintche.com/register";
    });
</script>