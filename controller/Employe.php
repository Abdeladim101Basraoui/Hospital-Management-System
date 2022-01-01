<?php

declare(strict_types=1);


class Employe
{

    public $CIN;
    public $nom_complet;
    public $date_naissance;
    public $addresse;
    public $sexe;
    public $tel;
    public $email;
    public $password;
    public $role;
    /**
     * Default constructor
     */
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        $this->CIN=$c;
        $this->nom_complet=$nc;
        $this->date_naissance=$dn;
        $this->addresse=$adr;
        $this->sexe=$sx;
        $this->tel=$tl;
        $this->email=$eml;
        $this->password=$pwr;
        $this->role=$rol;
  
    }

    public function connect($eml,$pwr)
   {
        try { 
        	   $c= new PDO("mysql:host=localhost;dbname=centresante",$eml,$pwr);
               return $c;
            }
        catch (Exception $e)
            {
             	return NULL;
            }
   }

    public function se_connecter()
    {
         
    }

    /**
     * 
     */
    public function DemanderConge()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function AnnulerConge()
    {
        
    }

    /**
     * 
     */

}