<?php
include 'database.php';
include 'fonction.php';

if(isset($_POST["valider"])){
    if(!empty($_POST["email"])){
        extract($_POST);
        global $bdd;
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            if(verify("users","adresse",$email) == true){
                $op_code=generateToken(3);
                $heure=date("H:i");
                $sql=$bdd->prepare("update users set code_reinitialisation=?, duree_code=? where adresse=?");
                $sql->execute(array($op_code,$heure,$email));
                if($sql){
                    $to=$email;
                    $header = "Content-type: text/html; charset= utf-8 \r\n";
                    $header .= "FROM: "."GANDOKINTCHE"."<contact@gandokintche.com> \r\n";
                    $header .= "MIME-Version: 1.0 \r\n";
                    $header .= "Content-Transfer-Encoding: 8bit \r\n";
                    $header .= "Date: ".date("r (T)")." \r\n";
                    $subject="REINITIALISATION DU MOT DE PASSE";

                    $ad=sha1($email);
                    ob_start();
                    ?>

                    <h2>Votre code de r&eacute;inialistion est le suivant :<?php echo $op_code; ?> (Ce code est valide pour 30min). <a href="http://www.gandokintche.com/activable_compte?account=<?php echo $email; ?>&amp;token_ID=<?php echo $ad; ?>&amp;code=<?php echo $op_code ?>">Cliquez sur le lien</a> pour continuer.</h2>


<?php
                    $message=ob_get_clean();
                    $email_content= mail($to, $subject,$message,$header);
                    if($email_content){
                        echo '<div id="msg" class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">&times;</button>';
                        echo 'Consulter votre compte email pour réinitialiser votre mot de passe';
                        echo '</div>';
                    }

                }
            }else{
                echo '<div id="msg" class="alert alert-warning"> <button type="button" class="close" data-dismiss="alert">&times;</button>';
                echo 'Il semble que vous n\'avez pas un compte';
                echo '</div>';
            }
        }else{
            echo '<div id="msg" class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo 'Adresse email invalide !';
            echo '</div>';
        }

    }
}