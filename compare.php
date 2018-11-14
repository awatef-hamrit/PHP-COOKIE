<?php
function compare($num1, $num2){ 

    if ($num1 > $num2) {   

        echo "$num1 > $num2";

    } elseif ($num1 < $num2) {   

        echo "$num2 > $num1";

    } else {    

        echo "$num1 = $num2";

    }
}

compare(1,15);
