<?php
$cars = ["lamborghini","Porsche","Toyota","BMW"];

array_push($cars,"Mercedes");
print_r($cars);

echo "<br>";

array_pop($cars);
print_r($cars);
echo "<br>";

$german_cars = ["BMW", "Porsche"];
$japanese_cars = ["Toyota", "Honda"];


$all_cars = array_merge($german_cars, $japanese_cars);

print_r($all_cars);

$cuts =array_slice($cars,1,2);
print_r($cuts);

$car_countries = ["Lamborghini" => "Italy","Porsche" => "Germany","Toyota" => "Japan"];
$brands = array_keys($car_countries);

print_r($brands);



?>