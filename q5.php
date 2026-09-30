<?php
$car_array = ["lamborghini","Porsche","Toyota","BMW"];

for ($i=0; $i < count($car_array)  ; $i++) { 
    echo "the car brand ".$car_array[$i]."<br>";
}
echo "<br>";
// echo "using for_each iteration.<br>";
foreach ($car_array as $cars) {
    echo "the car brand $cars.<br>";
}



?>
