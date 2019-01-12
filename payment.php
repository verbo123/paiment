<?php
require 'localization.php';
$title=ma_tra("Paiement en ligne");
require 'pages/includes/htmlheader.php';
?>
<link type="text/css" href="assets/devop/css/argon.css?v=1.0.1" rel="stylesheet">
<link href="assets/devop/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/devop/vendor/nucleo/css/nucleo.css" rel="stylesheet">

<style>


/**/
        /*.letxt{*/
            /*!*float: right;*!*/
            /*margin-left: 60px;*/
        /*}*/

        /*#phon{*/
            /*max-width: 60%;*/
            /*!*float: left;*!*/
            /*margin-left: 190px;*/
        /*}*/

        /*@media (min-width: 1440px){*/
            /*#phon{*/
                /*max-width: 56%;*/
                /*!*float: left;*!*/
                /*margin-left: 190px;*/
            /*}*/
        /*}*/

    /*@media (width: 1024px){*/
        /*#phon{*/
            /*max-width: 80%;*/
            /*margin-left: 80px;*/
            /*!*float: left;*!*/
        /*}*/


        /*.letxt{*/
            /*!*float: right;*!*/
            /*margin-left: 60px;*/
        /*}*/

    /*}*/

    /*@media (max-width: 1000px)*/
    /*{*/
        /*#phon{*/
            /*max-width: 109%;*/
            /*!*margin-left: 80px;*!*/
        /*}*/

        /*.letxt{*/
           /*text-align: center;*/
        /*}*/
    /*}*/

    /*@media (max-width: 800px)*/
    /*{*/
        /*#phon{*/
            /*display: none;*/
        /*}*/
        /*#ligne{*/
            /*width: auto;*/
        /*}*/
    /*}*/

    /*@media (max-width: 400px)*/
    /*{*/
        /*#header_pay{*/
            /*height: auto;*/
        /*}*/
    /*}*/


    /*#ligne{*/
        /*padding-top: 100px;*/
        /*width: 100%;*/
    /*}*/

    .call-to-action{
        margin-bottom: 5%;
        margin-top: 2%;

    }

    .bg-gradient-warning2{
        position: absolute;
        background: #0e1c3f radial-gradient(circle farthest-side at center bottom, #0e1c3f, #003087 125%);
        width: 100%;
        padding: 90px;
    }

.bg-gradient-warning3{
    position: absolute;
    color: white;
    width: 100%;
    padding: 90px;
    background: #f9a618 radial-gradient(circle farthest-side at center bottom, #d5be0c, #faa618 125%);
    /*background: linear-gradient(87deg, #0e1c3f 0, #0d1c3f 100%) !important;*/
}
@media (width: 1024px)
{
    .bg-gradient-warning3{
        margin-top: 38%;
    }

    .bg-gradient-warning2{
        margin-top: 48%;
    }
}
    @media (min-width: 1025px) {
        .bg-gradient-warning2{
            margin-top: 48%;
        }

        .bg-gradient-warning3{
            margin-top: 28%;
        }

    }

@media (width: 1440px) {
    .bg-gradient-warning2{
        margin-top: 48%;
    }

    .bg-gradient-warning3{
        margin-top: 46%;
    }
}

@media (max-width: 800px){
    .bg-gradient-warning2{
       padding: 15px;
    }


    .bg-gradient-warning3{
        padding: 15px;
    }

    #cont{
        font-size: 15px;
    }
    .cah{
        font-size: 15px;
    }

}

@media (min-width: 800px)
{
    .choose_us_area{
        margin-top: 250px
    }
    #cont{
        font-size: 30px;
    }

}

@media (max-width: 1000px)
{
    #co{
        display: none;
    }
}

    #cont{
        text-align: center;
        color: #fff;
        line-height: 1.5em;
        font-family: cursive;
    }
.cah{
    text-align: center;
}
.choose_us_area:before{
    background: none;
}

    #im{
        max-width: 500px;
    }

    .footer_area{
        margin-top: unset;
    }
</style>

