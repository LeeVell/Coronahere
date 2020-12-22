<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('http://www.cs.go.kr/news/00002679/00002687.web?gcode=1003&idx=338098&amode=view&orderBy=wdate');

preg_match('/<td style="width: 147px; height: 38px; text-align: center;">(.*?)<\/strong>/is', $snoopy->results, $cheongsong);

$cheongsong[1]=preg_replace('/<(.*?)>/',"",$cheongsong[1]);

echo $cheongsong[1];
?>