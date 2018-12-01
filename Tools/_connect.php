﻿<?php
include 'database.php';
include 'fonction.php';
if(isset($_POST["valider"]))
{
    if( !empty($_POST["email"]) && !empty($_POST["password"]) )
    {
        extract($_POST);
        global $bdd;
        $errors=array();

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $errors[0]="Adresse email invalide !";
        }

        $table="users";
        $field="adresse";

            if(verify($table,$field,$email)==true)
            {
                $password=hash("sha256",$password);
//                $password=password_hash($password,PASSWORD_DEFAULT);

                $sql=$bdd->prepare("select * from users where adresse=? and password=? and active=true");
                $sql->execute(array($email,$password));
                $c=$sql->rowCount();
                if($c == 1){
                    unset($_SESSION);
                    $req=$bdd->prepare("select * from users where adresse=?");
                    $req->execute(array($email));
                    if ($req){
                        $row=$req->fetch(PDO::FETCH_OBJ);
                        if(isset($_COOKIE["account_code"]))
                        {
                            unset($_COOKIE["account_code"]);
                        }
                        setcookie("account_code",$row->code,time()+3600*24,"/dashboard","www.dashboard.gandokintche.com");
                        header('location:http://www.dashboard.gandokintche.com/index');
                    }
                }else{
                    $errors[2]="Mot de passe incorrect ou votre compte n'est pas activé.";
                    $_SESSION["email"]=$email;
                }
            }else{
                $errors[1]="Vous n'avez pas un compte";
            }


    }else{

    }



}