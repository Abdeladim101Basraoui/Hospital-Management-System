<?php


class Patient  
{

    public $CIN;
    public $nom_complet;
    public $date_naissance;
    public $addresse;
    public $sexe;
    public $tel;
    public $email;
    public $password;
    public $historique;


    public function __construct($c,$nc,$dn,$a,$s,$t,$e,$p,$h)
    {
        $this->CIN = $c;
        $this->nom_complet = $nc;
        $this->addresse = $dn;
        $this->sexe = $s;
        $this->tel = $t;
        $this->email = $e;
        $this->password = $p;
        $this->historique = $h;
    }

    public function connect()
    {
        try 
        { 
            $c= new PDO("mysql:host=localhost;dbname=centresante","root","");
            return $c;
        }
        catch (Exception $e)
        {
            echo "connection failed";
        }
    }

    /**
     * 
     */
    public function inscrire($pat)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="INSERT INTO patient (Cin_patient, Nom_complet, Date_naissance, Addresse, Sexe, Tel, Email, `Password`, Historique, Cin_employe) VALUES ('".$pat->CIN."', '".$pat->nom_complet."','".$pat->date_naissance."', '".$pat->addresse."', '".$pat->sexe."', '".$pat->tel."', '".$pat->email."', '".$pat->password."', '".$pat->historique."',  NULL)";
            $query = $c->prepare($sql);
            $query->execute();
            return true;
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

    public function se_connecter($email,$password)
    {
        $cin = false;
        $c = $this->connect();
        if($c!=null)
        {   
            $sql = "SELECT * FROM patient WHERE Email='".$email."' AND Password='".$password."'";
            $r = $c->query($sql);
            foreach($r as $v){
                $cin = $v[0];
            }
            return $cin;
        }
        else 
        {  
            echo "Compte non trouvé"; 
            return false;
        }
    }

}
