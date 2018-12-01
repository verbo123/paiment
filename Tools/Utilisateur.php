<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author Verbeck DEGBESSE
 */
class Utilisateur {
    private $DB;
    public function __construct($DB) {
        $this->DB=$DB;
    }
    
      public function find()
    {
        $req= $this->DB->query("select * from users");
        return $req;
    }
    
    public function insert_user($nom,$prenom,$email,$password,$token=""){
        $code=strtoupper(uniqid());
        $password=md5($password);
        $data= array($code,$nom,$prenom,$email,$password,$token);
        $sql=$this->DB->register(
                                "INSERT INTO users(code, nom, prenom, adresse, password, token) values(?,?,?,?,?,?)",
                                "users",
                                "adresse",
                                $email,
                                $data
                                 );

       return $sql;
    } 



   public function connexion($login,$password)
   {
            $data=array($login,$password);
            $sql=$this->DB->connect("select * from users where adresse=? and password=?",$data);
            return $sql;
   }


}
