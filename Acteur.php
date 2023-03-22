<?php

class Acteur extends Personne
{
    private Role $_role;
    private array $_castings;

    //Constructeur pour définir l'Acteur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance, Role $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_castings = [];
    }

    //Getter et Setter//

    //////////////////////////////////////////////////
    //Méthode pour ajouter un Casting
    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    
}
