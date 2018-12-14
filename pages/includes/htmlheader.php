<?php
include 'Tools/database.php';
require 'Tools/fonction.php';
//compter_visite();

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/img/fvicon.png" type="image/x-icon" />

    <title><?php echo $title; ?> | <?php echo ma_tra("Paiement sécrurisé au Bénin");?></title>

    <!-- Icon css link -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icofont.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />

    <!-- Rev slider css -->
    <link href="assets/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="assets/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="assets/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="assets/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="assets/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/parsley.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
<!--    <link href="assets/css/feuille.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="120">


<div id="preloader">
    <div id="preloader_spinner">
        <div class="pre_inner">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>
    </div>
</div>


<!--================Header Area =================-->
<header class="main_header_area" >
    <div class="main_menu_area">
        <div style="max-width:1200px" class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img style="max-width: 100px;" src="assets/img/logof.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse js-navbar-collapse" id="bs-example-navbar-collapse-1">
<!--                    <ul class="nav navbar-nav navbar-right">-->

                    <ul class="nav navbar-nav pull-right">

                        <li class="js-item-menu">
                            <a href="#" style="color: #0d1c3f;font-weight: 700;" ><?php echo ma_tra("SOLUTIONS")?></a>
                            <ul class="mess-dropdown js-dropdown row" style="padding: 30px">
                                <div class="">
                                    <div style="display: block" class="row">
                                        <div class="col-md-3">
                                            <div class="satisfaction_item">
                                                <div class="sat_icon">
                                                    <i class="fa fa-money" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="co-md-9">
                                               <a href="#"><h4 style="padding-bottom: 0"><?php echo ma_tra("PAIEMENTS")?></h4></a>
                                               <p><?php echo ma_tra("Un outil complet pour les développeurs, facile à intégrer")?></p>
                                       </div>
                                    </div>

                                    <div style="margin-top: 20px;display: block" class="row">
                                        <div class="col-md-3">
                                            <div class="satisfaction_item">
                                                <div class="sat_icon">
                                                    <i class="fa fa-book" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="co-md-9">
                                            <a href="#"><h4 style="padding-bottom: 0"><?php echo ma_tra("FACTURATION")?></h4></a>
                                            <p><?php echo ma_tra("Un outil qui permet d'établir une facture à vos clients en un clic")?></p>
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </li>

                        <li  class="">
                            <a href="#" style="color: #0d1c3f;font-weight: 700;" class="lip"><?php echo ma_tra("E-COMMERCE")?></a>
                        </li>

                        <li  class="<?php if($title == ma_tra("Partenaires/Développeurs") ) echo "active" ?>">
                            <a href="developpeur" style="color: #0d1c3f;font-weight: 700;" class="lip"><?php echo ma_tra("PARTENAIRES & API")?> </a>
                        </li>
                        <li class="<?php if($title == ma_tra("Tarifs") ) echo "active" ?>">
                            <a href="tarif" class="lip" style="color: #0d1c3f;font-weight: 700;"><?php echo ma_tra("TARIFS")?></a>
                        </li>
                        <li class="<?php if($title == "Support") echo "active" ?>">
                            <a href="support" class="lip" style="color: #0d1c3f;font-weight: 700;"><?php echo ma_tra("FAQ & SUPPORTS") ?></a></li>

                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                if(isset($_COOKIE["lang"]))
                                {
                                    if($_COOKIE["lang"] == "en_US")
                                    {
                                        echo '<img style="max-width: 20px;" src="assets/img/engl.png">';
                                    }elseif ($_COOKIE["lang"] == "fr_FR")
                                    {
                                        echo '<img style="max-width: 20px;" src="assets/img/france.png">';
                                    }
                                }else{
                                    echo '<img style="max-width: 20px;" src="assets/img/france.png">';
                                }

                                ?>


                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <?php
                                    if(isset($_COOKIE["lang"]))
                                    {
                                        if($_COOKIE["lang"] == "en_US")
                                        {
                                            echo '<a class="dropdown-item"  href="javascript:lange(\'fr_FR\')">';
                                            echo '<img style="max-width: 30px;" src="assets/img/france.png">';
                                            echo '<span style="margin-left:10px">French</span>';
                                            echo '</a>';
                                        }elseif ($_COOKIE["lang"] == "fr_FR")
                                        {
                                            echo '<a class="dropdown-item"  href="javascript:lange(\'en_US\')">';
                                            echo '<img style="max-width: 30px;" src="assets/img/engl.png">';
                                            echo '<span style="margin-left:10px">Anglais</span>';
                                            echo '</a>';
                                        }
                                    }else{
                                        echo '<a class="dropdown-item"  href="javascript:lange(\'en_US\')">';
                                        echo '<img style="max-width: 30px;" src="assets/img/engl.png">';
                                        echo '<span style="margin-left:10px">Anglais</span>';
                                        echo '</a>';
                                    }

                                    ?>



                            </div>
                        </li>

                        <li class="<?php if($title == ma_tra("Accédez à votre compte")) echo "active" ?>">
                            <a  href="http://dashboard.gandokintche.com/login?return=true" class="lip" style="color: #0d1c3f;font-weight: 700;">
                                <?php echo ma_tra("Accédez à votre compte")?>
                                <span>
                                    <i class="fa fa-arrow-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->





            </nav>
        </div>
    </div>

