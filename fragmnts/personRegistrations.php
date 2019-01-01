<?php
require_once '../Model/staffEntry.php';


$filename = '../Teams/person.txt';

$entries = explode(";\n", file_get_contents($filename));
for ($i = count($entries) - 1; $i >= 0; $i--) {
    $entry = unserialize($entries[$i]);
    if($entry instanceof staffEntry) {
        echo "
   <tr>
    <td>" .$entry->getUserNamn() ."</td>        
  </tr>";
    }
}
?>