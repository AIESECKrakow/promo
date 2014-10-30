<?php
if ($pkt <= 8) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/klakier.png\"></div><div class=\"k_level\">Klakier  <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"0\" max=\"8\"></meter></div>";  }


else if ($pkt <= 16) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/gargamel.png\"></div><div class=\"k_level\">Gargamel <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"8\" max=\"16\"></meter></div>";  }

else if ($pkt <= 24) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/spioch.png\"></div><div class=\"k_level\">Śpioch <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"16\" max=\"24\"></meter></div>";  }

else if ($pkt <= 32) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/smerfus.png\"></div><div class=\"k_level\">Smerfuś <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"24\" max=\"32\"></meter></div>";  }

else if ($pkt <= 40) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/ciamajda.png\"></div><div class=\"k_level\">Ciamajda <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"32\" max=\"40\"></meter></div>";  }

else if ($pkt <= 48) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/maruda.png\"></div><div class=\"k_level\">Maruda <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"40\" max=\"48\"></meter></div>";  }

else if ($pkt <= 56) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/gapik.png\"></div><div class=\"k_level\">Gapik <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"48\" max=\"56\"></meter></div>";  }

else if ($pkt <= 64) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/lalus.png\"></div><div class=\"k_level\">Laluś <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"56\" max=\"64\"></meter></div>";  }

else if ($pkt <= 72) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/dumala.png\"></div><div class=\"k_level\">Dumała <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"64\" max=\"72\"></meter></div>";  }

else if ($pkt <= 80) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/dzikus.png\"></div><div class=\"k_level\">Dzikus <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"72\" max=\"80\"></meter></div>";  }

else if ($pkt <= 88) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/doktor.png\"></div><div class=\"k_level\">Doktor <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"80\" max=\"88\"></meter></div>";  }

else if ($pkt <= 96) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/sasetka.png\"></div><div class=\"k_level\">Sasetka <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"88\" max=\"96\"></meter></div>";  }

else if ($pkt <= 104) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/zgrywus.png\"></div><div class=\"k_level\">Zgrywus <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"96\" max=\"104\"></meter></div>";  }

else if ($pkt <= 112) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/osilek.png\"></div><div class=\"k_level\">Osiłek <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"104\" max=\"112\"></meter></div>";  }

else if ($pkt <= 120) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/wazniak.png\"></div><div class=\"k_level\">Ważniak <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"112\" max=\"120\"></meter></div>";  }

else if ($pkt <= 128) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/smerfetka.png\"></div><div class=\"k_level\">Smerfetka <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"120\" max=\"128\"></meter></div>";  }

else if ($pkt <= 136) {
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/papasmerf.png\"></div><div class=\"k_level\">Papa Smerf <br/> (".$pkt." smerfojagód)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"128\" max=\"136\"></meter></div>";  }

else { /* Maksymalny poziom */
echo "<div class=\"k_photo\"><img src=\"theme/smurfs/img/postacie/rzeznik.jpg\"></div><div class=\"k_level\">Smerf RZEŹNIK <br/> (".$pkt." smerfozabójstw)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"136\" max=\"136\"></meter></div>";  }


?>
