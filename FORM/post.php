<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Invio nome e et&agrave;</h1>
    <form action="post.php" method="post">
        <input type="text" name="nome" placeholder="nome">
        <br>
        <input type="number" name="eta" placeholder="età">
        <br>
        <input type="submit" value="Invia dati">
    </form>
    <br><hr><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $eta = intval($_POST['eta']);

        if ($eta >= 18) {
            print "$nome &egrave; maggiorenne.";
        } else {
            print "$nome &egrave; minorenne";
        }
    }
    ?>
</body>
</html>