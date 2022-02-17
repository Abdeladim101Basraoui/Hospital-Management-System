<?php 
class Stats{

    Public function connect()
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
    public function NoMedecin(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM medecin";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoPatient(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM patient";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoInfirmier(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM infirmier";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoConsult(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM consultation";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoMat(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM materiel";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoRdv(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM rdv";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NoDem(){
        $c=$this->connect();
        if($c!=NULL)
        {  
        $sql="SELECT count(*) FROM demande_conge";
        $r=$c->query($sql);
        return $r;  
        }
    }
    public function NewPatients(){
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM patient LIMIT 5";
            $r=$c->query($sql);
             
           return $r;  
         }
         else 
         {
 
         }
    }
    public function NewRdv(){
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM rdv order by Id_rdv LIMIT 5";
            $r=$c->query($sql);
             
           return $r;  
         }
         else 
         {
 
         }
    }
    public function NewCong(){
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT e.Nom_complet,c.Objet,c.Date_conge,c.Duree_conge FROM `conge` as c,employe as e WHERE c.Cin_employe = e.Cin_employe order by Num_conge ASC LIMIT 5";
            $r=$c->query($sql);
             
           return $r;  
         }
         else 
         {
 
         }
    }
    public function NewDemande(){
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM demande_materiel order by Num_demande LIMIT 5";
            $r=$c->query($sql);
             
           return $r;  
         }
         else 
         {
 
         }
    }
}
?>