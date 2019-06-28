<?php

class Annulation{
    private $id_annulation;
    private $id_police;
    private $code_intermadiaire;
    private $motif_annulation;
    private $etat_annulation;
    private $date_annulation;
    private $matricule_auteur;

    function __construct($id_annulation='',$id_police='',$code_intermediaire='',$motif_annulation='',$etat_annulation='', $date_annulation='', $matricule_auteur)
    {
        $this->id_annulation=$id_annulation;
        $this->id_police=$id_police;
        $this->code_intermediaire=$code_intermediaire;
        $this->motif_annulation=$motif_annulation;
        $this->etat_annulation=$etat_annulation;
        $this->date_annulation=$date_annulation;
        $this->matricule_auteur=$matricule_auteur;
    }

      /**
     * @return int
     */
    public function getIdAnnulation()
    {
        return $this->id_annulation;
    }

        /**
     * @return String
     */
    public function getIdPolice()
    {
        return $this->id_police;
    }

    /**
     * @param String $id_police
     */
    public function setIdPolice(string $id_police)
    {
        $this->id_police = $id_police;
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
    public function setCodeIntermediaire(string $code_intermediaire)
    {
        $this->code_intermediaire = $code_intermediaire;
    }

    
      /**
     * @return string
     */
    public function getMotif()
    {
        return $this->motif_annulation;
    }

    /**
     * @param string $motif
     */
    public function setMotif(string $motif_annulation)
    {
        $this->motif_annulation = $motif_annulation;
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
     * @param string $date_annulation
    */
    public function setDateAnnulation($date_annulation){
        $this->date_annulation= $date_annulation;
    }

    /**
     * @return string $dateAnnulation
     */
    public function getDateAnnulation(){
        return $this->date_annulation;
    }

      /**
     * @param int $matricule_auteur
    */
    public function setMatAuteur($matricule_auteur){
        $this->matricule_auteur= $matricule_auteur;
    }

    /**
     * @return int $matricule_auteur
     */
    public function getMatAuteur(){
        return $this->matricule_auteur;
    }
   


  


  


   

  

}