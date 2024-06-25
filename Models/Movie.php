<?php

require_once __DIR__ . "/Actor.php";
require_once __DIR__ . "/Genre.php";

// Definizione della classe 'Movie'
class Movie
{
    // Dichiarazione delle variabili d'istanza private
    private string $title;
    private string $director;
    private int $year;
    private array $actors;
    private string $originalLanguage;
    private int $duration;
    private array $genres;

    // Definizione del costruttore
    public function __construct(string $title, string $director, int $year, array $actors, string $originalLanguage, int $duration, array $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->actors = $actors;
        $this->originalLanguage = $originalLanguage;
        $this->duration = $duration;
        $this->genres = $genres;
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

    public function getActors()
    {
        return $this->actors;
    }

    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getGenres()
    {
        return $this->genres;
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
        if ($year < 1900) {
            throw new Exception('Year must be 1900 or later.');
        }
        $this->year = $year;
    }

    public function setActors(array $actors): void
    {
        $this->actors = $actors;
    }

    public function setOriginalLanguage(string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    public function setDuration(int $duration): void
    {
        if ($duration <= 0) {
            throw new Exception('Duration must be a positive number.');
        }
        $this->duration = $duration;
    }

    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }

    public function addActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }

    public function addGenre(string $genre): void
    {
        $this->genres[] = $genre;
    }

    // // Definizione di un metodo per ottenere le informazioni del film
    // public function getMovieInfo(): string
    // {
    //     $genresStr = implode(", ", $this->getGenres());
    //     return "Title: " . $this->getTitle() . "<br>" .
    //         "Director: " . $this->getDirector() . "<br>" .
    //         "Year: " . $this->getYear() . "<br>" .
    //         "Genres: " . $genresStr . "<br>" .
    //         "Original Language: " . $this->getOriginalLanguage() . "<br>" .
    //         "Duration: " . $this->getDuration() . " min";
    // }
}
