<html>
<head><title>Promo Platform</title>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<link href="theme/witcher-style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="main">
<div class="left">

 <div class="logo"> PROMO PLATFORM 2.0
</div>
 <div class="konto">   <? include("konto.php");      ?>
</div>
 <div class="ranking"> <div class="box_header">Ranking</div>  <div class="box_content_r">  <? include("ranking.php");  ?> </div>
</div>




</div>

  <div class="right">

  <div id="include"></div>            <div id="include2"></div>
    <div class="menu"> <li><img src="theme/wyklady.png" style="vertical-align: middle"/><a href="/index.php?typ=wyklady">Wykłady</a></li><li><img src="theme/ulotki.png" style="vertical-align: middle"/><a href="/index.php?typ=ulotki">Ulotki</a></li>

<li><img src="theme/plakaty.png" style="vertical-align: middle"/><a href="/index.php?typ=plakaty">Plakaty</a></li>

 <li><a href="/index.php?typ=eventy">Eventy</a></li>      <li><a href="/index.php?typ=inne">Inne</a></li>     
 </div>


 <div class="kalendarz">



    <div class="kalendarz_header">
    <?

       if ($typ=='wyklady')  {
echo " Kalendarz  | WYKŁADY";
} else if ($typ=='ulotki') {
echo " Kalendarz  | ULOTKI";
}
else if ($typ=='plakaty') {
echo " Kalendarz  | PLAKATY";
}
else if ($typ=='eventy') {
echo " Kalendarz  | EVENTY";
}
else if ($typ=='inne') {
echo " Kalendarz  | INNE";
}
else if ($typ=='ranking') {
echo " RANKING";
}

 else {
echo " Kalendarz  | ULOTKI";
}

      ?>

    </div>  <div class="box_content_calendar">

   <?

   if ($typ=='wyklady')  {
include("wyklady.php");
} else if ($typ=='ulotki') {
include("ulotki.php");
}
else if ($typ=='plakaty') {
include("plakaty.php");
}
else if ($typ=='ranking') {
include("ranking.php");
}
else if ($typ=='eventy') {
include("eventy.php");
}
else if ($typ=='inne') {
include("inne.php");
}
 else {
include("ulotki.php");
}


   ?>


    </div>
 </div>  <div class="box_content"> <div class="legenda"> <img src="theme/useruc.png" /> Twoja aktywność (nie potwierdzona) <br /><img src="theme/useru.png" /> Twoja aktywnosć (potwierdzona)<br /> <br /><img src="theme/userc.png" /> Aktywność (nie potwierdzona) <br /><img src="theme/user.png" /> Aktywność (potwierdzona) </div>
  </div> </div>   <br class="clear"/></div>



<?

?>


    </body>
    </html>

