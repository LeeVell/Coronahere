<?php

require_once('/var/www/Snoopy/Snoopy.class.php');

#daegu/jung/dong/seo/nam/buk/suseong/dalseo/dalseong
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

#donggu
$snoopy->fetch('http://www.dong.daegu.kr/main/main.htm');

preg_match_all('/<p class="txt02">(.*?)<\/p>/is', $snoopy->results, $dong);
$dong[0][2]=preg_replace('/<(.*?)>|" "/',"",$dong[0][2]);
#echo $dong[0][2];

?>