<div id="header_pay" class=" major special" >

            <div class="letxt ve_center">
                <h2 style="font-size: 25px"><?php echo ma_tra("Effectuez vos paiements en ligne ")?> <?php echo ma_tra("en quelques clics.")?></h2>
                <p style="color: white; font-family: sans-serif;letter-spacing: 0.1em">
                    <?php echo ma_tra("Payez de manière sécurisée sur des millions de sites e-commerce.")?><br>
                    <?php echo ma_tra("Grâce à votre compte GandokinTché, vous n'avez pas besoin de ")?><br>
                    <?php echo ma_tra("voir le marchand avant de lui faire un transfert,son code")?><br>
                    <?php echo ma_tra("d'opération ou son QRcode suffisent.");?>
                </p>
                <div class="call-to-action">
                    <button style="width: 300px; height: 50px" type="submit" class=" ouvrir btn submint_btn form-control">
                        <?php echo ma_tra("Créer un compte")?>
                    </button>
                </div>

            </div>


</div>

<section class="app_feature_area " id="feature">
    <div class="container">
        <div class="main_title">
            <div class="tit">
                <span style="color: #0d1c3f;font-size:25px;font-weight: 600;"><?php echo ma_tra("Le shopping est mieux chez soi") ?></span>
            </div>
            <p style="margin-top: 20px">
                <?php echo ma_tra("Payez des biens et services dans des boutiques en ligne sans communiquer vos informations financière au vendeur.C'est simple, très rapide et plus sécurisé.")?>
            </p>
        </div>
    </div>

</section>


<section style="padding-top: 0;padding-bottom: 0"  class="install_app_area">

    <div class="col-md-6">
        <div class="row">
            <div class="install_mockup_img">
                <img src="assets/img/2.png" alt="">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="install_left_content">
                <div class="install_content">
                    <h5> <?php echo ma_tra("Vos achats partout au Bénin et dans le monde entier")?>.</h5>
                    <p>
                        <?php echo ma_tra("Inutile de prendre de prendre un taxi ou un billet d'avion pour faire votre shopping dans le monde entier. Faites votre shopping dans des boutiques en ligne en quelques clics seulement avec votre compte GnadokinTché.")?>
                    </p>
                    <button style="width: 300px; height: 50px" type="submit" class=" ouvrir btn submint_btn form-control">
                        <?php echo ma_tra("Créer un compte maintenant")?>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-gradient-warning2">
        <div id="cont" class="container">
               <span>
                   "<?php echo ma_tra("Je ne m'inquiète plus quand j'achète sur des boutiques en ligne et en plus, je n'ai pas besoin d'être présent physiquement")?>".
               </span>
        </div>
    </div>
</section>


<section style="background: none;" class="choose_us_area">
        <div style="float: right" id="co" class="col-md-6">
                <img id="im" src="assets/img/screenshot_1.png" alt="">
        </div>

    <div class="col-md-6">
        <div class="right_choose_image">
            <div style="margin-left: 30px" class="left_title">
                <div class="tit">
                    <span style="color: #0d1c3f;font-size:25px;font-weight: 600;"><?php echo ma_tra("Nous sauvegardons une trace de vos achats") ?></span>
                </div>
                <p>
                    <?php echo ma_tra("Faites votre shopping en ligne l'esprit tranquille, nous pouvons protéger et sauvegarder vos achats. Si vous rencontrez des difficultés lors d'une commande, nous ferons notre possible pour vous aider")?>.
                </p>
                <a style="font-size: 16px;text-transform: inherit;" class="badge badge-pill badge-warning" href="https://dashboard.gandokintche.com/shop"><?php echo ma_tra("Consultez l'historique de mes achats")?></a>
            </div>
        </div>
    </div>
    <div class="bg-gradient-warning3">

        <div class="cah container">
            <h1 id="frais"><?php echo ma_tra("Pas de frais cachés.")?></h1>

               <span>
                   <?php echo ma_tra("En payant sur des boutiques en ligne,  vous ne payez pas de frais supplémentaires. Il n'y a ni frais cachés, ni frais de traitement. Profitez de votre shopping, et c'est tout. ")?>.
               </span>
        </div>
    </div>
</section>




<?php
require 'pages/includes/htmlfooter.php';
?>

<script type="text/javascript">
    $('.ouvrir').click(function () {
       window.location.href="https://dashboard.gandokintche.com/register";
    });
</script>
