<?php

require_once("./Model/functionSQL.php");
dbConnect();

$query="SELECT * FROM produit";
$produits=dbQuery($query);
if ($produits) {
  foreach($produits as $prod) {
    print_r($prod);
    echo $prod['nom'];
    echo '</br>';
  }
} 

?>