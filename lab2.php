<?php

echo "<h1> biasics of a calcuolitor </h1>";

    function add($x, $y) {
        return $x + $y;
    }

     function subtract($x, $y) {
        return $x - $y;
    }

     function multiply($x, $y) {
        return $x * $y;
    }

     function divide($x, $y) {
        if ($y == 0) {
            throw new Exception("Division by zero error");
        }
        return $x / $y;
    }
}?>