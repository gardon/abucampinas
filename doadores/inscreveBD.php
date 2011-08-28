<html>
<head><title>Inscrevendo...</title>
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
<body <? if($rurl) print "onLoad=\"setTimeout('delayer()', 10000)\""?>>
<?
$dbh=mysql_connect ("localhost", "abucampi_doador", "abub2006") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("abucampi_doadores");

$campos=$_POST["campos"];
$mensagem="";
$e_mail="";

if($campos){
  $mensagem='INSERT INTO Doadores ';
  $fields='(';
  $values='VALUES (';
  $count=0;
  foreach ( $campos as $valor ) {
	if($count==0){
		$fields=$fields.$valor;
		$values=$values.'"'.$_POST[$valor].'"';
		$e_mail .= $valor.': '.$_POST[$valor]."\r\n";
		$count++;
	}else{
		$fields=$fields.','.$valor;
		$values=$values.',"'.$_POST[$valor].'"';
		$e_mail .= $valor.': '.$_POST[$valor]."\r\n";
	}
  }
  $fields=$fields.") ";
  $values=$values.") ";
  $mensagem=$mensagem.$fields.$values;
  /*$mensagem='INSERT INTO Inscricoes VALUES ("'.$_POST["Nome"].'", "'.$_POST["NomeCracha"].'", "'.$_POST["Telefone"].'", "'.$_POST["Email"].'", "'.$_POST["Endereco"].'", "'.$_POST["Curso"].'", "'.$_POST["Periodo"].'", "'.$_POST["PrecisaCarona"].'", "'.$_POST["PodeDarCarona"].'");';*/
  $result = mysql_query($mensagem) or die('Query failed: ' . mysql_error());
  $headers = 'From: ABU Campinas <contato@abucampinas.org>' . "\r\n" .
    'Reply-To: contato@abucampinas.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/plain; charset=utf-8';

  $e_mail = "Olá, ".$_POST["Nome"]."\r\n\r\nSeu cadastro foi realizado com sucesso!\r\n" .
		"À seguir estão os dados que você preencheu no cadastro. Se houver qualquer problema, por favor entre em contato.\r\n\r\n" .
		$e_mail . "\r\n\r\n" .
		"À partir de agora, você deve receber todo mês um e-mail com resumos das atividades, relatórios, testemunhos, a Agenda da ABU Campinas, entre outros.\r\n\r\n" .
		"Para cancelar esse cadastro responda este e-mail com o assunto Descadastrar\r\n\r\n" .
		"Obrigado mais uma vez pelo apoio e ajuda, estamos à disposição para quaisquer esclarecimentos!\r\n\r\n" .
		"Deus te abençoe!\r\n" .
		"Na Paz de Cristo\r\n" .
		"ABU Campinas";

  $e_mail = wordwrap($e_mail, 80);
  mail( $_POST["Nome"].'<'.$_POST["Email"].'>','Confirmação de cadastro de contribuidores da ABU Campinas',$e_mail,$headers);
  
  }
  
  else print "Erro!!<br>";
  if($rurl)
    print "Redirecionando...<br>";

?>
<br>
<br>
</body>
</html>
