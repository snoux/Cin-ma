<?php

class Film
{
    private string $_titre;
    private string $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;

//Constructeur pour définir un Film//
    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur)
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addRealisateur($this);
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

///////////////////////////////////////////////////////////////////////////


}

?>