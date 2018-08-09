<html>
<body>
hehehe
</body>
</html>

<?php
require '../vendor/autoload.php';
require '../database/Connection.php';
require '../database/QuerryBuilder.php';

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$alias = $_POST;
var_dump($alias);
/*dd($alias);

$product = $query->selectProduct($alias);

foreach ($product as $result)
{
    $ar = array($alias);
    $ar = json_encode($ar);
    echo $ar;
    echo "<div class=\"col-md-4\">
                    <h2 class='nazwa_produktu'>$result->name</h2>
                    <p>$result->definition</p>
                    <p>$$result->price</p>
                    <p>In stock: $result->in_warehouse</p>
                    <input type=\"number\" id=\"product_qt\" name=\"product_qt\" data-bind=\"textInput: newProductQt\">
                   <button class=\"btn btn-secondary\" data-bind=\"click:  function(){addNewProductToList('$result->alias','$result->name', $result->price, 1)}\">Add to cart &raquo;</button>
                    </form>
                    
                </div> 
                <script>var obj=$ar;</script>";

}
// <form data-bind='submit: Submit'>
//                        <p>Amount: <input data-bind='value: Amount' /></p>

*/
?>