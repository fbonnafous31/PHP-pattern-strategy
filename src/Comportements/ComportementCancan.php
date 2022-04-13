<?php

    namespace Duck;

    interface ComportementCancan {
        public function cancaner();
    }

    class Coincoin implements ComportementCancan {
        public function cancaner() {
            echo "Coincoin";
        }
    }

?>