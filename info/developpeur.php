<?php
$title="Partenaires/Développeurs";
require 'pages/includes/htmlheader.php';
?>


<div id="header_paiement" class="major special" >
    <div class="ve_center">
        <h1 style="font-size: 50px;font-family: 'Pacifico';"><span style="color:#e0c3fc;">Pai</span><span style="color: #8ec5fc">Me</span></h1>
        <h2 style="font-size: 25px">Intégrer facilement <br> l'API sur votre platforme</h2>
        <div class="call-to-action">
            <button style="width: 300px; height: 50px" type="submit" value="submit your quote" class="btn submint_btn form-control">
               Documentation
            </button>
        </div>

    </div>


</div>

<section  class="question_area">
    <div class="container">
        <div class="main_title">
            <h2>Télécharger les API</h2>
            <p>L'API de PaiMe fournir un certain niveau d'abstration au développeur, c'est-à-dire qu'elle lui masque
            la complexité de l'accès à notre système en proposant un jeu de fonctions standard dont seuls les paramètres
            et les valeurs retournées sont connus</p>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left_question_inner">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1.Intégration sur Application Android
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <a class="price_btn" href="#">Lancer le téléchargement</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Intégration sur Application IOS
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <a class="price_btn" href="#">Lancer le téléchargement</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Intégration sur Application web (PHP)
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <a class="price_btn" href="#">Lancer le téléchargement</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        4.Intégration sur Application web (Javascript)
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                <div class="panel-body">
                                    <a class="price_btn" href="#">Lancer le téléchargement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="lip pull-right" style="color: #00A0D1;font-size: 18px">
                  Voir la documentation <span> <i class="fa fa-arrow-right"></i> </span>
                </a>
            </div>

            <div class="col-md-5" id="qui">
                <div class="right_question_img" >
                    <img src="assets/img/enr.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>





<?php
require 'pages/includes/htmlfooter.php';
?>
