<?php
class Attestation
{
    private $id_attestation;
    private $numero_attestation;
    private $id_type;
    private $intermediaire;
    private $etat_actuel;
    private $etat_sortie;

    function __construct($numero_attestation='',$id_type='',$intermediaire='',$etat_actuel='',$etat_sortie)
    {
       $this->numero_attestation = $numero_attestation;
        $this->id_type            = $id_type;
        $this->intermediaire      = $intermediaire;
        $this->etat_actuel        = $etat_actuel;
        $this->etat_sortie        = $etat_sortie;
    }

    /**
     * Get the value of id_attestation
     * 
     */ 
    public function getIdAttestation()
    {
        return $this->id_attestation;
    }

    /**
    
     * Get the value of numero_attestation
     * 
     */ 
    public function getNumero_attestation()
    {
        return $this->numero_attestation;
    }

    /**
     * Set the value of numero_attestation
     *
     */ 
    public function setNumeroAttestation($numero_attestation)
    {
        $this->numero_attestation = $numero_attestation;

        return $this;
    }

    /**
     * Get the value of id_type
     * 
     */ 
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set the value of id_type
     *
     */ 
    public function setIdType($id_type)
    {
        $this->id_type = $id_type;

        return $this;
    }

    /**
     * Get the value of intermediaire
     */ 
    public function getIntermediaire()
    {
        return $this->intermediaire;
    }

    /**
     * Set the value of intermediaire
     *
     */ 
    public function setIntermediaire($intermediaire)
    {
        $this->intermediaire = $intermediaire;

        return $this;
    }

    /**
     * Get the value of etat_actuel
     */ 
    public function getEtat_actuel()
    {
        return $this->etat_actuel;
    }

    /**
     * Set the value of etat_actuel
     *
     */ 
    public function setEtat_actuel($etat_actuel)
    {
        $this->etat_actuel = $etat_actuel;

        return $this;
    }

    /**
     * Get the value of etat_sortie
     */ 
    public function getEtat_sortie()
    {
        return $this->etat_sortie;
    }

    /**
     * Set the value of etat_sortie
     *
     */ 
    public function setEtat_sortie($etat_sortie)
    {
        $this->etat_sortie = $etat_sortie;

        return $this;
    }
    }

  
