<?php
function syntax($x, $y, $z) {
    if ($x > $y) {
        echo $x;
    }
    elseif ($x == $y) {
        echo $z;
    }

    else {
        echo $y;
    }
    
    echo "<br>";
    echo "<br>";
    
    for ($i = 0 ; $i < $z ; $i++ ){
        echo $i;
        echo "<br>";
    }

    
    echo "<br>";
    
    
    while ($x < $y) {
        $x++;
        echo $x;
        echo "<br>";
    }

}

syntax(5, 6, 8);


?>
