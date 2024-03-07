<?php
class Movie {
    public $title;
    public $language;
    public $year;
    
    function __construct($_title, $_language, $_year){
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
    }

} 

$film1 = new Movie("Home Alone", "en" , 1990);
$film2 = new Movie("A Beautiful Mind","en",2001);

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
  
</body>
</html>