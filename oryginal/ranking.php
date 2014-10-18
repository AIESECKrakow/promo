<?php
 $i = 1;
$ranki = mysql_query("SELECT * FROM `pp_users` ORDER BY pkt DESC")
or die('Strona nie istnieje');
if(mysql_num_rows($ranki) > 0) {
while($ra = mysql_fetch_assoc($ranki)) {
$user_id2 = $ra['id'];
$goname_id2 = $ra['gp_name'];
$pktt = $ra['pkt'];

if (empty($ra['gp_name'])) {

$goname_id2 = $ra['mail'];

}


if ($user_id2 == $user_id) {
 echo "<b>".$i++.". ".$goname_id2." <span class=\"frigth\">".$pktt."</span></b><br>";
} else {
echo $i++.". ".$goname_id2." <span class=\"frigth\">".$pktt."</span><br>";

}

 }}
?>