<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fuck doing you job broo!!</title>
</head>
<body>
<h1>Northwind Categories</h1>
<ul>
<?php
    // my name lisa i have problem i don't have a money can i got 500 truemoney//
    $mysqli = new mysqli('db403-mysql', 'root', 'P@ssw0rd', 'northwind');        $sql = 'select * from categories';
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()) {
         echo '<li>'.$row['CategoryName'].'</li>';
}
    php > // commend
    php > $boolen1 = true;
    php > echo $boolen1;
    1
    php > %boolean2 = false;
    php > echo $boolean2;
    php > 
?>
</ul>
</body>
</html>