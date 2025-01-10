<?php

$_SESSION['nome'] = "Franco";
$_SESSION['cognome'] = "Rossi";

foreach ($_SESSION as $k => $v) {
    print $k . " => " . $v . "<br>";
}

print "ciao " . $_SESSION['nome'] . "!";

