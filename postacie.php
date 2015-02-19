<?php
if ($pkt <= 4) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/ochroniarz.jpg\"></div><div class=\"k_level\">Ochroniarz korporacji  <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"0\" max=\"4\"></meter></div>";  }


else if ($pkt <= 8) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/specodksera.jpg\"></div><div class=\"k_level\">Spec od ksera <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"4\" max=\"8\"></meter></div>";  }

else if ($pkt <= 12) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/coffeemaker.jpg\"></div><div class=\"k_level\">Coffee maker <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"8\" max=\"12\"></meter></div>";  }

else if ($pkt <= 16) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/pomocniksekretarki.jpg\"></div><div class=\"k_level\">Pomocnik sekretarki <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"12\" max=\"16\"></meter></div>";  }

else if ($pkt <= 20) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/wyzszyporzadkowybiura.jpg\"></div><div class=\"k_level\">Wyższy porządkowy biura <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"16\" max=\"20\"></meter></div>";  }

else if ($pkt <= 30) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/sekretarka.jpg\"></div><div class=\"k_level\">Sekretarka <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"20\" max=\"30\"></meter></div>";  }

else if ($pkt <= 40) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/projektantgrafik.jpg\"></div><div class=\"k_level\">Projektant grafik <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"30\" max=\"40\"></meter></div>";  }

else if ($pkt <= 50) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/asystentmenagera.jpg\"></div><div class=\"k_level\">Asystent managera <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"40\" max=\"50\"></meter></div>";  }

else if ($pkt <= 60) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/mlodszyspecjalista.jpg\"></div><div class=\"k_level\">Młodszy specjalista ds. zarządzania relacjami z klientem <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"50\" max=\"60\"></meter></div>";  }

else if ($pkt <= 70) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/coach.jpg\"></div><div class=\"k_level\">Coach <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"60\" max=\"70\"></meter></div>";  }

else if ($pkt <= 80) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/glownyksiegowy.jpg\"></div><div class=\"k_level\">Główny księgowy <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"70\" max=\"80\"></meter></div>";  }

else if ($pkt <= 90) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/managerpromocji.jpg\"></div><div class=\"k_level\">Manager do spraw promocji <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"80\" max=\"90\"></meter></div>";  }

else if ($pkt <= 100) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/zastepcakierownika.jpg\"></div><div class=\"k_level\">Zastępca kierownika <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"90\" max=\"100\"></meter></div>";  }

else if ($pkt <= 120) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/kierownikdystrybucji.jpg\"></div><div class=\"k_level\">Kierownik do spraw dystrybucji <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"100\" max=\"120\"></meter></div>";  }

else if ($pkt <= 140) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/dyrektorartystyczny.jpg\"></div><div class=\"k_level\">Dyrektor artystyczny <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"120\" max=\"140\"></meter></div>";  }

else if ($pkt <= 160) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/szef.jpg\"></div><div class=\"k_level\">Szef <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"140\" max=\"160\"></meter></div>";  }

else if ($pkt <= 180) {
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/prezes.jpg\"></div><div class=\"k_level\">Prezes <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"160\" max=\"180\"></meter></div>";  }

else { /* Maksymalny poziom */
echo "<div class=\"k_photo\"><img src=\"theme/korpo/img/postacie/corpoguru.jpg\"></div><div class=\"k_level\">Corpo Guru - człowiek sukcesu! <br/> (".$pkt." punktów)</div>
<div class=\"k_exp\">  <meter value=\"".$pkt."\" min=\"0\" max=\"0\"></meter></div>";  }


?>
