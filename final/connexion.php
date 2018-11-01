

<?php
try
{
	$bd = new PDO('mysql:charset=utf8mb4;host=localhost;dbname=enerbioflex','root','');
	$bd->query('set names utf8');
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
	die('<p> <h1>AIE AIE AIE!</h1> La connexion à échouée. <br/>Erreur : '.$e->getMessage().'</p>');
}


?>
