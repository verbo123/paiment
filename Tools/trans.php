<?php
include 'database.php';
include 'fonction.php';
if(isset($_POST))
{
    global  $bdd;
    $login="5B8A316F6304A";
    $result=array();
    $sql=$bdd->prepare("select * from transaction where code_user_sender=? or code_user_receiver=? order by date asc ");
    $sql->execute(array($login,$login));
    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result=$row;
        }
    }
    echo json_encode($result);
}
