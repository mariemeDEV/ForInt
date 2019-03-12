<?php

class Periode_garantie{
    private $id_periode;
    private $date_debut;
    private $date_fin;
    private $heure_debut;
    private $heure_fin;
    private $duree;

    function __construct($id_periode='',$date_debut='',$date_fin='',$heure_debut='',$heure_fin='',$duree='')
    {
        $this->id_periode=$id_periode;
        $this->date_debut=$date_debut;
        $this->date_fin=$date_fin;
        $this->heure_debut=$heure_debut;
        $this->heure_fin=$heure_fin;
        $this->duree=$duree;
    }

    public function getId_periode()
    {
        return $this->id_periode;
    }
    public function setId_periode()
    {
        $this->id_periode=$id_periode;
    }

    public function getDate_debut()
    {
        return $this->date_debut;
    }
    public function setDate_debut()
    {
        $this->date_debut=$date_debut;
    }

    public function getDate_fin()
    {
        return $this->date_fin;
    }
    public function setDate_fin()
    {
        $this->date_fin=$date_fin;
    }

    public function getHeure_debut()
    {
        return $this->heure_debut;
    }
    public function setHeure_debut()
    {
        $this->Heure_debut=$heure_debut;
    }

    public function getHeure_fin()
    {
        return $this->heure_fin;
    }
    public function setHeure_fin()
    {
        $this->heure_fin=$heure_fin;
    }


    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree()
    {
        $this->duree=$duree;
    }


}