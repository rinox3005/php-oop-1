<?php
// Definizione della classe 'Movie'
class Movie
{
    // Dichiarazione delle variabili d'istanza private
    private string $title;
    private string $director;
    private int $year;
    private array $genres;
    private string $originalLanguage;
    private int $duration;

    // Definizione del costruttore
    public function __construct(string $title, string $director, int $year, array $genres, string $originalLanguage, int $duration)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
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

    public function getGenres(): array
    {
        return $this->genres;
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
        if ($year < 1900) {
            throw new Exception('Year must be 1900 or later.');
        }
        $this->year = $year;
    }

    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
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

    public function addGenre(string $genre): void
    {
        array_push($this->genres, $genre);
    }

    // Definizione di un metodo per ottenere le informazioni del film
    public function getMovieInfo(): string
    {
        $genresStr = implode(", ", $this->getGenres());
        return "Title: " . $this->getTitle() . "<br>" .
            "Director: " . $this->getDirector() . "<br>" .
            "Year: " . $this->getYear() . "<br>" .
            "Genres: " . $genresStr . "<br>" .
            "Original Language: " . $this->getOriginalLanguage() . "<br>" .
            "Duration: " . $this->getDuration() . " min";
    }
}
