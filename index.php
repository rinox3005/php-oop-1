<?php

require_once __DIR__ . "/Models/Movie.php";


// Utilizzo della classe Movie con gestione delle eccezioni
try {
    // Create Actor instances
    $actor1 = new Actor("Johnny", "Depp");
    $actor2 = new Actor("Leonardo", "DiCaprio");
    $actor3 = new Actor("Brad", "Pitt");
    $actor4 = new Actor("Morgan", "Freeman");
    $actor5 = new Actor("Tom", "Hanks");
    $actor6 = new Actor("Keanu", "Reeves");

    // Create Genre instances
    $genre1 = new Genre("Action");
    $genre2 = new Genre("Sci-Fi");
    $genre3 = new Genre("Crime");
    $genre4 = new Genre("Drama");
    $genre5 = new Genre("Adventure");
    $genre6 = new Genre("Romance");

    // Create Movie instances
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010, [$actor1, $actor2], "English", 148, [$genre1, $genre2]);
    $movie2 = new Movie("The Dark Knight", "Christopher Nolan", 2008, [$actor2, $actor3], "English", 152, [$genre1, $genre3, $genre4]);
    $movie3 = new Movie("Interstellar", "Christopher Nolan", 2014, [$actor2, $actor4], "English", 169, [$genre5, $genre4, $genre2]);
    $movie4 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, [$actor3, $actor5], "English", 154, [$genre3, $genre4]);
    $movie5 = new Movie("Fight Club", "David Fincher", 1999, [$actor3, $actor6], "English", 139, [$genre4]);
    $movie6 = new Movie("The Matrix", "The Wachowskis", 1999, [$actor6], "English", 136, [$genre1, $genre2]);
    $movie7 = new Movie("Forrest Gump", "Robert Zemeckis", 1994, [$actor5], "English", 142, [$genre4, $genre6]);
    $movie8 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, [$actor4], "English", 142, [$genre4]);
    $movie9 = new Movie("Titanic", "James Cameron", 1997, [$actor5], "English", 195, [$genre4, $genre6]);
    $movie10 = new Movie("The Godfather", "Francis Ford Coppola", 1972, [$actor3, $actor4], "English", 175, [$genre3, $genre4]);
}
// Gestisco l'errore
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movies</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <h1>PHP OOP Movies</h1>
        <div class="container">
            <?php foreach ($movies as $movie) : ?>
            <div class="card">
                <!-- <h4><?php echo $movie['id']; ?></h4> -->
                <h3><?php echo $movie['name']; ?></h3>
                <p>Director: <?php echo $movie['director']; ?></p>
                <p>Year: <?php echo $movie['year']; ?></p>
                <p>Genres: <?php echo implode(", ", array_map(function ($genre) {
                                    return $genre?->getName();
                                }, $movie['genres'] ?? [])); ?></p>
                <p>Original Language: <?php echo $movie['originalLanguage']; ?></p>
                <p>Duration: <?php echo $movie['duration']; ?> minutes</p>
                <p>Actors: <?php echo implode(", ", $movie['actors'] ?? []); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>