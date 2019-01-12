<?php
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

if(!empty($_POST["email"]))
{
    global $bdd;
    extract($_POST);
    $result=array();

    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        if(verify("newsletter","email",$email)==false)
        {
            $sql=$bdd->prepare("insert into newsletter(email) values(?)");
            $sql->execute(array($email));
            if($sql)
            {
                if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == "en_US")
                {
                    $result["msg"]="Subscription successfully completed !" ;
                }else
                    {
                    $result["msg"]="Abonnement effectué avec succès !" ;
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
                $result["error"]="You are already a subscriber !" ;
            }else{
                $result["error"]="Vous êtes déjà un abonné !" ;
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