<?php


require_once 'VisualNumber.php';

$a = new VisualNumber();
$value = isset($_GET['value']) ? $_GET['value'] : null;

$result = $a->printValue($value);
//if ($result == false) {
//    echo "number must be between 1 and 5";
//}
?>

<a href="index.html"> Back </a>
