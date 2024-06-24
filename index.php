<?php
// Definizione della classe 'Movie'
class Movie
{
    // Dichiarazione delle variabili d'istanza private
    private $title;
    private $director;
    private $year;
    private $genre;

    // Definizione del costruttore
    public function __construct($title, $director, $year, $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Metodi getter per accedere alle variabili d'istanza
    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    // Metodi setter per impostare le variabili d'istanza
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
}
