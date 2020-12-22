<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('https://www.gb.go.kr/corona_main.htm');
$gb_main=array(
	'pohang' => 0,		// 포항
	'gyeongju' => 1,	// 경주
	'gimcheon' => 2,	// 김천
	'andong' => 3,		// 안동
	'gumi' => 4,		// 구미
	'yeongju' => 5,		// 영주
	'yeongcheon' => 6,	// 영천
	'sangju' => 7,		// 상주
	'gbmg' => 8,		// 문경
	'gyeongsan' => 9,	// 경산
	'gunwi' => 10,		// 군위
	'usc' => 11,		// 울산
	'cheongsong' => 12,	// 청송
	'yyg' => 13,		// 영양
	'yd' => 14,			// 영덕
	'cheongdo' => 15,	// 청도
	'goryeong' => 16,	// 고령
	'seongju' => 17,	// 성주
	'chilgok' => 18,	// 칠곡
	'yecheon' => 19,	// 영천
	'bonghwa' => 20);	// 봉화
$sum=0;
preg_match_all('/<span class="obs_ico(.*?)<\/span>/is', $snoopy->results, $gb);

for($i=0;$i<=20;$i++){
$gb[0][$i]=preg_replace('/<(.*?)>|,|\((.*?)\)/', "", $gb[0][$i]);
}

foreach($gb_main as $key=>$val){
	$gb_main[$key]=$gb[0][$val];
	$sum+=$gb_main[$key];
}
arsort($gb_main);
$i=0;
foreach($gb_main as $key=>$val){
	$gb_per[$i]=$val/$sum*100;
	$i++;
}
?>