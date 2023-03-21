<?php

class Acteur extends Realisateur
{
    private string $_role;

//Constructeur pour définir l'Acteur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance, string $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_role = $role;
    }

//Getter et Setter//
    public function getRole(): string
    {
        return $this->_role;
    }
    public function setRole(string $role)
    {
        $this->_role = $role;
    }

//////////////////////////////////////////////////
}