<?php
        echo "<br> Olá, mundo! <br>";

        $repetir = true;
        $vezes = 10;
        $contador = 1;

        while ($repetir == true) {
            echo "Estou repetindo <br>";
            if ($contador == $vezes) {
                $repetir = false;
               // break;
            }

            $contador++;
        }
?>