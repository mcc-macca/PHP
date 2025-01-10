<?php

require_once 'class.php';

$prodotti = [];

$patatine = new Mercato("Patatine", "Cibo", "3,50€");
$pane = new Mercato("Pan Bauletto", "Cibo", "1,20€");
$cocacola = new Mercato("Coca Cola", "Bevande Frizzanti", "1€");
$prodotti[] = $patatine->getData();
$prodotti[] = $pane->getData();
$prodotti[] = $cocacola->getData();

$sprite = new Mercato("Sprite", "Bevande Frizzanti", "2€");
$prodotti[] = $sprite->getData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
</head>
<body>
    <h1>prodotti</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Prezzo</th>
        </tr>
    
    <?php
    foreach ($prodotti as $prodotto) {
        print "
        <tr>
            <td>" . $prodotto['nome'] . "</td>
            <td>" . $prodotto['tipo'] . "</td>
            <td>" . $prodotto['prezzo'] . "</td>
        </tr>
        ";
    }
    ?>
    </table>
</body>
</html>