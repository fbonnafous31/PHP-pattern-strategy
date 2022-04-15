<?php

    namespace Duck;
    
    use Duck\Canard;

    class PrototypeCanard extends Canard {

        public function __construct() {
            $this->comportementVol    = new NepasVoler();
            $this->comportementCancan = new Cancan();
        }

        public function afficher() {
            echo "Je suis un prototype de canard";
        }

    }

?>