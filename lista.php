<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lista de Inscritos</title>
</head>
<body>
<?
$dbh=mysql_connect ("localhost", "abucampi_treinam", "abub2006") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("abucampi_treinamento1s2009");

$query = 'SELECT * FROM Inscricoes';
$result = mysql_query($query) or die('falhou: ' . mysql_error());

// Printing results in HTML
echo '<table border="1"><tr><td><b>Nome</b></td><td><b>Nome p/ Crachá</b></td><td><b>Telefone</b></td><td><b>E-mail</b></td><td><b>Endereço</b></td><td><b>Curso</b></td><td><b>Período</b></td><td><b>PrecisaCarona</b></td><td><b>PodeDarCarona</b></td></tr>';
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

?>
</body>
</html>
