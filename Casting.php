<?php

class Casting
{
    private Role $_role;
    private Film $_film;
    private Acteur $_acteur;

//Constructeur pour définir le Casting//
    public function __construct(Film $film, Role $role, Acteur $acteur)
    {
        $this->_film = $film;
        $this->_film->addCasting($this);
        $this->_role = $role;
        $this->_role->addCasting($this);
        $this->_acteur = $acteur;
        $this->_acteur->addCasting($this);
    }

//Getter et Setter
    public function getFilm(): string
    {
        return $this->_film->getTitre();
    }
    public function getRole(): string
    {
        return $this->_role->getRole();
    }
    public function getActeur(): string
    {
        return $this->_acteur->getNom() . " " . $this->_acteur->getPrenom();
    }

}