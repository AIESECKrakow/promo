<?php

 function zapisz_na_konkurencje($user_id, $event_id)
{

$wynik = mysql_query("SELECT * FROM `pp_user_dyscypline` WHERE user_id='$user_id' AND event_id='$event_id'")
or die('Strona nie istnieje');
if(mysql_num_rows($wynik) > 0) {
} else {


   mysql_query("INSERT INTO pp_user_dyscypline (user_id, event_id) VALUES ('$user_id', '$event_id')");


echo " <input id='nn' name='tress' type='hidden' value='<li class=\"zapisz\">Zapisałeś się na aktywność! Zabierz się za promowanie i potwierdź ją na ASAPIE!</li>'> ";
echo " <input id='nn2' name='tress' type='hidden' value='<a href=\"#\" class=\"podpowiedz\"><img src=\"theme/useruc.png\"></a>'> ";
 echo "
<script language='javascript' type='text/javascript'>
<!--
function dodaj_tekst() {
var text = document.getElementById('nn').value; // pobiera dane z popupa o id
opener.document.getElementById('include').innerHTML=text;  // tam gdzie pokaze html
var text2 = document.getElementById('nn2').value; // pobiera dane z popupa o id
opener.document.getElementById('$event_id').innerHTML=text2;
text = '' + text + '';
text2 = '' + text2 + '';
window.close();
}
//-->
</script>
";
 echo "
 <body onload='dodaj_tekst()'>";
}
}




  function wypisz_z_konkurencji($user_id, $event_id)
{


   mysql_query("DELETE FROM pp_user_dyscypline WHERE user_id='$user_id' AND event_id='$event_id'");


// tutaj jebne se gifa
  echo "  <img id='nn' name'trees' type='hidden' src='http://fat.gfycat.com/ComplexFlickeringBuzzard.gif' />";
  echo " <input id='nn' name='tress' type='hidden' value='<li class=\"wypisz\"> Zostanie to uwzględnione w raporcie miesięcznym!</li>'> ";
echo " <input id='nn2' name='tress' type='hidden' value=''> ";
 echo "
<script language='javascript' type='text/javascript'>
<!--
function dodaj_tekst() {
var text = document.getElementById('nn').value; // pobiera dane z popupa o id
opener.document.getElementById('include').innerHTML=text;  // tam gdzie pokaze html
var text2 = document.getElementById('nn2').value; // pobiera dane z popupa o id
opener.document.getElementById('".$event_id."u').innerHTML=text2;
text = '' + text + '';
text2 = '' + text2 + '';
window.close();
}
//-->
</script>
";
 echo "
 <body onload='dodaj_tekst()'>";





}




  function potwierdz_udzial($user_id, $event_id, $link)
{


$link2 = substr($link, 0, 4);

if ($link2 == 'http')  {

   mysql_query("UPDATE pp_users SET inne = inne+0.5 WHERE id ='$user_id'");
}  else if (empty($link)){


 $link = 'brak zdjęcia';

}


   mysql_query("UPDATE pp_user_dyscypline SET confirmation = '$link' WHERE user_id ='$user_id' AND event_id ='$event_id'");



echo " <input id='nn' name='tress' type='hidden' value='<li class=\"zapisz\">Gratulacje! Wyrobiłeś 120% normy i dostajesz dodatkowe projekty do wykonania! Promuj dalej, podwyżka jest tuż tuż!</li>'> ";
echo " <input id='nn2' name='tress' type='hidden' value='<a href=\"#\" class=\"podpowiedz\"><img src=\"theme/useru.png\"></a>'> ";
 echo "
<script language='javascript' type='text/javascript'>
<!--
function dodaj_tekst() {
var text = document.getElementById('nn').value; // pobiera dane z popupa o id
opener.document.getElementById('include').innerHTML=text;  // tam gdzie pokaze html
var text2 = document.getElementById('nn2').value; // pobiera dane z popupa o id
opener.document.getElementById('".$event_id."u').innerHTML=text2;
text = '' + text + '';
text2 = '' + text2 + '';
window.close();
}
//-->
</script>
";
 echo "
 <body onload='dodaj_tekst()'>";










}




?>