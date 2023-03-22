<?php

class Genre
{
    private string $_nomGenre;
    private array $_films;

//Constructeur pour définir un Genre//
    public function __construct(string $nomGenre)
    {
        $this->_nomGenre = $nomGenre;
        $this->_films = [];
    }

//Getter et Setter//
    public function getNomGenre(): string
    {
        return $this->_nomGenre;
    }
    public function setNomGenre(string $genre)
    {
        $this->_nomGenre = $genre;
    }

//Méthode pour ajouter un Film à Genre
    public function addFilm(Film $film)
    {
        $this->_films[] = $film;
    }
}