<?php

    use Duck\Coincoin;
    use Duck\Colvert;
    require_once ('src/autoload.php'); 

    $canard = new Colvert();
    $canard->afficher();     
    echo "<br>";
    $canard->effectuerVol();
    echo "<br>";
    $canard->effectuerCancan();
    $canard->setComportementCancan(new Coincoin);
    echo "<br>";
    $canard->effectuerCancan();
 
?>