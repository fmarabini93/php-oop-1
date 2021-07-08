<?php
    include 'db/database.php';
    class Movie {
        public $title;
        public $overview;
        public $original_lang;
        public $genre;
        public $duration;
        public $upload_date;
        
        function __construct($title, $overview, $original_lang, $genre, $duration, $upload_date = ""){
            $this->title = $title;
            $this->overview = $overview;
            $this->original_lang = $original_lang;
            $this->genre = $genre;
            $this->duration = $duration;
            if ($upload_date <> "") {
                $this->upload_date = $upload_date;
            }
            else {
                $this->upload_date = $this->getDate();
            }
        }

        function getDate() {
            return date("d-m-Y");
        }
    }
    
    $wonder_woman = new Movie($films[0]["title"], $films[0]["overview"], $films[0]["original_lang"], $films[0]["genre"], $films[0]["duration"], "09-12-2001");
    $luca = new Movie($films[1]["title"], $films[1]["overview"], $films[1]["original_lang"], $films[1]["genre"], $films[1]["duration"], "09-08-2018");
    $mortal_kombat = new Movie($films[2]["title"], $films[2]["overview"], $films[2]["original_lang"], $films[2]["genre"], $films[2]["duration"]);
    $the_simpsons = new Movie($films[3]["title"], $films[3]["overview"], $films[3]["original_lang"], $films[3]["genre"], $films[3]["duration"], "12-07-2004");
    $lucifer = new Movie($films[4]["title"], $films[4]["overview"], $films[4]["original_lang"], $films[4]["genre"], $films[4]["duration"]);
    $need_for_speed = new Movie($films[5]["title"], $films[5]["overview"], $films[5]["original_lang"], $films[5]["genre"], $films[5]["duration"], "01-05-2013");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="style/style.css">
        <title>PHP-OOP-1</title>
    </head>
    <body>
        <div class="container">
            <div class="card" style="background-image: url('img/0.jpg');">
                <div class="layover hidden">
                    <h2><?= $wonder_woman->title ?></h2>
                    <p><?= $wonder_woman->overview?></p>
                    <small><i><?= $wonder_woman->original_lang ?></i></small><br>
                    <small><b><i><?= $wonder_woman->genre ?></i></b></small><br>
                    <small><i><?= $wonder_woman->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $wonder_woman->upload_date ?></i></b></small>
                </div>
            </div>
            <div class="card" style="background-image: url('img/1.jpg');">
                <div class="layover hidden">
                    <h2><?= $luca->title ?></h2>
                    <p><?= $luca->overview?></p>
                    <small><i><?= $luca->original_lang ?></i></small><br>
                    <small><b><i><?= $luca->genre ?></i></b></small><br>
                    <small><i><?= $luca->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $luca->upload_date ?></i></b></small>
                </div>
            </div>
            <div class="card" style="background-image: url('img/2.jpg');">
                <div class="layover hidden">
                    <h2><?= $mortal_kombat->title ?></h2>
                    <p><?= $mortal_kombat->overview?></p>
                    <small><i><?= $mortal_kombat->original_lang ?></i></small><br>
                    <small><b><i><?= $mortal_kombat->genre ?></i></b></small><br>
                    <small><i><?= $mortal_kombat->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $mortal_kombat->upload_date ?></i></b></small>
                </div>
            </div>
            <div class="card" style="background-image: url('img/3.jpg');">
                <div class="layover hidden">
                    <h2><?= $the_simpsons->title ?></h2>
                    <p><?= $the_simpsons->overview?></p>
                    <small><i><?= $the_simpsons->original_lang ?></i></small><br>
                    <small><b><i><?= $the_simpsons->genre ?></i></b></small><br>
                    <small><i><?= $the_simpsons->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $the_simpsons->upload_date ?></i></b></small>
                </div>
            </div>
            <div class="card" style="background-image: url('img/4.jpg');">
                <div class="layover hidden">
                    <h2><?= $lucifer->title ?></h2>
                    <p><?= $lucifer->overview?></p>
                    <small><i><?= $lucifer->original_lang ?></i></small><br>
                    <small><b><i><?= $lucifer->genre ?></i></b></small><br>
                    <small><i><?= $lucifer->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $lucifer->upload_date ?></i></b></small>
                </div>
            </div>
            <div class="card" style="background-image: url('img/5.jpg');">
                <div class="layover hidden">
                    <h2><?= $need_for_speed->title ?></h2>
                    <p><?= $need_for_speed->overview?></p>
                    <small><i><?= $need_for_speed->original_lang ?></i></small><br>
                    <small><b><i><?= $need_for_speed->genre ?></i></b></small><br>
                    <small><i><?= $need_for_speed->duration ?></i></small><br>
                    <small>Uploaded on: <b><i><?= $need_for_speed->upload_date ?></i></b></small>
                </div>
            </div>
        </div>
    </body>
</html>