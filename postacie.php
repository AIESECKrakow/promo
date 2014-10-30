<?php
if ($pkt <= 8) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/klakier.png\"></div><div class=\"k_level\">Klakier  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"0\" max=\"8\"></meter></div>";  }

else if ($pkt <= 16) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/gargamel.png\"></div><div class=\"k_level\">Gargamel (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"8\" max=\"16\"></meter></div>";  }

else if ($pkt <= 24) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/spioch.png\"></div><div class=\"k_level\">Śpioch (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"16\" max=\"24\"></meter></div>";  }

else if ($pkt <= 32) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/smerfus.png\"></div><div class=\"k_level\">Smerfuś (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"24\" max=\"32\"></meter></div>";  }

else if ($pkt <= 40) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/ciamajda.png\"></div><div class=\"k_level\">Ciamajda (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"32\" max=\"40\"></meter></div>";  }

else if ($pkt <= 48) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/maruda.png\"></div><div class=\"k_level\">Maruda (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"40\" max=\"48\"></meter></div>";  }

else if ($pkt <= 56) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/gapik.png\"></div><div class=\"k_level\">Gapik (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"48\" max=\"56\"></meter></div>";  }

else if ($pkt <= 64) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/lalus.png\"></div><div class=\"k_level\">Laluś (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"56\" max=\"64\"></meter></div>";  }

else if ($pkt <= 72) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/dumala.png\"></div><div class=\"k_level\">Dumała (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"64\" max=\"72\"></meter></div>";  }

else if ($pkt <= 80) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/dzikus.png\"></div><div class=\"k_level\">Dzikus (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"72\" max=\"80\"></meter></div>";  }

else if ($pkt <= 88) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/doktor.png\"></div><div class=\"k_level\">Doktor (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"80\" max=\"88\"></meter></div>";  }

else if ($pkt <= 96) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/sasetka.png\"></div><div class=\"k_level\">Sasetka (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"88\" max=\"96\"></meter></div>";  }

else if ($pkt <= 104) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/zgrywus.png\"></div><div class=\"k_level\">Zgrywus (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"96\" max=\"104\"></meter></div>";  }

else if ($pkt <= 112) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/osilek.png\"></div><div class=\"k_level\">Osiłek (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"104\" max=\"112\"></meter></div>";  }

else if ($pkt <= 120) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/wazniak.png\"></div><div class=\"k_level\">Ważniak (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"112\" max=\"120\"></meter></div>";  }

else if ($pkt <= 128) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/smerfetka.png\"></div><div class=\"k_level\">Smerfetka (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"120\" max=\"128\"></meter></div>";  }

else if ($pkt <= 136) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/papasmerf.png\"></div><div class=\"k_level\">Papa Smerf (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"128\" max=\"136\"></meter></div>";  }

else { /* Maksymalny poziom */
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/rzeznik.jpg\"></div><div class=\"k_level\">Smerf RZEŹNIK (".$pkt." smerfozabójstw)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"136\" max=\"136\"></meter></div>";  }
/*
else if ($pkt <= 40) {
echo "<div class=\"k_photo\"><img src=\"theme/jig.jpeg\"></div><div class=\"k_level\">Jigsaw (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"2\" max=\"5.1\"></meter></div>";  }

else if ($pkt <= 60) {
echo "<div class=\"k_photo\"><img src=\"theme/clown.jpeg\"></div><div class=\"k_level\">Clown  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"5\" max=\"8.1\"></meter></div>";  }

else if ($pkt <= 80) {
echo "<div class=\"k_photo\"><img src=\"theme/morgan.jpeg\"></div><div class=\"k_level\">Samara Morgan  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"8\" max=\"12.1\"></meter></div>";  }
/*
else if ($pkt <= 15) {
echo "<div class=\"k_photo\"><img src=\"theme/liceum.jpg\"></div><div class=\"k_level\">Przystojniaczek  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"12\" max=\"15.1\"></meter></div>";  }

else if ($pkt <= 18) {
echo "<div class=\"k_photo\"><img src=\"theme/niunia.jpg\"></div><div class=\"k_level\">Dobra niunia (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"15\" max=\"18.1\"></meter></div>";  }

else if ($pkt <= 22) {
echo "<div class=\"k_photo\"><img src=\"theme/ciacho.png\"></div><div class=\"k_level\">Ciacho  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"18\" max=\"22.1\"></meter></div>";  }

else if ($pkt <= 26) {
echo "<div class=\"k_photo\"><img src=\"theme/dd.png\"></div><div class=\"k_level\">Double D (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\22\" max=\"26.1\"></meter></div>";  }

else if ($pkt <= 33) {
echo "<div class=\"k_photo\"><img src=\"theme/david.jpg\"></div><div class=\"k_level\">Uratuj mnie Davidzie Hasselhoff  (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"26\" max=\"33.1\"></meter></div>";  }

else if ($pkt <= 40) {
echo "<div class=\"k_photo\"><img src=\"theme/playmate.png\"></div><div class=\"k_level\">Playmate (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"33\" max=\"40.1\"></meter></div>";  }

else if ($pkt <= 49) {
echo "<div class=\"k_photo\"><img src=\"theme/playboy.jpg\"></div><div class=\"k_level\">Playboy (podobają mi się wszystkie dziewczyny, które mają ręce i nogi) (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"40\" max=\"49.1\"></meter></div>";  }

else if ($pkt <= 58) {
echo "<div class=\"k_photo\"><img src=\"theme/merlin.jpg\"></div><div class=\"k_level\">Merlin Monroe (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"49\" max=\"58.1\"></meter></div>";  }

else if ($pkt <= 65) {
echo "<div class=\"k_photo\"><img src=\"theme/casanova.jpg\"></div><div class=\"k_level\">Casanova (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"58\" max=\"80\"></meter></div>";  }

else if ($pkt <= 72) {
echo "<div class=\"k_photo\"><img src=\"theme/femme.jpg\"></div><div class=\"k_level\">femme fatale (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"58\" max=\"80\"></meter></div>";  }

else if ($pkt > 80) {
echo "<div class=\"k_photo\"><img src=\"theme/juan.jpg\"></div><div class=\"k_level\">don juan jako Johny Depp (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"58\" max=\"80\"></meter></div>";  }

else {

}

*/

?>
