<?php

    $info = array();
    echo "<th></th>";
    for ($i = 1; $i <=10; $i++){
        echo "<th>";
        echo $i;
        echo "</th>";
    }
    for($x= 1; $x <= 10; $x++){
        echo "<tr>";
        echo "<th>";
        echo $x;
        echo "</th>";
        for ($y = 1; $y <=10; $y++){
            echo "<th>";
            $info[$x][$y] = $x*$y;
            echo $info[$x][$y];
            echo "</th>";
        }
        echo "</tr>";

    }
    
?>