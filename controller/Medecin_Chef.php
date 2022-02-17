<?php


include('Medecin.php');

class Medecin_Chef extends Medecin
{

    
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
         parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
        
    }


    public function connect()
   {
        try { 
               $c= new PDO("mysql:host=localhost;dbname=centresante","b1sra0u1","root");
               return $c;
            }
        catch (Exception $e)
            {
                echo 'connexion failed';
            }
   }


    
    public function DemandeMateriel($dmd)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO demande_materiel (Num_demande, Date_demande, Date_besoin_materiel, Cin_employe,Cin_employe_technicien, Etat_demande) VALUES (NULL,'$dmd->date_demande','$dmd->date_besoin_materiel','$this->CIN', NULL ,'demande')";
            $v= $c->prepare($sql);
            $v->execute();
            return $this->getLastId();  
        }        
    }

    public function ModifierDemandeMateriel($mat)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE demande_materiel SET Date_besoin_materiel='$mat->date_besoin_materiel' WHERE Num_demande = '$mat->num_demande'";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }        
    }

    public function getLastId(){
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="SELECT max(Num_demande) FROM demande_materiel";
            $r= $c->query($sql);
            return $r;  
        }        
    }

    public function AjouterMaterielDemande($mtr,$id)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO materiel_demande ( num_demande, num_materiel) VALUES ('$id', '$mtr')";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

    public function SupprimerMaterielDemande($id)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="DELETE FROM materiel_demande WHERE num_demande ='$id'";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

    public function ValiderConge($num_conge)
    {
         $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE conge SET  Etat_conge ='valide' WHERE Num_conge ='$num_conge'";
            $v= $c->prepare($sql);
            $v->execute();
            return true; 
        }
    }
    public function RefuserConge($num_conge)
    {
         $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE conge SET  Etat_conge ='refuse' WHERE Num_conge ='$num_conge'";
            $v= $c->prepare($sql);
            $v->execute();
            return true; 
        }
    }

    public function ListerEmploye()
    {
        $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM employe";
            $r=$c->query($sql);
            return $r;  
        }
    }
    public function ListerDemandeConge()
    {
        $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT e.Nom_complet,e.Role,c.Objet,c.Etat_conge,c.Date_conge,c.Duree_conge,c.Note ,c.Num_conge FROM `conge` as c,employe as e WHERE c.Cin_employe = e.Cin_employe";
            $r=$c->query($sql);
            return $r;  
        }
    }
    public function ListerDemande()
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM demande_materiel";
           $r=$c->query($sql);
        
          return $r;  
      }
        else 
        {

        }
    }
    
    public function ListerMateriel()
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM materiel ";
           $r=$c->query($sql);
            
          return $r;  
      }
        else 
        {

        }
    }
    public function ListerMaterielDemande($id)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM materiel as m,materiel_demande as md where md.num_materiel = m.num_materiel and md.num_demande = $id ; ";
           $r=$c->query($sql);
            
          return $r;  
      }
        else 
        {

        }
    }
    public function AfficherDemandeMat($idd)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM demande_materiel WHERE Num_demande=$idd";
           $r=$c->query($sql);
           
          return $r;  
      }
        else 
        {

        }
    }

    public function AfficherDemande($num_conge)
    {
         $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM conge WHERE `Num_conge`=$num_conge";
            $r=$c->query($sql);
            return $r;  
        }

    }

}
