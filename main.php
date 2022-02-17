<?php

include './database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>spotify dischi</title>
</head>
<body>
    
    <div id="app">
        <header>
            <img src="./img/spotify-brands.svg" alt="spotify logo">
        </header>
        <div class="container">
            <div class="row">

                    <?php
                        foreach($db as $ndisk => $disk){
                            $poster = $disk['poster'];
                            $title = $disk['title'];
                            $author = $disk['author'];
                            $year = $disk['year'];
                            echo  
                            "<div class='card'>
                                <img src='$poster'>
                                <div class='title'>$title</div>
                                <div class='author'>$author</div>
                                <span class='year'>$year</span>
                            </div>";
                        }
                    ?>
            </div>
        </div>
    </div>


<script src="./js/script.js"></script>
</body>
</html>