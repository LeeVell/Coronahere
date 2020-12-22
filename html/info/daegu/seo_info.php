
<?php

require_once('/var/www/Snoopy/Snoopy.class.php');

#daegu/jung/dong/seo/nam/buk/suseong/dalseo/dalseong
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";


#seogu
$snoopy->fetch('https://www.dgs.go.kr/dgs/');

preg_match_all('/<td>(.*?)<\/td>/is', $snoopy->results, $seo);
#echo $seo[0][2];
?>