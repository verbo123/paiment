<?php
header( 'Content-type: text/html; charset=UTF-8' );
include 'database.php';
function verify($table,$field, $code)
{
    global $bdd;
    $req=$bdd->prepare("select * from ".$table." where ".$field."= ?");
    $req->execute(array($code));
    if($req->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}

if(!empty($_POST["name"]) && !empty($_POST["phone"])
    && !empty($_POST["email"]) && !empty($_POST["prob"])
    && !empty($_POST["message"]))
{
    global $bdd;
    extract($_POST);
    $result=array();
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $to="contact@gandokintche.com";
        $header = "Content-type: text/html; charset=UTF-8". "\r\n";
        $header .= "FROM: ".$name."<".$email.">". "\r\n";
        $header .= "MIME-Version: 1.0" ."\r\n";
        $header .= "Content-Transfer-Encoding: 8bit" ."\r\n";
        $header .= "Date: ".date("r (T)")."". "\r\n";
        $subject=$prob;

        ob_start();
    ?>

        <table style="vertical-align: top;margin-top: 20px">
            <tr>
                <td class="75p">
                    <strong><?php echo $name; ?></strong><br />
                    <strong>Email : </strong><?php echo $email; ?><br />
                    <strong> T&eacute;l&eacute;phone : </strong> <?php echo $phone; ?><br />
                </td>
            </tr>
        </table>

        <p>
            <?php
                echo $message ;
            ?>
        </p>

<?php
        $mes=ob_get_clean();
        $email_content= mail($to, $subject,$mes,$header);
        if ($email_content)
        {
            if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == "en_US")
            {
                $result["msg"]="Message sent successfully !" ;
            }else
            {
                $result["msg"]="Méssage envoyé avec succès !" ;
            }
        }else{
            if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == "en_US")
            {
                $result["error"]="A server error has occurred !" ;
            }else
            {
                $result["error"]="Une erreur serveur s'est produite !" ;
            }
        }


    }else{
        if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == "en_US")
        {
            $result["error"]="Invalid email address !" ;
        }else{
            $result["error"]="Email invalide !" ;
        }
    }

    echo json_encode($result);


}