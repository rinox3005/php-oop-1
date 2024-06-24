<?php

require_once __DIR__ . "/Models/Movie.php";

// Utilizzo della classe Movie con gestione delle eccezioni
try {
    // Creazione delle istanze della classe 'Movie' con aggiunta di generi multipli
    $genres1 = ["Action", "Sci-Fi"];
    $movie1 = new Movie("Interstellar", "Christopher Nolan", 2010, $genres1, "English", 148);

    $genres2 = ["Drama", "Thriller"];
    $movie2 = new Movie("The Matrix", "The Wachowskis", 1999, $genres2, "English", 136);

    $genres3 = ["Comedy", "Family"];
    $movie3 = new Movie(
        "Home Alone",
        "Chris Columbus",
        1990,
        $genres3,
        "English",
        103
    );

    $genres4 = ["Adventure", "Fantasy"];
    $movie4 = new Movie(
        "The Lord of the Rings: The Fellowship of the Ring",
        "Peter Jackson",
        2001,
        $genres4,
        "English",
        178
    );

    $genres5 = ["Thriller", "Mystery"];
    $movie5 = new Movie("The Sixth Sense", "M. Night Shyamalan", 1999, $genres5, "English", 107);

    $genres6 = ["Action", "Adventure"];
    $movie6 = new Movie("Indiana Jones and the Raiders of the Lost Ark", "Steven Spielberg", 1981, $genres6, "English", 115);

    $genres7 = ["Animation", "Family"];
    $movie7 = new Movie(
        "Finding Nemo",
        "Andrew Stanton",
        2003,
        $genres7,
        "English",
        100
    );

    $genres8 = ["Crime", "Drama"];
    $movie8 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, $genres8, "English", 142);

    $genres9 = ["Sci-Fi", "Action"];
    $movie9 = new Movie("Blade Runner", "Ridley Scott", 1982, $genres9, "English", 117);

    $genres10 = ["Comedy", "Sci-Fi"];
    $movie10 = new Movie(
        "Back to the Future",
        "Robert Zemeckis",
        1985,
        $genres10,
        "English",
        116
    );

    // // Aggiungo un singolo genere al film
    // $movie1->addGenre('Crime');
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
    <!-- Custom Css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <h1>PHP OOP Movies</h1>
        <div class="container">
            <?php foreach ($movies as $movie) : ?>
                <div class="card">
                    <h3><?php echo $movie['name']; ?></h3>
                    <p>Director: <?php echo $movie['director']; ?></p>
                    <p>Year: <?php echo $movie['year']; ?></p>
                    <p>Genres: <?php echo implode(", ", $movie['genres']); ?></p>
                    <p>Original Language: <?php echo $movie['originalLanguage']; ?></p>
                    <p>Duration: <?php echo $movie['duration']; ?> minutes</p>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>