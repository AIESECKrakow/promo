<?php
 $i = 0;
$ranki = mysql_query("SELECT * FROM `pp_users`")
or die('Strona nie istnieje');
if(mysql_num_rows($ranki) > 0) {
while($ra = mysql_fetch_assoc($ranki)) {
$user_id2 = $ra['id'];
$goname_id2 = $ra['gp_name'];


if (empty($ra['gp_name'])) {

$goname_id2 = $ra['mail'];

}

 $u = 0;
 $ull = 0;
 $wyk = 0;
  $eve = 0;
 $pla = 0;
 $ine = 0;
  $in = 0;

$userkoi = mysql_query("SELECT * FROM `pp_users` WHERE id='$user_id2'")
or die('Strona nie istnieje');
if(mysql_num_rows($userkoi) > 0) {
while($uki = mysql_fetch_assoc($userkoi)) {
$in = $uki['inne'];

}}


$userko = mysql_query("SELECT * FROM `pp_user_dyscypline` WHERE user_id='$user_id2'")
or die('Strona nie istnieje');
if(mysql_num_rows($userko) > 0) {
while($uk = mysql_fetch_assoc($userko)) {

if (empty($uk['confirmation'])) {
$u++;
}




if (!empty($uk['confirmation'])) {
$evid = $uk['event_id'];
$userid = mysql_query("SELECT * FROM `pp_konkurencje` WHERE id='$evid'")
or die('Strona nie istnieje');
if(mysql_num_rows($userid) > 0) {
while($uid = mysql_fetch_assoc($userid)) {
if ($uid['type'] == 'ulotki') { $ull++; }
if ($uid['type'] == 'wyklady') { $wyk++; }
if ($uid['type'] == 'plakaty') { $pla++; }
if ($uid['type'] == 'event') { $eve++; }
if ($uid['type'] == 'inne') { $inn++; }
 }}
}}}


//mnozniki punktow
$ul = $ull*2;  //ulotki 1 = 1pkt
$ine = $inn;  //ulotki 1 = 1pkt
$wy = $wyk*4; //wyklady 1 = 2pkt
$ev = $eve*3;  //eventy 1 = 2pkt
$pl = $pla*2;  //plakaty 1 = 1pkt
$pkt = $ul+$wy+$pl+$in+$ev+$ine;


   mysql_query("UPDATE pp_users SET pkt = '$pkt' WHERE id ='$user_id2'");

 $u = 0;
 $ull = 0;
 $wyk = 0;
 $pla = 0;
 $ine = 0;
  $eve = 0;
   $in = 0;
      $inn = 0;  
  }}
?>