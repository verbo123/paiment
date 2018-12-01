<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-2.2.4.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Dashboard-PaiMe</title>
</head>
<body>
<div class="container">
    <a href="index" class="lip" style="color: #00A0D1;">
        <span> <i class="fa fa-arrow-left"></i> </span> Retour à la page d'accueil
    </a>
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 style="font-size: 50px;font-family: 'Pacifico';"><span style="color:#e0c3fc;">Pai</span><span style="color: #8ec5fc">Me</span></h1>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <?php require  'Tools/password_change.php'; ?>
            <form class="form-horizontal" method="post">

                <div class="form-group">
                    <label for="pas" class="cols-sm-2 control-label">Nouveau mot de passe</label>


                            <input type="password" class="form-control" name="pax1" id="pax1" />


                </div>

                <div class="form-group">
                    <label for="paax" class="cols-sm-2 control-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="pax2" id="pax2" />

                </div>

                <div class="form-group ">
                    <div class="call-to-action">
                        <button style="width: 279px; height: 50px" type="submit" name="valider" class="btn submint_btn form-control">
                            Valider
                        </button>
                    </div>
                </div>

                <div class="login-register">
                    <a href="login">Se connecter</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<style type="text/css">
    body, html{
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/devop.jpg') no-repeat;
        font-family: 'Oxygen', sans-serif;
        background-size: cover;
    }

    .main{
        margin-top: 30px;
    }

    h1.title {
        font-size: 50px;
        font-family: 'Passion One', cursive;
        font-weight: 400;
    }

    hr{
        width: 10%;
        color: #fff;
    }

    .form-group{
        margin-bottom: 15px;
    }

    label{
        margin-bottom: 15px;
    }

    input,
    input::-webkit-input-placeholder {
        font-size: 11px;
        padding-top: 3px;
    }

    .main-login{
        background-color: #fff;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

    }

    .main-center{
        margin: 0 auto;
        max-width: 330px;
        padding: 40px 40px;

    }

    .login-button{
        margin-top: 5px;
    }

    .login-register{
        font-size: 11px;
        text-align: center;
    }
</style>
</body>
<div style="background: transparent; color: white" class="footer_copy_right">
    <div class="container">
        <div class="pull-left">
            <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | Ampayeur
                pour <a href="index" target="_blank">
                    <span style="font-family: 'Pacifico';"><span style="color:#e0c3fc;">Pai</span><span style="color: #8ec5fc">Me</span></span>
                </a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
        <div class="pull-right">
            <ul>
                <li><a href="#">Terme & Condition</a></li>
                <li><a href="tarif">Tarifs</a></li>
                <li><a href="developpeur">Développeurs</a></li>
                <li><a href="#">Nous contactez</a></li>
            </ul>
        </div>
    </div>
</div>
</html>