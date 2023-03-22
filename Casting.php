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
    // public function getCasting(): string
    // {
    //     return $this->_film->;
    // }
    // public function setCasting(string $casting)
    // {
    //     $this->_casting = $casting;
    // }


}