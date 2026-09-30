<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    name:
    <input type="text" name="name" id="">
    <br>
    password:
    <input type="text" name="pass" id="">
    <br>
    terms and conditions
    <input type="checkbox" name="terms" id="">
    <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    $name = $_GET["name"];
    $pass = $_GET["pass"];
    $terms = isset($_GET["terms"])?"agreed": "not agreed";
    
    echo "Welcome, $name. You have $terms to the terms and
conditions.";
}
?>