<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "INSERT INTO utenti (utente, nome, cognome, data_nascita, indirizzo) VALUES (:utente, :nome, :cognome, :data_nascita, :indirizzo)";
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':utente' => $_POST['utente'],
            ':nome' => $_POST['nome'],
            ':cognome' => $_POST['cognome'],
            ':data_nascita' => $_POST['data_di_nascita'],
            ':indirizzo' => $_POST['indirizzo']
        ]);
    } catch (PDOException $e) {
        echo 'ERRORE! ' .$e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestione utenti</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>immetti i dati dell'utente</legend>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>utente</td>
                    <td><input type="text" name="utente"></td>
                </tr>
                <tr>
                    <td>nome</td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>cognome</td>
                    <td><input type="text" name="cognome"></td>
                </tr>
                <tr>
                    <td>data di nascita</td>
                    <td><input type="text" name="data_di_nascita"></td>
                </tr>
                <tr>
                    <td>indirizzo</td>
                    <td><input type="text" name="indirizzo"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="aggiungi utente">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <h2>visualizza utenti</h2>
    <table border="1">
        <tr>
            <th>id</th>
            <th>utente</th>
            <th>nome</th>
            <th>cognome</th>
            <th>data di nascita</th>
            <th>indirizzo</th>
            <th>azioni</th>
        </tr>
        <?php 
        $query = "SELECT * FROM utenti";
        $stmt = $pdo->query($query);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) : ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['utente']?></td>
                <td><?=$row['nome']?></td>
                <td><?=$row['cognome']?></td>
                <td><?=$row['data_nascita']?></td>
                <td><?=$row['indirizzo']?></td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>