<?php
    class Quadatic {

        public function negate_b($b){
            $neg = -$b;
        }

        public function sqr_b($b){
            $b_sqr = $b * $b;
            return $b_sqr;
        }

        public function mult_ac($a, $c){
            $mult_ac = 4 * $a * $c;
        }

        public function subsqr($b_sqr, $mult_ac){
            $root = $b_sqr - $mult_ac;
        }
        
        public function sqrrt($root){
            sqrt($root);
        }

    }

?>