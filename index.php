<?php
class Movie {
    public $film;
    public $serietv;

    function __construct()
    {
        $this->film=['Pinocchio','Blade Runner 2049','Avengers','Star Wars','Control','Deadpool','X-men'];
        $this->serietv=['Arcane','Dexter','Loki','Vikings','Star Trek','Doctor Who','Lost'];
    }

    public function getRandom()
    {
        echo  $this->film[array_rand( $this->film)] ."<br>";
        echo  $this->serietv[array_rand( $this->serietv)] ."<br>";
    } 
}

$movie= new Movie;

echo $movie->getRandom();

?>

