<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lista de Inscritos</title>
</head>
<body>
<?
$dbh=mysql_connect ("localhost", "abucampi_doador", "abub2006") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("abucampi_doadores");

$query = 'SELECT * FROM Doadores';
$result = mysql_query($query) or die('falhou: ' . mysql_error());

// Printing results in HTML
//echo '<table border="1"><tr><td><b>Nome</b></td>
    //<td>Email </td>';
echo "<code>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    //echo "\t<tr>\n";
    $punto=1;
    foreach ($line as $col_value) {
	if($punto==1){
	    echo '"'.$col_value.'" ';
	    $punto=2;
	}else
	    echo '&lt;'.$col_value.'&gt; ';
    }
    //echo "\t</tr>\n";
    echo ',';
}
//echo "</table>\n";
echo "</code>";
?>
</body>
</html>
