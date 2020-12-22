<?php

require_once('/var/www/Snoopy/Snoopy.class.php');

#daegu/jung/dong/seo/nam/buk/suseong/dalseo/dalseong
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

#daegu
$snoopy->fetch('http://www.daegu.go.kr/');

preg_match_all('/<strong>(.*?)<\/span>/is', $snoopy->results, $daegu);
for($i=0;$i<=3;$i++){
$daegu[0][$i]=preg_replace('/<(.*?)>/',"", $daegu[0][$i]);
}

?>