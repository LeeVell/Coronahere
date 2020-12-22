#!/usr/bin/php -q
<?
include '/var/www/html/info/daegu/daegu_info.php';
include '/var/www/html/info/daegu/dong_info.php';
include '/var/www/html/info/daegu/jung_info.php';
include '/var/www/html/info/daegu/nam_info.php';
include '/var/www/html/info/daegu/seo_info.php';
include '/var/www/html/info/daegu/suseong_info.php';
include '/var/www/html/info/daegu/bukgu_info.php';

$file = fopen('/var/www/auto/coronaDaegu.txt','w');
#daegu (자동)
fwrite($file,$daegu[0][0]."\n"); #0
fwrite($file,$daegu[0][2]."\n"); #1
fwrite($file,$daegu[0][1]."\n"); #2
fwrite($file,$daegu[0][3]."\n"); #3
#daegu city (일부 수동)
fwrite($file,$nam[0][1]."명\n"); #namgu no.4
fwrite($file,$suseong[1]."명\n"); #suseonggu no.5
fwrite($file,$bukgu[0][1]."\n"); #bukgu no.6
fwrite($file,$dong[0][2]."명\n"); #donggu no.7
fwrite($file,$seo[0][2]."\n"); #seogu no.8
fwrite($file,$jung[1]."\n"); #junggu no.9

fclose($file);
?>