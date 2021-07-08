<?php
    class Movie {
        public $title;
        public $overview;
        public $original_lang;
        public $genre;
        public $duration;
        public $upload_date;
        
        function __construct($title, $overview, $original_lang, $genre, $duration){
            $this->title = $title;
            $this->overview = $overview;
            $this->original_lang = $original_lang;
            $this->genre = $genre;
            $this->duration = $duration;
        }

        function getDate() {
            return date("d-m-Y");
        }
    }
    
    $wonder_woman = new Movie("Wonder Woman 1984", "A botched store robbery places Wonder Woman in a global battle against a powerful and mysterious ancient force that puts her powers in jeopardy.", "English", " Fantasy, Action, Adventure", "2h 31m");
    $luca = new Movie("Luca", "Luca and his best friend Alberto experience an unforgettable summer on the Italian Riviera. But all the fun is threatened by a deeply-held secret: they are sea monsters from another world just below the water’s surface.", "Italian", " Animation, Comedy, Family, Fantasy", "1h 35m");
    $mortal_kombat = new Movie("Mortal Kombat", "Washed-up MMA fighter Cole Young, unaware of his heritage, and hunted by Emperor Shang Tsung's best warrior, Sub-Zero, seeks out and trains with Earth's greatest champions as he prepares to stand against the enemies of Outworld in a high stakes battle for the universe.", "English", "Action, Fantasy, Adventure", "1h 50m");
    $the_simpsons = new Movie("The Simpsons", "Set in Springfield, the average American town, the show focuses on the antics and everyday adventures of the Simpson family; Homer, Marge, Bart, Lisa and Maggie, as well as a virtual cast of thousands. Since the beginning, the series has been a pop culture icon, attracting hundreds of celebrities to guest star. The show has also made name for itself in its fearless satirical take on politics, media and American life in general.", "English", "Family, Animation, Comedy, Drama", "22m");
    $lucifer = new Movie("Lucifer", "Bored and unhappy as the Lord of Hell, Lucifer Morningstar abandoned his throne and retired to Los Angeles, where he has teamed up with LAPD detective Chloe Decker to take down criminals. But the longer he's away from the underworld, the greater the threat that the worst of humanity could escape.", "English", "Crime, Sci-Fi & Fantasy", "45m");
    $need_for_speed = new Movie("Need for Speed", "The film revolves around a local street-racer who partners with a rich and arrogant business associate, only to find himself framed by his colleague and sent to prison. After he gets out, he joins a New York-to-Los Angeles race to get revenge. But when the ex-partner learns of the scheme, he puts a massive bounty on the racer's head, forcing him to run a cross-country gauntlet of illegal racers in all manner of supercharged vehicles.", "English", "Action, Crime, Drama, Thriller", "2h 12m");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>PHP-OOP-1</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <h2><?= $wonder_woman->title ?></h2>
                <p><?= $wonder_woman->overview?></p>
                <small><i><?= $wonder_woman->original_lang ?></i></small><br>
                <small><b><i><?= $wonder_woman->genre ?></i></b></small><br>
                <small><i><?= $wonder_woman->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $wonder_woman->getDate() ?></i></b></small>
            </div>
            <div class="card">
                <h2><?= $luca->title ?></h2>
                <p><?= $luca->overview?></p>
                <small><i><?= $luca->original_lang ?></i></small><br>
                <small><b><i><?= $luca->genre ?></i></b></small><br>
                <small><i><?= $luca->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $luca->getDate() ?></i></b></small>
            </div>
            <div class="card">
                <h2><?= $mortal_kombat->title ?></h2>
                <p><?= $mortal_kombat->overview?></p>
                <small><i><?= $mortal_kombat->original_lang ?></i></small><br>
                <small><b><i><?= $mortal_kombat->genre ?></i></b></small><br>
                <small><i><?= $mortal_kombat->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $mortal_kombat->getDate() ?></i></b></small>
            </div>
            <div class="card">
                <h2><?= $the_simpsons->title ?></h2>
                <p><?= $the_simpsons->overview?></p>
                <small><i><?= $the_simpsons->original_lang ?></i></small><br>
                <small><b><i><?= $the_simpsons->genre ?></i></b></small><br>
                <small><i><?= $the_simpsons->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $the_simpsons->getDate() ?></i></b></small>
            </div>
            <div class="card">
                <h2><?= $lucifer->title ?></h2>
                <p><?= $lucifer->overview?></p>
                <small><i><?= $lucifer->original_lang ?></i></small><br>
                <small><b><i><?= $lucifer->genre ?></i></b></small><br>
                <small><i><?= $lucifer->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $lucifer->getDate() ?></i></b></small>
            </div>
            <div class="card">
                <h2><?= $need_for_speed->title ?></h2>
                <p><?= $need_for_speed->overview?></p>
                <small><i><?= $need_for_speed->original_lang ?></i></small><br>
                <small><b><i><?= $need_for_speed->genre ?></i></b></small><br>
                <small><i><?= $need_for_speed->duration ?></i></small><br>
                <small>Uploaded on: <b><i><?= $need_for_speed->getDate() ?></i></b></small>
            </div>
        </div>
    </body>
</html>