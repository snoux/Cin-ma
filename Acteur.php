<?php

class Acteur extends Personne
{
    private array $_castings;

    //Constructeur pour définir l'Acteur//
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
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

//Méthode pour lister la filmographie d'un acteur
    public function FilmographieActeur()
    {
        $result = "<p>************************</p>";
        $result .= "<p>". $this->getNom() . " " . $this->getPrenom() . " a joué dans :</p>";
        foreach($this->_castings as $casting)
        {
            $result .= $casting->getFilm() . "<br>";
        }
        return $result;
    }
    
}
