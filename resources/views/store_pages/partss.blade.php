<?php

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$firmy = $query->selectAllproducts();

foreach ($firmy as $result)
{
    echo "<div class=\"col-md-4\">
                    <h2>Oil filter</h2>
                    <p>Super Duper Racing Oil Filter V12/rr2 </p>
                    <p>$88.69</p>
                    <p><a class=\"btn btn-secondary\" href=\"/main\" role=\"button\">Add to cart &raquo;</a></p>
                </div>";
}



?>

