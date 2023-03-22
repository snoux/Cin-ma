<?php

class Role 
{
    private string $_role;
    private array $_roles;
    private array $_castings;

//Constructeur pour définir le Role//
    public function __construct(string $role)
    {
        $this->_role = $role;
        $this->_roles = [];
        $this->_castings = [];
    }

//Getter et Setter
    public function getRole(): string
    {
        return $this->_role;
    }
    public function setRole(string $role)
    {
        $this->_role = $role;
    }

//Méthode pour ajouter un Role à un Film
    public function addRole(Acteur $role)
    {
        $this->_roles[] = $role;
    }

//Methode pour afficher les acteurs ayant incarné un rôle précis
    public function ActeurRole()
    {
        $result = "La liste des acteurs ayant incarné le rôle de " . $this->_role . " : ";
    }

//Méthode pour ajouter un Casting
public function addCasting(Casting $casting)
{
    $this->_castings[] = $casting;
} 
}