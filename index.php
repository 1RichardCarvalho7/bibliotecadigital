<?php

session_start();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

exit;

session_start();

if (!isset($_SESSION['usuario'])) {

    header("Location: login.php");

} else {

    header("Location: biblioteca.php");
}

exit;

?>