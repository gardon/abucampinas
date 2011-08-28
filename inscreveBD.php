<html>
<head><title>Inscrevendo</title>
<?
$rurl=$_POST["rurl"];
if($rurl){
  print "<script type=\"text/javascript\">
<!--
function delayer(){
    window.location = \"$rurl\"
}
//-->
</script>";
}
?>
</head>
<body <? if($rurl) print "onLoad=\"setTimeout('delayer()', 2000)\""?>>
<?
$dbh=mysql_connect ("localhost", "abucampi_treinam", "abub2006") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("abucampi_treinamento1s2009");

$campos=$_POST["campos"];
$mensagem="";
if($campos){
  $mensagem='INSERT INTO Inscricoes VALUES ("'.$_POST["Nome"].'", "'.$_POST["NomeCracha"].'", "'.$_POST["Telefone"].'", "'.$_POST["Email"].'", "'.$_POST["Endereco"].'", "'.$_POST["Curso"].'", "'.$_POST["Periodo"].'", "'.$_POST["PrecisaCarona"].'", "'.$_POST["PodeDarCarona"].'");';
  $result = mysql_query($mensagem) or die('Query failed: ' . mysql_error());
  }
  
  else print "Erro!!<br>";
  if($rurl)
    print "Redirecionando...<br>";

?>
<br>
<br>
</body>
</html>
