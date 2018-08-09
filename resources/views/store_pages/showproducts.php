<?php

require '../vendor/autoload.php';
require '../database/Connection.php';
require '../database/QuerryBuilder.php';

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$type = $_SESSION['type'];
$firmy = $query->selectTypeproducts($type);

foreach ($firmy as $result)
{
    echo "<div class=\"col-md-4\">
                    <h2>$result->name</h2>
                    <p>$result->definition</p>
                    <p>$$result->price</p>
                    <p><a class=\"btn btn-primary\" href=\"/item?alias={$result->alias}\" role=\"button\">Show Product &raquo;</a></p>
                    <button class=\"btn btn-secondary\" data-bind=\"click:  function (){addOneNewProductToList('$result->alias', '$result->name', $result->price, 1)}\">Add to cart &raquo;</button>
                </div>";
}



?>