<?php
class Movie {
    public $title;
    public $language;
    public $year;
    public $vote;
   
    function __construct($_title, $_language, $_year){
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
    }

    public function getMovieYear(){
          return $this->year;
    }

    public function setVote($myVote){
        return $this->vote = $myVote;
    }

} 

$film1 = new Movie("Home Alone", "english" , 1990);
$film2 = new Movie("A Beautiful Mind","english",2001);

var_dump($film1 , $film2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

</head>
<body>
    <h2><?= $film1->title; ?> <span> <?=   $film1->getMovieYear(); ?></span></h2>
    <h3>Original language: <?= $film1->language?></h3>
    <h4>Vote: <?= $film1->setVote(4.5); ?></h4>
    <hr>
    <h2><?= $film2->title; ?> <span> <?=   $film2->getMovieYear(); ?></span></h2>
    <h3>Original language: <?= $film2->language?></h3>
    <?php var_dump($film1)?>
</body>
</html>