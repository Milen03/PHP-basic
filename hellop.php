<?php
 $name = 'Mile';
 if ($name) {
     echo "Hello, $name!";
 } else {
     echo "Hello, World!";
 }
 echo "\n";

 $num = [1, 2, 3, 4, 5];

//  foreach($num as $n){
//     echo "$n\n";

//      switch($n){
//     case 1:
//         echo "One\n";
//         break;
//     case 2:
//         echo "Two\n";
//         break;
//     case 3:
//         echo "Three\n";
//         break;
//     case 4:
//         echo "Four\n";
//         break;
//     case 5:
//         echo "Five\n";
//         break;
//     default:
//         echo "Unknown\n";
// }
//  }

foreach($num as $n){
    if($n % 2 == 0){
        echo "$n is even\n";
    }else{
        echo "$n is odd\n";  
    }
}


 ?>