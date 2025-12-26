<?php

class TriangleGenerator {
    
    
    public static function generateTriangle($altura){

  
        if ($altura < 0) {
            return "";
        }

        $resultado = "";

        
        for ($i = 1; $i <= $altura; $i++) {
            $resultado .= "<p>";


                for ($k = 0; $k < $altura - $i; $k++) {
                    $resultado .= "&nbsp;";
                }

            for ($j = 0; $j < (2 * $i -1); $j++) {
                $resultado .= "*";
            }

            $resultado .= "</p>";
        }

        return $resultado;
    }
}      