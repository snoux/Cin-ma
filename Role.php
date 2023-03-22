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

    //Méthode pour ajouter un Casting
    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    //Methode pour afficher les acteurs ayant incarné un rôle précis
    public function ActeursRole()
    {
        $result = "La liste des acteurs ayant incarné le rôle de " . $this->_role . " : <br>";
        foreach($this->_castings as $casting)
        {
            $result .= $casting->getActeur() . "<br>";
        }
        return $result;
    }

}
