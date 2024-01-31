<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    // costruttore della classe Movie
    function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genres;
        $this->year = $_year;
    }

    // metodo per calcolare quanti anni sono passati dall'uscita del film
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }

    public function getGenresAsString()
    {
        // creo l'array vuoto che conterrà il nome dei generi dei film
        $genres = [];

        // riempio l'array con i nomi dei generi
        foreach ($this->genre as $genre) {
            array_push($genres, $genre->name);
        }

        // converto l'array in stringa separando i generi con /
        $genres_string = implode('/', $genres);

        // restituisco la stringa
        return $genres_string;
    }
}

// BONUS: Crea un'altra classe Genre da incapsulare nelle istanze dei Movie
class Genre
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}
// creo delle istanze della classe genre
$first_genre = new Genre('thriller');
$second_genre = new Genre('giallo');
$third_genre = new Genre('azione');
$fourth_genre = new Genre('crime');


// creo 2 istanze della classe Movie incapsulando istanze dei generi
$movie_1 = new Movie("Pulp Fiction", [$first_genre, $second_genre], 1994);
$movie_2 = new Movie("Inception", [$third_genre, $fourth_genre], 2010);

$movie_1->director = "Quentin Tarantino";
$movie_2->director = "Christopher Nolan";

// stampo a schermo i valori delle proprietà delle due istanze
echo $movie_1->title . " è un film del " . $movie_1->year . ", scritto e diretto da " . $movie_1->director . ", genere " . $movie_1->getGenresAsString() . ". Sono passati " . $movie_1->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
echo "<br><br>";
echo $movie_2->title . " è un film del " . $movie_2->year . ", scritto e diretto da " . $movie_2->director . ", genere " . $movie_2->getGenresAsString() . ". Sono passati " . $movie_2->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";

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
                                echo "<b>Genere</b>: " .  $movie->getGenresAsString();
                                echo "<br><br>";
                                echo $movie->title . " è un film del " . $movie->year . ", scritto e diretto da " . $movie->director . ", genere " .  $movie->getGenresAsString() . ". Sono passati " . $movie->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
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