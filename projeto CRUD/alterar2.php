<?php

$id2 = $_POST['id2'];
$nome = $_POST['nome'];
$datanasc = $_POST['data'];
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i:s');
$strcon = mysqli_connect('localhost','root','','banco') or die('erro ao conectar');
$squery = "UPDATE pessoa SET Nome='$nome', DataNasc='$datanasc', DataHora='$date' WHERE ID='$id2'";  
mysqli_query($strcon,$squery) or die ("erro cadastro");
mysqli_close($strcon);

header("refresh: 0; url=pesquisar.html");
?>