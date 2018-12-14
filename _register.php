<?php
session_start();
include 'database.php';
include 'fonction.php';
if(isset($_POST["valider"]))
{
    if( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["password"]) && isset($_POST["confirm"]))
    {
        extract($_POST);
        global $bdd;
        $errors=array();
        if($password != $confirm)
        {
            $errors[0]="Les deux mots de passe ne sont pas les mêmes ";
            $_SESSION["confirm"]="Les deux mots de passe ne sont pas les mêmes ";

            $_SESSION["adresse"]=$adresse;
            $_SESSION["nom"]=$nom;
            $_SESSION["prenom"]=$prenom;
        }

        if(mb_strlen($password) < 8)
        {
            $errors[1]="Le mot de passe doit contenir au moins 8 caractères ";
            $_SESSION["passe"]="Le mot de passe doit contenir au moins 8 caractères";

            $_SESSION["adresse"]=$adresse;
            $_SESSION["nom"]=$nom;
            $_SESSION["prenom"]=$prenom;
        }

        if(!filter_var($adresse,FILTER_VALIDATE_EMAIL))
        {
            $errors[2]="Votre email est invalide ";
            $_SESSION["adresse"]=$adresse;
            $_SESSION["nom"]=$nom;
            $_SESSION["prenom"]=$prenom;
        }

        if(empty($errors))
        {
            $code=strtoupper(uniqid());
            $table="users";
            $field="adresse";
            if(verify($table,$field,$adresse) == true)
            {
                    echo '<div id="msg" class="alert alert-danger"> <button type="button" class="close" datadismiss="alert">&times;</button>';
                    echo 'L\'email existe déjà. Vous pouvez <a href="forgot-password">réinitialisé votre compte</a> si vous avez oublié votre mot de passe ';
                    echo '</div>';
                    unset($_SESSION);
            }else{
                $tmp_tk=generateToken(32);
                $op_code=generateToken(4);

                $to=$adresse;
                $header = "Content-type: text/html; charset= utf-8 \r\n";
                $header .= "FROM: "."GANDOKINTCHE"."<contact@gandokintche.com> \r\n";
                $header .= "MIME-Version: 1.0 \r\n";
                $header .= "Content-Transfer-Encoding: 8bit \r\n";
//                $header .="Disposition-Notification-To: ".$adresse." r\n";
                $header .= "Date: ".date("r (T)")." \r\n";
                $subject="ACTIVATION DE COMPTE GANDOKINTCHE";

                $ad=sha1($adresse);
                ob_start();
                ?>

                <h2>Votre inscription a &eacute;t&eacute; prise en compte. Cliquez sur le lien suivant pour continuer. <a target="_blank"  href="http://www.gandokintche.com/account_active?account=<?php echo $ad; ?>&amp;token_ID=<?php echo $tmp_tk; ?>" >Activation de compte</a></h2>

            <?php
                $message=ob_get_clean();
                $email_content= mail($to, $subject,$message,$header);
                if($email_content)
                {
                    $password=hash("sha256",$password); //password_hash($password,PASSWORD_DEFAULT); //hash("sha256",$password)
                    $sql=$bdd->prepare("INSERT INTO users(code, op_code, nom, prenom, adresse, password,tmp_token) VALUES(?,?,?,?,?,?,?)");
                    $sql->execute(array($code,$op_code,$nom,$prenom,$adresse,$password,$tmp_tk));

                    $sol=$bdd->prepare("insert into solde(code_user_solde,total,montant_test,montant_commerce) values (?,?,?,?)");
                    $sol->execute(array($code,0,20000,0));

                    $auth=$bdd->prepare("insert into m_autorisation(user_c, virement) values (?,?)");
                    $auth->execute(array($code,true)); //activé le service virement par défaut

                    $pers=$bdd->prepare("insert into user_groupe(user_cod, groupe_code) values (?,?)");
                    $pers->execute(array($code,1)); //attribuer un groupe par défaut


                    if($sql)
                    {
                        echo '<div id="msg" class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">&times;</button>';
                        echo 'Inscription effectuée avec succès ! <br> Valider votre inscription en cliquant sur le lien que nous vous avons envoyé dans votre boîte email.';
                        echo '</div>';
                        unset($_SESSION);
                    }
                }

            }



        }

    }
}
