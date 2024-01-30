<?php
class Movie
{
    public $title;
    public $genres;
    public $year;
    public $director;

    // costruttore della classe Movie
    function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    // metodo per calcolare quanti anni sono passati dall'uscita del film
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }
}
// creo 2 istanze della classe Movie
$movie_1 = new Movie("Pulp Fiction", ["thriller", "giallo"], 1994);
$movie_2 = new Movie("Inception", ["azione", "crime"], 2010);

$movie_1->director = "Quentin Tarantino";
$movie_2->director = "Christopher Nolan";

// stampo a schermo i valori delle proprietà delle due istanze
echo $movie_1->title . " è un film del " . $movie_1->year . ", scritto e diretto da " . $movie_1->director . ", genere " . implode("/", $movie_1->genres) . ". Sono passati " . $movie_1->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
echo "<br><br>";
echo $movie_2->title . " è un film del " . $movie_2->year . ", scritto e diretto da " . $movie_2->director . ", genere " . implode("/", $movie_2->genres) . ". Sono passati " . $movie_2->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";

// creo un array di film 
$movies = [
    $movie_1, $movie_2
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="./css/style.css">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h1>Film da vedere:</h1>
                <ul class="list-unstyled d-flex">
                    <?php foreach ($movies as $movie) { ?>
                        <div class="movie-container me-4">
                            <li>
                                <?php
                                echo "<h3 class='text-center '>{$movie->title}</h3>";
                                echo "<b>Regista</b>: {$movie->director}";
                                echo "<br>";
                                echo "<b>Anno di uscita</b>: {$movie->year}";
                                echo "<br>";
                                echo "<b>Genere</b>: " . implode("/", $movie->genres);
                                echo "<br><br>";
                                echo $movie->title . " è un film del " . $movie->year . ", scritto e diretto da " . $movie->director . ", genere " . implode("/", $movie->genres) . ". Sono passati " . $movie->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
                                ?>
                            </li>
                        </div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>