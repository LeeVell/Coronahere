<?php

require_once('/var/www/Snoopy/Snoopy.class.php');

#daegu/jung/dong/seo/nam/buk/suseong/dalseo/dalseong
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

#junggu
$snoopy->fetch('http://www.jung.daegu.kr/new/pages/main/');

preg_match('/<dd>(.*?)<\/dd>/is', $snoopy->results, $jung);
$jung[1]=preg_replace('/<(.*?)>/',"",$jung[1]);
#echo $jung[0][2];
?>