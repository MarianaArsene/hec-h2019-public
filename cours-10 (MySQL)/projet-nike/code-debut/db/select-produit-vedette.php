<?php

$query = $db->query('SELECT * FROM products WHERE products.is_featured = 1 LIMIT 1');
$produit = $query->fetch(PDO::FETCH_OBJ);

?>