<?php

    use Duck\PropultionAReaction;
    use Duck\PrototypeCanard;
    require_once ('src/autoload.php'); 

    $canard = new PrototypeCanard();
    $canard->afficher();     
    echo "<br>";
    $canard->effectuerVol();
    $canard->setComportementVol(new PropultionAReaction);
    echo "<br>";
    $canard->effectuerVol();
    
?>