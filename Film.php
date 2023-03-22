<?php

class Film
{
    private string $_titre;
    private string $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private Genre $_genre;
    private array $_castings;

//Constructeur pour définir un Film//
    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, string $synopsis, Genre $genre)
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
        $this->_genre = $genre;
        $this->_genre->addFilm($this);
        $this->_castings = [];
    }

//Getter et Setter//
    public function getTitre(): string
    {
        return $this->_titre;
    }
    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }

    public function getDateSortie(): string
    {
        return $this->_dateSortie;
    }
    public function setDateSortie(string $dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }

    public function getDuree(): int
    {
        return $this->_duree;
    }
    public function setDuree(int $duree)
    {
        $this->_duree = $duree;
    }

    public function getRealisateur(): string
    {
        return $this->_realisateur->getPrenom() . " " . $this->_realisateur->getNom();
    }
    public function setRealisateur(Realisateur $realisateur)
    {
        $this->_realisateur = $realisateur;
    }

    public function getGenre(): string
    {
        return $this->_genre->getNomGenre();
    }
    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
    }

///////////////////////////////////////////////////////////////////////////
//Méthode pour ajouter un Casting
public function addCasting(Casting $casting)
{
    $this->_castings[] = $casting;
} 

}

?>