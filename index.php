<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

define('MAX', 50);
define('MIN', 1);

$img = rand(MAX, MIN);

for ($i=0; $i <= $img; $i+= 1) { ?>
   <img src="https://static.posters.cz/image/1300/obrazy-na-platne/mimoni-ja-padouch-minion-wave-i34166.jpg" alt="mimon" width=90> <?php
}

?>

</body>
</html>