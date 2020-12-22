#!/usr/bin/php -q
<?
include '/var/www/html/info/main/main_info.php';

$file = fopen('/var/www/auto/coronaMain.txt','w');
#country
fwrite($file, $country[0][0]."\n"); #country1 no.0
fwrite($file, $country[0][1]."\n"); #country2 no.1
fwrite($file, $country[0][2]."\n"); #country3 no.2
fwrite($file, $country[0][3]."\n"); #country4 no.3
#rate
fwrite($file, $plus[0][0]."\n"); #rate1 no.4
fwrite($file, $plus[0][1]."\n"); #rate2 no.5 #증감 확인중요***
fwrite($file, $plus[0][2]."\n"); #rate3 no.6
fwrite($file, $plus[0][3]."\n"); #rate4 no.7

?>