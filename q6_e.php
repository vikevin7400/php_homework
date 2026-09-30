<?php
$car2 = "     Toyota Fortuner is a popular SUV.     ";
echo "Length: " . strlen($car2) . "<br>";

echo "Lowercase: " . strtolower($car2) . "<br>";

echo "Uppercase: " . strtoupper($car2) . "<br>";


echo "After trim: " . trim($car2) . "<br>";


echo "Substring: " . substr(trim($car2), 0, 8) . "<br>";
?>