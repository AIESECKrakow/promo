<html>
	<head><title>Promo Platform</title>
	<meta charset="UTF-8">
	<link href="lay/style.css" type="text/css" rel="stylesheet" />
</head>
   <body >
    <div id="all">

   <div id="panel1">


 			 <div id="logout">
    		<a href="index.php?logout"><img src="lay/logout.png" alt="[tekst alternatywny]" width="120px" border="0"></a>
   		 </div>

   		<div id="calendar">
   		<div id="test">
   		 <img src="lay/calendar.png" alt="[tekst alternatywny]" >
   		 </div>
    		</div>
    		<div id="transbox">

    </div>
    </div>

    <div id="logo">
    		<img src="lay/logo.png" alt="[tekst alternatywny]" width="300px">
    		</div>


  
     <div id="kafel">

   <div id="top">
     				<div id="topn">
     				<b>Kalendarz</b>
     				</div>
     				<div id="topk">
     							<div id="topkk">
    							 <img src="lay/calendar.png" alt="[tekst alternatywny]" width="20px" >
    							 </div>
     				</div>
     				<div id="left">
     					 <img src="lay/left.png">
     				</div>
     				<div id="right">
     					 <img src="lay/right.png">
     				</div>
    </div>
     					<div id="konto1">
    				 <div id="nazwa">
    					 <? include("konto.php");      ?>

     					</div>
   				</div>
    					<div id="konto12">
                   <? include("ranking.php");      ?>
   				 </div>
   				 <div id="zapisy">
 <div class="legenda"> <img src="lay/useruc.png" /> Twoja aktywność (nie potwierdzona) <img src="lay/useru.png" /> Twoja aktywnosć (potwierdzona) <img src="lay/userc.png" /> Aktywność (nie potwierdzona) <img src="lay/user.png" /> Aktywność (potwierdzona) </div>

<?


if ($typ=='wyklady')  {

include("wyklady.php");

} else if ($typ=='ulotki') {
include("ulotki.php");
}

else if ($typ=='plakaty') {
include("plakaty.php");
}  else {
include("ulotki.php");
}

?>
   					 </div>
    </div>
    <div id="panel">

    			<div id="wyklady">
   			 WYKŁADY
    			</div>
    			<div id="ulotki">
   			 ULOTKI
   			 </div>
   			 <div id="plakaty">
   			 PLAKATY
    			</div>

    </div>
  </div>

    </body>
    </html>