<?php
session_start();
$_SESSION['var1'] = "v1";
$_SESSION['var2'] = "v3";

// unset($_SESSION['var2']);


echo $_SESSION['var1'], "<br>";
echo $_SESSION['var2'], "<br>";

?>

<a href="9.session_destroy.php">destroy</a>