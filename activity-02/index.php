<html>
    <body>
        <h1>Hello, from Eula Graciella Rodriguez!</h1>
</body>
</html>

<br>

<?php
    echo "Hello, World!";
?>

<br>
<br>

<?php
    $x = 20;
    $y = 4;
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $quotient = $x / $y;

    echo "The sum is $sum. <br>";
    echo "The difference is $difference. <br>";
    echo "The product is $product. <br>";
    echo "The quotient is $quotient. <br>";

    if($x % $y == 0){
        echo "$y is a factor of $x";
    } else {
        echo "$y is not a factor of $x";
    }
?>

<br>

<?php
    for ($i = 1; $i <= 10; $i++){
        echo "$i <br>";
    }
?>

<br>

<?php
    for ($i = 1; $i <= 100; $i++){
        if ($i % 3 == 0 || $i % 5 == 0){
            echo "$i <br>";
        }
    }
?>

<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    $products[1] = "Product D";
    var_dump($products);
?>

<br>
<br>

<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p){
        echo "$p <br>";
    }
?>

<br>
<br>

<?php
$products = array(
    array("name" => "Product A", "price" => 10.50, "stock" => 12),
    array("name" => "Product B", "price" => 5.60, "stock" => 7),
    array("name" => "Product C", "price" => 7.00, "stock" => 5)
);

foreach($products as $p){
    echo $p["name"] . " is " . $p["price"] . " pesos <br>";
}
?>