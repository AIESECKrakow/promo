<?


$ulotk = mysql_query("SELECT * FROM `pp_konkurencje` WHERE type='wyklady' GROUP BY date ORDER BY date DESC")
or die('Strona nie istnieje');
if(mysql_num_rows($ulotk) > 0) {
while($u = mysql_fetch_assoc($ulotk)) {


$data = $u['date'];


echo "<table class=\"dzien\">";




echo "<tr><td class=\"data\">".$data." <span class=\"dzienk\">".$dzien."</span></td></tr>";

 $ucze = mysql_query("SELECT * FROM `pp_konkurencje` WHERE date='$data' AND type='wyklady' GROUP BY unibersity")
or die('Strona nie istnieje');
if(mysql_num_rows($ucze) > 0) {
while($ucz = mysql_fetch_assoc($ucze)) {
$univ = $ucz['unibersity'];
 echo "<tr><td class=\"univ\">".$univ."</td></tr>";


  $godzin = mysql_query("SELECT * FROM `pp_konkurencje` WHERE date='$data' AND type='wyklady' AND unibersity='$univ'")
or die('Strona nie istnieje');
if(mysql_num_rows($godzin) > 0) {
while($ti = mysql_fetch_assoc($godzin)) {
$time = $ti['time'];
$ev_id = $ti['id'];






  $czhu = mysql_query("SELECT * FROM `pp_user_dyscypline` WHERE event_id='$ev_id'")
or die('Strona nie istnieje');
if(mysql_num_rows($czhu) > 0) {




      echo "<tr><td class=\"godzina\">".$time."<span id=\"".$ev_id."\"></span>";




  $ulo = 0;

while($czc = mysql_fetch_assoc($czhu)) {
$users = $czc['user_id'];
$confir = $czc['confirmation'];

  $userz = mysql_query("SELECT * FROM `pp_users` WHERE id='$users'")
or die('Strona nie istnieje');
if(mysql_num_rows($userz) > 0) {
while($uss = mysql_fetch_assoc($userz)) {

$gp_name2 = $uss['gp_name'];

if (empty($uss['gp_name'])){
$gp_name2 = $uss['mail'];
}


if ($gp_name == $uss['gp_name']) {

 if (empty($confir)) { echo "<span id=\"".$ev_id."u\"><a href=\"#\" class=\"podpowiedz\"><img src=\"theme/useruc.png\"><span>".$gp_name2."</span></a></span>"; }  else {

 echo "<span id=\"".$ev_id."u\"><a href=\"".$confir."\" target=\"_blank\" class=\"podpowiedz\"><img src=\"theme/useru.png\"><span>".$gp_name2."</span></a></span>";
 }




} else {

 if (empty($confir)) { echo "<a href=\"#\" class=\"podpowiedz\"><img src=\"theme/userc.png\"><span>".$gp_name2."</span></a>"; }  else {

 echo "<a href=\"".$confir."\" target=\"_blank\" class=\"podpowiedz\"><img src=\"theme/user.png\"><span>".$gp_name2."</span></a>";
 }
}


   $ulo++;

     }

}

}

if ($ulo < 10)  {

echo"<a href='#' onclick=\"window.open('zapisz.php?user_id=".$user_id."&event_id=".$ev_id."', '_blank', 'HEIGHT=550,resizable=yes,scrollbars=yes,WIDTH=650');return false;\"><img src=\"theme/plus.png\"></a></td></tr>";  }

}  else {

 echo "<tr><td class=\"godzina\">".$time." <span id=\"".$ev_id."\"></span><a href='#' onclick=\"window.open('zapisz.php?user_id=".$user_id."&event_id=".$ev_id."', '_blank', 'HEIGHT=550,resizable=yes,scrollbars=yes,WIDTH=650');return false;\"><img src=\"theme/plus.png\"></a></td></tr>";
}





}}



}}




echo "</table>";
}
}




 echo "<br class=\"clear\">";



?>


