<?php

class Role 
{
    private string $_role;
    private array $_roles;

    public function __construct(string $role)
    {
        $this->_role = $role;
        $this->_roles = [];
    }

    public function getRole(): string
    {
        return $this->_role;
    }
    public function setRole(string $role)
    {
        $this->_role = $role;
    }

    public function addRole(Acteur $role)
    {
        $this->_roles[] = $role;
    }

//Methode pour afficher les acteurs ayant incarné un rôle précis
    public function ActeurRole()
    {
        $result = "La liste des acteurs ayant incarné le rôle de " . $this->_role . " : ";
    }
}