

<?php

require 'veta.php';
echo '<title>Lorem Ipsum</title>'
 . '<meta charset="UTF-8">' 
 .  '<link rel="stylesheet" href="style.css">'.'<div class="main">'
 . '<div class="back">' 
        ;
echo '<div class="p">Lorem Ipsum</div>';
$pocetVet = 50;
$delkaVet = 20;
for ($i = 1; $i < $pocetVet; $i++) {
    $veta = new veta($delkaVet);
}

echo '</div>'.'</div>';