<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    // costruttore della classe Movie
    function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
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
$movie_1 = new Movie("Pulp Fiction", "thriller", 1994);
$movie_2 = new Movie("Inception", "crime", 2010);

$movie_1->director = "Quentin Tarantino";
$movie_2->director = "Christopher Nolan";

// stampo a schermo i valori delle proprietà delle due istanze
echo $movie_1->title . " è un film del " . $movie_1->year . ", scritto e diretto da " . $movie_1->director . ", genere " . $movie_1->genre . ". Sono passati " . $movie_1->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
echo "<br><br>";
echo $movie_2->title . " è un film del " . $movie_2->year . ", scritto e diretto da " . $movie_2->director . ", genere " . $movie_2->genre . ". Sono passati " . $movie_2->getAge() . " anni da quando è uscito per la prima volta nelle sale cinematografiche.";
