<?php

    namespace Duck;
    
    use Duck\Canard;

    class Colvert extends Canard {

        public function __construct() {
            $this->comportementVol = new VolerAvecDesAiles();
            $this->comportementCancan = new Cancan();
        }

        public function afficher() {
            echo "Je suis un vrai colvert";
        }

    }

?>