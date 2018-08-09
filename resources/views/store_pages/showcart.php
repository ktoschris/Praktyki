<?php

require '../vendor/autoload.php';


$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$alias = $_GET['alias'];
//dd($alias);
$product = $query->selectProduct($alias);

foreach ($product as $result) {
    $ar = array($alias);
    $ar = json_encode($ar);
    echo $ar;
    echo "          <h2>$result->name</h2>
                    <p>$result->definition</p>
                    <p>$$result->price</p>
                    <p>In stock: $result->in_warehouse</p>";

}
?>