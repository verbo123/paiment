<?php
require 'localization.php';
$title=ma_tra("Tarifs");
require 'pages/includes/htmlheader.php';
?>


<div id="header_tarif" class="major special" >
    <div class="ve_center">
        <!-- <h1 style="font-size: 50px;font-family: 'Pacifico';"><span style="color:#e0c3fc;">Pai</span><span style="color: #8ec5fc">Me</span></h1> -->
        <h2 style="font-size: 25px"><?php echo ma_tra("Découvrez tous nos tarifs :")?> <br> <?php echo ma_tra("clairs, flexibles et sans suprises.")?></h2>
        <div class="call-to-action">
            <button style="width: 300px; height: 50px" type="submit" value="submit your quote" class="btn submint_btn form-control"><?php echo ma_tra("Ouvrir un compte gratuitement")?></button>
        </div>


    </div>


</div>
<section   class="latest_blog_area" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Acheteurs")?></h2>
                    <?php echo ma_tra("Utilisez GandokinTché gratuitement pour payer vos achats. Des frais peuvent s'appliquer en cas de")?>
                    <b><?php echo ma_tra("conversion de devise.")?></b>
                </div>
            </div>

            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Vendeurs")?></h2>
                    <?php echo ma_tra("Nos frais de vente sont simples et transparents. Vous payez uniquement pour les paiements que vous recevez, il n'y a pas de frais mensuels. Et plus vous vendez, plus la commission diminue.")?>
                    <a href=""><?php echo ma_tra("Contactez nous pour plus d'information.")?></a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="main_title">
                    <h2><?php echo ma_tra("Envoyer de l'argent")?></h2>
                    <?php echo ma_tra("Depuis votre compte GandokinTché, envoyez sans frais de l'argent en FCFA à vos proches au Bénin. Pour les transactions effectuées dans un autre devise, des frais de conversion peuvent s'appliquer.")?>
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

<section  class="install_app_area">

    <div class="col-md-6">
        <div class="row">

            <div class="install_left_content" style="padding: 0; box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);">
                <div class="price_table_inner">

                    <div style="width: 500px" class="price_item">
                        <div class="price_header">
                            <h3><?php echo ma_tra("Frais de Commission")?></h3>
                            <h2>10%</h2>
                            <h6><?php echo ma_tra("/dépôt de cash sur son compte")?> </h6>
                        </div>
                        <ul>
                        <li style="padding:10px"><a href="#">
                                <?php echo ma_tra("Une commission unique de 10% qui ne s’applique qu’au dépôt de cash sur son compte et qui facilite le quotidien de tous en donnant accès aux services sécurisés à distance comme réservé un trajet en ligne ou encore effectuer des achats en ligne.")?></a></li>
                        </ul>
                        <a class="price_btn" href="http://dashboard.gandokintche.com/register"><?php echo ma_tra("Créez un compte")?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="install_mockup_img">
                <img style="width: 1024px; height: 536px" src="assets/img/home_laptop.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php
require 'pages/includes/htmlfooter.php';
?>
