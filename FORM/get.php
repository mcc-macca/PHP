<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Invio nome e et&agrave;</h1>
    <form action="get.php" method="get">
        <input type="text" name="nome" placeholder="nome">
        <br>
        <input type="number" name="eta" placeholder="età">
        <br>
        <input type="submit" value="Invia dati">
    </form>
    <br><hr><br>
    <?php
    $nome = $_GET['nominativo'] ?? 'NESSUN NOME INSERITO';
    $eta = $_GET['eta'] ?? 0;

    print $nome . " ha " . $eta . "anni";
    ?>
</body>
</html>