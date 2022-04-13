<?php

    use Duck\Colvert;
    require_once ('src/Canards/Canard.php');
    require_once ('src/Canards/Colvert.php');
    require_once ('src/Comportements/ComportementVol.php');
    require_once ('src/Comportements/Voler/VolerAvecDesAiles.php');
    require_once ('src/Comportements/ComportementCancan.php');
    require_once ('src/Comportements/EmettreSon/Cancan.php');

    $canard = new Colvert();
    $canard->effectuerVol();
    echo '<br>';
    $canard->effectuerCancan();
    
?>