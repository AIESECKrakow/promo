<?
require("config.php");
include("functions.php");
connection();
?>
<html>
<head><title>Promo Platform</title>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<link href="theme/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php

$link = $_POST["confirm"];
$status = $_GET["status"];
$event_id = $_GET["event_id"];
$user_id = $_GET["user_id"];


$wynik = mysql_query("SELECT * FROM `pp_konkurencje` WHERE id='$event_id'")
or die('Strona nie istnieje');
if(mysql_num_rows($wynik) > 0) {
while($o = mysql_fetch_assoc($wynik)) {
echo "<div class=\"box\"><div class=\"box_header\">Opis aktywności</div><div class=\"box_content\">".$o['desc']."</div></div>";

echo "<br><div class=\"box\"><div class=\"box_header\">Promowane programy</div><div class=\"box_content\">";
if ($o['gt'] == 1) {
echo "<img src=\"theme/gt.png\">";
}
if ($o['gc'] == 1) {
echo "<img src=\"theme/gc.png\">";
}
if ($o['tmp'] == 1) {
echo "<img src=\"theme/tmp.png\">";
}
if ($o['dk'] == 1) {
echo "<img src=\"theme/dk.png\">";
}
echo "</div></div>";



echo "<br>";
}}

$zap = mysql_query("SELECT * FROM `pp_user_dyscypline` WHERE user_id='$user_id' AND event_id='$event_id' ")
or die('Strona nie istnieje');
if(mysql_num_rows($zap) > 0) {


if($status == 'del') {
wypisz_z_konkurencji($user_id, $event_id);
} else {

echo "<li class=\"wypisz\"><a href=\"zapisz.php?user_id=".$user_id."&event_id=".$event_id."&status=del\">wypisz</a></li>";

while($zz = mysql_fetch_assoc($zap)) {
$gccous = $zz['confirmation'];   }

if (!empty($gccous)) {
 echo "<br><li class=\"zapisz\">Twój udział w aktywności jest już potwierdzony</li>";
}  else {

if (empty($_POST["confirm"])) {
echo "<br><form action=\"zapisz.php?user_id=".$user_id."&event_id=".$event_id."&status=con\" method=\"post\">
<div class=\"box\"><div class=\"box_header\">Potwierdz udział w aktywności</div><div class=\"box_content\"><center>Dodaj link do zdjęcia z krk na dziko.<br><br>Za zdjęcie naliczane jest dodatkowe 0.5pkt<br> <br><input type=\"text\" name=\"confirm\"><br>
<input type=\"submit\" value=\"Zapisz\"></center></div></div>

</form>"; }   }




}


} else {


 if ($status == 'add') {
zapisz_na_konkurencje($user_id, $event_id);
} else {

echo "<li class=\"zapisz\"><a href=\"zapisz.php?user_id=".$user_id."&event_id=".$event_id."&status=add\">zapisz</a></li>";

}}

if($status == 'con'){
potwierdz_udzial($user_id, $event_id, $link);
}




?>  </body></html>