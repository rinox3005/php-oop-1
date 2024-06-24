<?php
// Definizione della classe 'Movie'
class Movie
{
    // Dichiarazione delle variabili d'istanza private
    private string $title;
    private string $director;
    private int $year;
    private string $genre;
    private string $originalLanguage;
    private int $duration;

    // Definizione del costruttore
    public function __construct(string $title, string $director, int $year, string $genre, string $originalLanguage, int $duration)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->originalLanguage = $originalLanguage;
        $this->duration = $duration;
    }

    // Metodi getter per accedere alle variabili d'istanza
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    // Metodi setter per impostare le variabili d'istanza
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    public function setOriginalLanguage(string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }
}
