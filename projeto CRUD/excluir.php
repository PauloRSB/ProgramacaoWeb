<?php
$id = $_POST['id'];
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i:s');
$strcon = mysqli_connect('localhost','root','','banco') or die('erro ao conectar');
$squery = "DELETE FROM pessoa WHERE id='$id'";  
mysqli_query($strcon,$squery) or die ("erro cadastro");
mysqli_close($strcon);
header("refresh: 0; url=atuexclu.php");
?>