<?

$imie = 'Maciej';
$nazwisko = 'Pastuszkaj';
$mail = 'mackomcmossaass@yopmail.com';
$mail = str_replace("@", "%40", $mail);

$haslo = 'passwo';

$cookie_file = 'cookie.txt';
$c = curl_init();
curl_setopt($c, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt($c, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($c, CURLOPT_URL, 'http://globalcitizen.pl/c/apply/create/');
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_POSTFIELDS,
'name='.$imie.'&surname='.$nazwisko.'&email='.$mail.'&pass='.$haslo.'&pass2='.$haslo.'');
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_getinfo($c);
curl_exec($c);
curl_close($c);






?>


