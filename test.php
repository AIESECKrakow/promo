<?
require("config.php");
include("functions.php");
connection();
?>




<?php




$wynik = mysql_query("SELECT * FROM `pp_konkurencje` WHERE id='1'")
or die('Strona nie istnieje');

if(mysql_num_rows($wynik) > 0) {
while($o = mysql_fetch_assoc($wynik)) {


echo $o['desc'];
echo "<br>";




}
}



 $event_id = '2';
 $user_id = '1';
 $link = 'https://www.facebook.com/photo.php?fbid=710779022300590&set=gm.697837223570074&type=1&theater';
//wypisz_z_konkurencji($user_id, $event_id);
//zapisz_na_konkurencje($user_id, $event_id);
//potwierdz_udzial($user_id, $event_id, $link);

?>