<?php
$num = [1, 2, 3, 4, 5];

foreach($num as $n){
    if($n % 2 == 0){
        echo "$n is even\n";
    }else{
        echo "$n is odd\n";
    }
}
