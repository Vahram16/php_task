<?php

require_once "CheckCharacter.php";

$value = isset($_GET['value'])?$_GET['value']:null;

    $result = CheckCharacter::checkBracket($value);
    var_dump($result);


?>
<a href="index.html"> Back </a>