<?php
require 'localization.php';
$title=ma_tra("Support");
require 'pages/includes/htmlheader.php';
?>


<div id="header_support" class="major special" >
    <div class="ve_center">
        <!-- <h1 style="font-size: 50px;font-family: 'Pacifico';"><span style="color:#e0c3fc;">Gandokin</span><span style="color: #8ec5fc">Tche  </span> </span></h1> -->
        <h2 style="font-size: 25px">FAQ & Supports</h2>
<!--        <div class="subscrib_area">-->
<!--            <div class="container">-->
<!--                <div class="subscrib_inner" style="border-bottom: none;">-->
<!---->
<!--                    <div class="input-group">-->
<!--                        <input style="padding: 10px;color: #fff;" type="email" class="form-control" placeholder="--><?php //echo ma_tra("Poser votre question")?><!--">-->
<!--                        <span class="input-group-btn">-->
<!--                                <button class="btn btn-default" type="button">--><?php //echo ma_tra("Recherche")?><!--</button>-->
<!--                            </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>



<section  class="question_area">
    <div class="container">
        <div class="main_title">
            <h2><?php echo ma_tra("FOIRES AUX QUESTIONS")?></h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left_question_inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <?php echo ma_tra("J'ai oublié mon mot de passe. Comment le récupérer ?")?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php echo ma_tra("Pour récupérer votre mot de passe, allez sur l'interface de connexion, puis cliquez sur")?> <b><?php echo ma_tra("Mot de passe oublié ?")?></b>
                                    <?php echo ma_tra("Entrer ensuite votre email de connexion puis valider...Vous recevrez automatiquement après quelque seconde, un message")?>
                                    <?php echo ma_tra("dans votre boîte email. Cliquer sur le lien dans le message envoyé...Si tout s'est bien passé, vous aurez une interface demandant")?>
                                    <?php echo ma_tra("votre nouveau mot de passe puis confirmation.")?>


                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <?php echo ma_tra("Quels sont les frais pour le compte GandokinTché ?")?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <?php echo ma_tra("Il n'y aucun frais lorsque vous effectué des opératons avec Gandokintché (achat en ligne, virement)...")?>
                                    <?php echo ma_tra("Un prélèvement unique (selon la tranche d'argent déposé) est effectué lors du recharge de votre compte")?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <?php echo ma_tra("Comment annuler un paiement ?")?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    <?php echo ma_tra("Vous ne pouvez pas annuler un paiement...Néamoins, vous pouvez nous contactez lorsque vous êtes confronté à cette situation.")?>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="five">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
                                        <?php echo ma_tra("Quels sont les avantages de votre services ?")?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="five">
                                <div class="panel-body">
                                    <?php echo ma_tra("Avec GandokinTché, vous pouvez non seulement acheté dans des boutiques en ligne, mais aussi dans boutiques physique. En plus, le transfert d'argent est simple, rapide et sûr. Vous pouvez nous contacter pour avoir d'ample informations.")?>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="sixe">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixe" aria-expanded="false" aria-controls="collapsefour">
                                        <?php echo ma_tra("Quels sont vos cibles ?")?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsesixe" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sixe">
                                <div class="panel-body">
                                    <?php echo ma_tra("Que vous soyez un particulier, un commerçant, vous pouvez utiliser nos services dans vos différentes activités.")?>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right_question_img" id="qui">
                    <img src="assets/img/quiz.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="satisfaction_area" id="about">
    <div class="container">
        <div class="main_title">
            <h2><?php echo ma_tra("Autres manières d'obtenir d'aide")?></h2>
        </div>
        <div class="row satisfaction_item_inner">
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                    </div>
                    <a href="#"><h4><?php echo ma_tra("Forum d'aide")?></h4></a>
                    <p><?php echo ma_tra("Trouvez des réponses et participez à la discussion")?></p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-send" aria-hidden="true"></i>
                    </div>
                    <a href="#"><h4><?php echo ma_tra("Gestionnaire de litige")?></h4></a>
                    <p><?php echo ma_tra("Résolver les problème de transaction")?></p>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="satisfaction_item">
                    <div class="sat_icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <a href="#contact"><h4><?php echo ma_tra("Contactez-nous")?></h4></a>
                    <p><?php echo ma_tra("Contactez le service clientèle")?> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require 'pages/includes/htmlfooter.php';
?>
