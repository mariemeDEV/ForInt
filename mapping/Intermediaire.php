<?php

class Intermediaire {
    private $matricule;
    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $email;
    private $mdp;
    private $role;
    private $actived;

    function __construct($matricule='',$nom='',$prenom='',$adresse='',$tel='',$email='',$mdp='',$role='',$actived='')
    {
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->tel=$tel;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->role=$role;
        $this->actived=$actived;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule=$matricule;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

        public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel=$tel;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($mdp)
    {
        $this->mdp=$mdp;
    }

    /**
     * @return string
     */
    public function getActived()
    {
        return $this->actived;
    }

    /**
     * @param string $actived
     */
    public function setActived(string $actived)
    {
        $this->actived = $actived;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->role = $role;
    }





}