<style type="text/css">



    .mega-dropdown {
        position: static !important;

        /*width: 100%;*/
    }

    .mega-dropdown-menu .mega-dropdown-menu2 {
        padding: 20px 0px;
        width: 100%;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.14);
    }

    .mega-dropdown-menu:before  {
        content: "";
        border-bottom: 15px solid #fff;
        border-right: 17px solid transparent;
        border-left: 17px solid transparent;
        position: absolute;
        top: -15px;
        /*display: none;*/
        left: 405px;
        z-index: 10;
    }

    @media (max-width: 1024px)
    {
        .mega-dropdown-menu:before
        {
            left: 265px;
        }

        .mega-dropdown-menu:after {
          display: none;
        }
    }

    }
    .mega-dropdown-menu2:before
    {
        content: "";
        border-bottom: 15px solid #fff;
        border-right: 17px solid transparent;
        border-left: 17px solid transparent;
        position: absolute;
        top: -15px;
        left: 565px;
        z-index: 10;
    }

    .mega-dropdown-menu:after {
        content: "";
        border-bottom: 17px solid #ccc;
        border-right: 19px solid transparent;
        border-left: 19px solid transparent;
        position: absolute;
        top: -17px;
        left: 405px;
        /*display: none;*/
        z-index: 8;
    }

    .mega-dropdown-menu2:after
    {
        content: "";
        border-bottom: 17px solid #ccc;
        border-right: 19px solid transparent;
        border-left: 19px solid transparent;
        position: absolute;
        top: -17px;
        left: 565px;
        z-index: 8;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 > li > ul {
        padding: 0;
        margin: 0;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 > li > ul > li {
        list-style: none;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 > li > ul > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.428571429;
        color: #999;
        white-space: normal;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 > li ul > li > a:hover,
    .mega-dropdown-menu .mega-dropdown-menu2 > li ul > li > a:focus {
        text-decoration: none;
        color: #444;
        /*background-color: #f5f5f5;*/
    }

    .mega-dropdown-menu .mega-dropdown-menu2 .dropdown-header {
        color: #428bca;
        font-size: 18px;
        font-weight: bold;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 form {
        margin: 3px 20px;
    }

    .mega-dropdown-menu .mega-dropdown-menu2 {
        margin-bottom: 3px;
    }


    .navbar .dropdown-menu {
        border:none;

    }

    /* breakpoint and up - mega dropdown styles */
    @media screen and (min-width: 992px) {

        /* remove the padding from the navbar so the dropdown hover state is not broken */
        .navbar {
            padding-top:0px;
            padding-bottom:0px;
        }



        /* makes the dropdown full width  */
        .navbar .dropdown {position:static;}

        .navbar .dropdown-menu {
            width:100%;
            left:0;
            right:0;
            /*  height of nav-item  */
            top:45px;
        }




        /* shows the dropdown menu on hover */
        .navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
            display:block!important;
        }

        .navbar .dropdown-menu {
            border: 1px solid rgba(0,0,0,.15);
            background-color: #fff;
        }


</style>


</header>