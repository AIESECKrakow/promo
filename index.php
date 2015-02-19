<?
require("config.php");
include("functions.php");
include("google_login.php");
connection();
include("rank.php");
?><?php

$id_google = $me['id'];
$gp_name = $me['displayName'];
$mail = $user['email'];

if (!empty($me['id']))    {
//sprawdz czy uzytkownik istnieje jesli nie dodaj do bazy
 $chuse = mysql_query("SELECT * FROM `pp_users` WHERE id_google='$id_google'")
or die('Strona nie istnieje');
while($ch = mysql_fetch_assoc( $chuse)) {
$user_id = $ch['id'];
}
if(mysql_num_rows( $chuse) > 0) {
} else {
 mysql_query("INSERT INTO pp_users (id_google, gp_name, mail) VALUES ('$id_google', '$gp_name', '$mail')");
 }    }
//koniec dodawania uzytkownik


//echo $me['displayName'];

 // echo $user['email'];

//  echo $me['id'];
$typ = $_GET["typ"];

if(isset($authUrl)) { } else {
include("lay2.php");

}

?>