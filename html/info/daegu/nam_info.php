<?php

require_once('/var/www/Snoopy/Snoopy.class.php');

#daegu/jung/dong/seo/nam/buk/suseong/dalseo/dalseong
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

#namgu
$snoopy->fetch('http://nam.daegu.kr/index.do#');

preg_match_all('/<td>(.*?)<\/td>/is',$snoopy->results, $nam);
$nam[0][1]=preg_replace('/<(.*?)>|\((.*?)\)/',"",$nam[0][1]);
#echo $nam[0][1];
?>