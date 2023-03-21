<?php

class Film
{
    private string $_titre;
    private string $_date;
    private int $_duree;
    private string $_realisateur;

//Constructeur pour définir un Film//
    public function __construct(string $titre, string $date, int $duree, string $realisateur)
    {
        $this->_titre = $titre;
        $this->_date = $date;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
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

    public function getDate(): string
    {
        return $this->_date;
    }
    public function setDate(string $date)
    {
        $this->_date = $date;
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
        return $this->_realisateur;
    }
    public function setRealisateur(string $realisateur)
    {
        $this->_realisateur = $realisateur;
    }

///////////////////////////////////////////////////////////////////////////


}

?>