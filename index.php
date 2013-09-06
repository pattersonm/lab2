<html><head><meta charset="UTF-8"></head>
<body><h1>You rock!</h1>
<p>Welcome to Maxime Patterson's Fabulous Website!</p>
<p><a href="//localhost/lab1b.php">Bonjour</a>
<p><a href="//localhost/lab1c.php">Navigateur utilisé</a>
<p><?php echo date("d-m-Y"); ?></p>
<p><?php include("texte.txt"); ?></p>
<p><?php echo date("d/m/Y à H\hi", filemtime("index.php") ); ?></p>
<p><?php echo $_SERVER["REMOTE_ADDR"]; ?></p>
<p><?php
	if($_SERVER['HTTP_USER_AGENT'] === "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; InfoPath.3)" )
	{
		print "CHANGE DE BROWSER!!!!!!!!!!!!";
	}
?></p>
<p><?php
	$string = fopen("adresse.txt", "r");
	while(!feof($string))
	{
		$addr = fgets($string);
		$affichage .= "<a href=".$addr.">$addr</a>";
	}
	echo $affichage;
?>
</body></html>

