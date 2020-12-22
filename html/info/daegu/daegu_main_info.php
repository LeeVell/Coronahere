#!/usr/bin/php -q
<?
include '/var/www/html/info/daegu/daegu_info.php';
include '/var/www/html/info/daegu/dong_info.php';
include '/var/www/html/info/daegu/jung_info.php';
include '/var/www/html/info/daegu/nam_info.php';
include '/var/www/html/info/daegu/seo_info.php';
include '/var/www/html/info/daegu/suseong_info.php';
include '/var/www/html/info/daegu/bukgu_info.php';

$dagu_all['남구']=preg_replace('/<(.*?)>|명|,/', "",$nam[0][1]);
$dagu_all['수성']=preg_replace('/<(.*?)>|명|,/', "",$suseong[0][2]);
$dagu_all['북구']=preg_replace('/<(.*?)>|명|,/', "",$bukgu[0][5]);
$dagu_all['동구']=preg_replace('/<(.*?)>|명|,/', "",$dong[1]);
$dagu_all['서구']=preg_replace('/<(.*?)>|명|,/', "",$seo[0][2]);
$dagu_all['중구']=preg_replace('/<(.*?)>|명|,/', "",$jung[0][2]);

for($i=0;$i<=5;$i++)
	echo $dagu_all[$i]."\n";
?>