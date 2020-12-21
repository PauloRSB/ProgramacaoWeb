<?php
$nome = $_POST['nome'];
$datanasc = $_POST['data'];
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i:s');
$strcon = mysqli_connect('localhost','root','','banco') or die('erro ao conectar');
$squery = "insert into pessoa (Nome,DataNasc,DataHora) values ('$nome','$datanasc','$date')";  
mysqli_query($strcon,$squery) or die ("erro cadastro");
mysqli_close($strcon);

/*$datahora = getdate();
print_r($datahora);

$d = $datahora[mday];
$m = $datahora[mon];
$a = $datahora[year];
$min = $datahora[minutes];
$h = $datahora[hours];

date_date_set (DateTime $data, int $y, int $m, int $d) : DateTime*/



header("refresh: 0; url=index.html");
?>