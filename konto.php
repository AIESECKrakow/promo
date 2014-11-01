<?php
 $u = 0;
 $ull = 0;
 $wyk = 0;
 $pla = 0;
  $eve = 0;
  $inn = 0;



$userkoi = mysql_query("SELECT * FROM `pp_users` WHERE id='$user_id'")
or die('Strona nie istnieje');
if(mysql_num_rows($userkoi) > 0) {
while($uki = mysql_fetch_assoc($userkoi)) {
$in = $uki['inne'];

}}


$userko = mysql_query("SELECT * FROM `pp_user_dyscypline` WHERE user_id='$user_id'")
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
echo "<div class=\"box_content\">";

include("postacie.php");


echo "<div class=\"k_name\">".$gp_name."</div>
<div class=\"k_mail\">".$mail."</div>
</div> ";

 echo "<div class=\"button1\"><a href=\"\" class=\"podpowiedz\"><img src=\"theme/ok.png\" border=\"0\" style=\"vertical-align: middle\"><span> Ulotki: ".$ul."<br> Wykłady: ".$wy."<br> Eventy ".$ev."<br> Plakaty: ".$pl."<br> Dodatkowe: ".$in."<br> Inne: ".$ine."</span></span></a>  ".$pkt."</div><div class=\"button2\"><a href=\"\" class=\"podpowiedz\"><img src=\"theme/check.png\" border=\"0\" style=\"vertical-align: middle\"><span>Aktywności nie potwierdzone, kliknij w + obok aktywności do aby potwierdzić udział</span></a>  ".$u." </div><br class=\"clear\">";

 $u = 0;
 $ull = 0;
 $wyk = 0;
 $pla = 0;
 $ine = 0;
  $eve = 0;
?>