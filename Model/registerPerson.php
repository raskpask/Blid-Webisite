<?php
require_once 'staffEntry.php';


$filename = '../Teams/person.txt';
$entry = new staffEntry($_POST['Name']);
file_put_contents($filename, serialize($entry) . ";\n", FILE_APPEND);


include '../links/signup.php';