<?php

class Acteur extends Realisateur
{
    private Role $_role;

//Constructeur pour définir l'Acteur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance, Role $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_role = $role;
        $this->_role->addRole($this);
    }

//Getter et Setter//
    public function getRole(): string
    {
        return $this->_role->getRole();
    }
    public function setRole(Role $role)
    {
        $this->_role = $role;
    }

//////////////////////////////////////////////////
}