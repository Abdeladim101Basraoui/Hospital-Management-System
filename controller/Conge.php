<?php

declare(strict_types=1);


class Conge
{
    public  $num_conge;
    public  $cin_employe;
    public  $objet;
    public  $etat_conge;
    public  $date_conge;
    public  $duree_conge;
    public  $note;

    public function __construct($obj,$et,$dt,$dr,$nt)
    {
         $this->objet=$obj;
         $this->etat_conge=$et;
         $this->date_conge=$dt;
         $this->duree_conge=$dr;
         $this->note=$nt;

    }

}
?>