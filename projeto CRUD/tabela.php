<?php


$strcon = mysqli_connect('localhost','root','','banco') or die('erro ao conectar');
$squery = sprintf("SELECT * FROM pessoa");  
mysqli_query($strcon,$squery) or die ("erro cadastro");
$dados = mysqli_query($strcon, $squery) or die(mysql_error());
$linha = mysqli_fetch_assoc($dados);


?>