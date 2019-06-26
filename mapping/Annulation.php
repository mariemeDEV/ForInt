<?php

class Annulation{
    private $id;
    private $numero_police;
    private $code_intermadiaire;
    private $motif;
    private $etat_annulation;
    private $dateAnnulation;
    private $role_auteur;

    function __construct($id='',$numero_police='',$code_intermediaire='',$motif='',$etat_annulation='', $dateAnnulation='', $role_auteur)
    {
        $this->id=$id;
        $this->numero_police=$numero_police;
        $this->code_intermediaire=$code_intermediaire;
        $this->motif=$motif;
        $this->etat_annulation=$etat_annulation;
        $this->dateAnnulation=$dateAnnulation;
        $this->role_auteur=$role_auteur;
    }

      /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

      /**
     * @return string
     */
    public function getNumeroPolice()
    {
        return $this->numero_police;
    }

    /**
     * @param string $numero_police
     */
    public function setNumeroPolice(string $numero_police)
    {
        $this->numero_police = $numero_police;
    }

        /**
     * @return int
     */
    public function getCodeIntermediaire()
    {
        return $this->code_intermediaire;
    }

    /**
     * @param int $code_intermediaire
     */
    public function setCodeIntermediaire(string $code_intermadiaire)
    {
        $this->code_intermediaire = $code_intermediaire;
    }

    
      /**
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * @param string $motif
     */
    public function setMotif(string $motif)
    {
        $this->motif = $motif;
    }

    
      /**
     * @return string
     */
    public function getEtatAnnulation()
    {
        return $this->etat_annulation;
    }

    /**
     * @param string $etat_annulation
     */
    public function setEtatAnnulation(string $etat_annulation)
    {
        $this->etat_annulation = $etat_annulation;
    }
    
    /**
     * @param string $dateAnnulation
    */
    public function setDateAnnulation($dateAnnulation){
        $this->dateAnnulation= $dateAnnulation;
    }

    /**
     * @return string $dateAnnulation
     */
    public function getDateAnnulation(){
        return $this->dateAnnulation;
    }

      /**
     * @param string $role_auteur
    */
    public function setRoleAuteur($role_auteur){
        $this->role_auteur= $role_auteur;
    }

    /**
     * @return string $role_auteur
     */
    public function getRoleAuteur(){
        return $this->role_auteur;
    }
   


  


  


   

  

}