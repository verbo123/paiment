<?php
require 'localization.php';
$title=ma_tra("Envoyez de l'argent");
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

@media (min-width: 1000px)
{
    #qr{
        max-width: 600px;
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
    #qr{
        display: none;
    }

    .lgdata{
        display: none;
    }

    .smdata{
        display: block;
    }
}

@media (max-width: 800px)
{
    .choose_us_area {
        margin-top: 0;
    }
}

@media (min-width: 800px)
{
    .choose_us_area {
        margin-top: 0;
    }
}
</style>

<div id="header_vir" class=" major special" >

            <div class="letxt ve_center">
                <h2 style="font-size: 25px"><?php echo ma_tra("Effectuez vos transferts d'argent ")?> <br> <?php echo ma_tra("en clin d'œil.")?></h2>
                <div class="call-to-action">
                    <button style="width: 300px; height: 50px" type="submit" class=" ouvrir btn submint_btn form-control">
                        <?php echo ma_tra("Ouvrir un compte gratuitement")?>
                    </button>
                </div>

            </div>


</div>

<section class="app_feature_area " id="feature">
    <div class="container">
        <div class="main_title">
            <div class="tit">
                <span style="color: #0d1c3f;font-size:25px;font-weight: 600;"><?php echo ma_tra("Facile et Rapide") ?></span>
            </div>
            <p style="margin-top: 20px">
                <?php echo ma_tra("Des milliers de personnes ont choisi GandokinTché pour une bonne raison : Sa simplicité, sa flexibilité. Transférer de l'argent avec GandokinTché plus rapidement qu'en sortant votre portefeuille.")?>
            </p>
        </div>
    </div>

</section>

<section id="woo">
    <div style="width: 100%;" class="lgdata row">
        <div  class="col-md-6">
            <img id="qr" src="assets/img/qrcodes.png" alt="">
        </div>

        <div style="margin-top: 10%" class="col-md-6">
            <div style="margin-left: 50px" class="left_title">
                <div class="tit">
                    <span style="color: #fff;font-size:25px;font-weight: 600;"><?php echo ma_tra("Faite un virement d'argent en toute sécurité") ?></span>
                </div>
                <p style="color: #fff">
                    <?php echo ma_tra("Pas besoin de communiquer votre identifiant à votre destinataire, envoyez-lui juste l'image de votre QRcode et le tout est joué. ")?>
                </p>
                <a style="font-size: 16px;text-transform: inherit;" class="badge badge-pill badge-white" href="https://dashboard.gandokintche.com/virement"><?php echo ma_tra("Envoyez de l'argent")?></a>
            </div>
        </div>
    </div>

    <div  class="smdata left_title">
        <div class="tit">
            <span style="color: #fff;font-size:25px;font-weight: 600;"><?php echo ma_tra("Faite un virement d'argent en toute sécurité") ?></span>
        </div>
        <p style="color: #fff">
            <?php echo ma_tra("Pas besoin de communiquer votre identifiant à votre destinataire, envoyez-lui juste l'image de votre QRcode et le tout est joué. ")?>
        </p>
        <a style="font-size: 16px;text-transform: inherit;" class="badge badge-pill badge-white" href="https://dashboard.gandokintche.com/virement"><?php echo ma_tra("Envoyez de l'argent")?></a>
    </div>
</section>

<!--<section style="" class="app_screen_area" id="screenshot">-->
<!--    <div class="container">-->
<!--        <div class="app_screen_inner">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section style="background: none;" class="choose_us_area">
        <div style="float: right" id="co" class="col-md-6">
                <img id="im" src="assets/img/lis.png" alt="">
        </div>

    <div class="col-md-6">
        <div class="right_choose_image">
            <div style="margin-left: 30px" class="left_title">
                <div class="tit">
                    <span style="color: #0d1c3f;font-size:25px;font-weight: 600;"><?php echo ma_tra("Nous sauvegardons une trace de vos transferts") ?></span>
                </div>
                <p>
                    <?php echo ma_tra("Envoyez de l'argent l'esprit tranquille, nous pouvons protégeons et sauvegardons vos transferts. Si vous rencontrez des difficultés lors d'un transfert, nous ferons notre possible pour vous aider")?>.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-warning3">

        <div class="cah container">
            <h1 id="frais"><?php echo ma_tra("Pas de frais cachés.")?></h1>

               <span>
                   <?php echo ma_tra("En envoyant de l'argent, vous ne payez pas de frais supplémentaires. Il n'y a ni frais cachés, ni frais de traitement. Profitez juste du service de transfert, et c'est tout. ")?>
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
