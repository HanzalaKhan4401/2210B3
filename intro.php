<?php
echo  "<h3> Multidimensional index array </h3> <br>";

$car = [
    "category-1" => ["car1" => "City", "car2" => "Civic", "car3" => "Accord"],
    "category-2" => ["car1" => "Corolla", "car2" => "Supra", "car3" => "Prius"],
    "category-3" => ["car1" => "Civic", "car2" => "Supra", "car3" => "Accord"],
    
];

// foreach($car as $key => $val){
//     echo "<b> $key </b> <br>";
//     foreach($val as $k => $v){
//         echo "$k  =  $v <br>";
//     }
// }


foreach($car as $key => $val){
    echo"<b> $key </b><br>";
    foreach($val as $k => $v){
        echo"$k = $v <br>";
    }
} 

?>