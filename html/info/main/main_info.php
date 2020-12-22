<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('https://m.search.naver.com/search.naver?sm=top_hty&fbm=0&ie=utf8&query=%EC%BD%94%EB%A1%9C%EB%82%98#');

preg_match('/<strong class="info_title">(.*?)<div class="status_bottom">/', $snoopy->results,$match);
preg_match('/<th scope="col" class="align_center">신규확진자(.*?)<div class="space"/', $snoopy->results,$match2);

preg_match_all('/<p class="info_num">(.*?)<\/p>/is', $match[1], $country);
preg_match_all('/<em class="info_variation (.*?)<\/em>/is', $match[1], $plus);

preg_match_all('/<td class="align_center">(.*?)<\/span>/is',$match2[1],$cities);

$country[0]=preg_replace('/<(.*?)>/',"",$country[0]);

for($i=0;$i<4;$i++){
	if(preg_match('/<em class="info_variation variation_down">/', $plus[0][$i]))
		{	$plus[0][$i]=preg_replace('/<(.*?)>/', "", $plus[0][$i]).'▼';   }
	if(preg_match('/<em class="info_variation ">/', $plus[0][$i]))
		{	$plus[0][$i]=preg_replace('/<(.*?)>/', "", $plus[0][$i]).'▲';	}
	if(preg_match('/<em class="info_variation variation_same">/', $plus[0][$i]))
		{   $plus[0][$i]=preg_replace('/<(.*?)>/', "", $plus[0][$i]);}
	
}

$sum=0;

#cities_name,cities_num
for($i=0,$j=0,$k=1,$l=2;$i<18;$i++,$j+=3,$k+=3,$l+=3){
	$cities_name[$i]=preg_replace('/<(.*?)>|\s+/',"",$cities[0][$j]); #0,3,6,9
	$cities_num[$i]=preg_replace('/<(.*?)>/',"",$cities[0][$k]); #1,4,7,10
	$cities_before[$i]=preg_replace('/<(.*?)>/',"",$cities[0][$l]); #2,5,8,11

	if($cities_before[$i]!=" -"){ $cities_before[$i]='+'.$cities_before[$i]; }
	if($cities_before[$i]==" -"){ $cities_before[$i]=' -- ';}
	$cities_num_t[$i]=preg_replace('/,/',"",$cities_num[$i]); #0~17
	$sum+=$cities_num_t[$i]; #0~17
}

#cities_per
for($i=0;$i<18;$i++){
	$cities_per[$i]=$cities_num_t[$i]/$sum*100;
}

#country
#echo $country[0][0];
#echo $country[0][1];
#echo $country[0][2];
#echo $country[0][3];
#rate
#echo $plus[0][0];
#echo $plus[0][1]; 
#echo $plus[0][2];
#echo $plus[0][3];
#all cities_name

?>