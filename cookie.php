<?php

require_once "formulaire.php";

$cookie_name = "user";
 $cookie_value = $_POST['nom'];
if(!empty($_POST['nom'])) {
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    echo "no cookie";
}


if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}


?>