<?php

    namespace Duck;

    abstract class Canard {
     
        protected ComportementVol    $comportementVol;
        protected ComportementCancan $comportementCancan;

        public function __construct($comportementVol, $comportementCancan) {
            $this->comportementVol = $comportementVol;
            $this->comportementCancan = $comportementCancan;
        }

        public abstract function afficher();

        public function effectuerVol() {
            return $this->comportementVol->voler();
        }

        public function effectuerCancan() {
            return $this->comportementCancan->cancaner();
        }

        public function nager() {
            echo "Tous les canards flottent, même les leurres !";
        }

    }

?>