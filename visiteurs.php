<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-03
 * Time: 09:02
 * To change this template use File | Settings | File Templates.
 */

if (isset($_SERVER['HTTP_CLIENT_IP'])) {$real_ip_adress=$_SERVER['HTTP_CLIENT_IP'];}
else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {$real_ip_adress=$_SERVER['HTTP_X_FORWARDED_FOR'];}
else {$real_ip_adress=$_SERVER['REMOTE_ADDR'];}
$cip=$real_ip_adress;
$iptolocation='http://api.hostip.info/country.php?ip='.$cip;
$creatorlocation=file_get_contents($iptolocation);

$handle = fopen("countries.csv", "r");
$data = fgetcsv($handle, 50, ";");

$string = fopen("countries.txt", "r");
while(!feof($string))
{
    $addr = fgets($string);
    $affichage .= "<br>".$addr."</br>";
}
echo $affichage;

echo '<img src="image-07.jpg">';

if($_SERVER['HTTP_USER_AGENT'] === "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; InfoPath.3)" )
{
    echo "<script type='text/javascript'>alert('Really annoying pop-up!');</script>";
}
