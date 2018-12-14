<?php
$result=false;
if(isset($_GET["lang"]))
{
    setcookie("lang",$_GET["lang"],time()+3600*24,"/","localhost");
    $result=true;
}else
{
    setcookie("lang","fr_FR",time()+3600*24,"/","localhost");
    $result=true;
}
echo json_encode($result);