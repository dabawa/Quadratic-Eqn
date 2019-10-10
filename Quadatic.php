<?php
    class Quadatic {

        public function negate_b($b){
            $neg = -$b;
            return $neg;
        }

        public function sqr_b($b){
            $b_sqr = $b * $b;
            return $b_sqr;
        }

        public function mult_ac($a, $c){
            $mult_ac = 4 * $a * $c;
            return $mult_ac;
        }

        public function subtrsqr($b_sqr, $mult_ac){
            $root = $b_sqr - $mult_ac;
            return $root;
        }
        
        public function sqrrt($root){
            $sqrrt = sqrt($root);
            return $sqrrt;
        }

    }

?>