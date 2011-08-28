<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lista de Inscritos</title>
</head>
<body>
<?
$dbh=mysql_connect ("localhost", "abucampi_treinam", "abub2006") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("abucampi_treinamento1s2008");

$query = 'SELECT Email FROM Inscricoes';
$result = mysql_query($query) or die('falhou: ' . mysql_error());

// Printing results in HTML
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t";
    foreach ($line as $col_value) {
        echo "\t\t$col_value\n<br>";
    }
    echo "\t\n";
}


?>
</body>
</html>
