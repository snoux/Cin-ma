<?php

class Realisateur
{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;
    private array $_realisateur;

//Constructeur pour définir un Réalisateur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
    }

//Getter et Setter//
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getSexe(): string
    {
        return $this->_sexe;
    }
    public function setSexe(string $sexe)
    {
        $this->_sexe = $sexe;
    }

    public function getDateNaissance(): string
    {
        return $this->_dateNaissance;
    }
    public function setDateNaissance(string $dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

///////////////////////////////////////////////////////////
//Méthode pour ajouter un réalisateur à un film
    public function addRealisateur(Film $realisateur)
    {
        $this->_realisateur[] = $realisateur;
    }

}

?>