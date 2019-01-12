<?php
include("pages/geoipcity.inc");
include("pages/geoipregionvars.php");

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

function get_user_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }


    //return  "197.234.221.157";
}


function get_location()
{
    $gi = geoip_open(realpath("pages/GeoLiteCity.dat"),GEOIP_STANDARD);
    $record = geoip_record_by_addr($gi,$_SERVER['REMOTE_ADDR']); //$_SERVER['REMOTE_ADDR']=197.234.221.157;
    geoip_close($gi);

    return $record;
}

function get_navigateur()
{
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $br=null;
    // Detect Device/Operating System
    if(preg_match('/Linux/i',$agent)) $os = 'Linux';
    elseif(preg_match('/Mac/i',$agent)) $os = 'Mac';
    elseif(preg_match('/iPhone/i',$agent)) $os = 'iPhone';
    elseif(preg_match('/iPad/i',$agent)) $os = 'iPad';
    elseif(preg_match('/Droid/i',$agent)) $os = 'Droid';
    elseif(preg_match('/Unix/i',$agent)) $os = 'Unix';
    elseif(preg_match('/Windows/i',$agent)) $os = 'Windows';
    else $os = 'Unknown';

    // Browser Detection
    if(preg_match('/Firefox/i',$agent)) $br = 'Firefox';
    elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
    elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome';
    elseif(preg_match('/Opera/i',$agent)) $br = 'Opera';
    elseif(preg_match('/Msie/i',$agent)) $br = 'IE';
    elseif(preg_match('/Edge/i',$agent)) $br = 'Edge';
    elseif(preg_match('/Dolphin/i',$agent)) $br = 'Dolphin';
    elseif(preg_match('/Android/i',$agent)) $br = 'Android';
    elseif(preg_match('/Konqueror/i',$agent)) $br = 'Konqueror';
    elseif(preg_match('/Qutebrowser/i',$agent)) $br = 'Qutebrowser';
    elseif(preg_match('/Lunascape/i',$agent)) $br = 'Lunascape';
    elseif(preg_match('/Chromium/i',$agent)) $br = 'Chromium';
    elseif(preg_match('/Maxthon Cloud/i',$agent)) $br = 'Maxthon Cloud';
    else $br = 'Inconnu';


    return $br;
}



// Fonction qui permet de mettre à jour le compteur de visites
function compter_visite()
{
    global $bdd;
    global $GEOIP_REGION_NAME;

    $pays=get_location()->country_name;
    $commune=$GEOIP_REGION_NAME[get_location()->country_code][get_location()->region];
    $ville=get_location()->city;
    $lon=get_location()->longitude;
    $lat=get_location()->latitude;
    $code=get_location()->country_code;

// récupération de l'heure courante
    $date_courante = date("Y-m-d H:i:s");

// récupération de l'adresse IP du client (on cherche d'abord à savoir si il est derrière un proxy)
    $ip=get_user_ip();

// récupération du domaine du client
    $host = gethostbyaddr($ip);

// récupération du navigateur et de l'OS du client
    $navigateur = get_navigateur();

// récupération du REFERER

    $referer = $_SERVER['HTTP_REFERER'];
// récupération du nom de la page courante ainsi que ses arguments
    if ($_SERVER['QUERY_STRING'] == "") {
        $page_courante = $_SERVER['PHP_SELF'];
    }
    else {
        $page_courante = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    }

    if(verify("stats_visites","ip",$ip) == false)
    {
        $query = $bdd->prepare("INSERT INTO stats_visites (ip,pages_vues,nbre_page_vue,Visit_Referer,host,navigateur,pays,commune,ville,longitude,latitude,country_code) VALUES (?,?,1,?,?,?,?,?,?,?,?,?)");
        $query->execute(array($ip,$page_courante,$referer,$host,$navigateur,$pays,$commune,$ville,$lon,$lat,$code));
    }
    else
    {
        $query = $bdd->prepare("update stats_visites set pages_vues = ?, nbre_page_vue= nbre_page_vue+1 , Visit_Referer=?, host=?, navigateur=?,pays=?,commune=?,ville=?,longitude=?,latitude=?,country_code=? where ip=?");
        $query->execute(array($page_courante,$referer,$host,$navigateur,$pays,$commune,$ville,$lon,$lat,$code,$ip));
    }

}




function generateToken($nbre)
{
    $token=openssl_random_pseudo_bytes($nbre);
    $token=bin2hex($token);
    return $token;
}




