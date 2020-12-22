<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('http://www.seoul.go.kr/coronaV/coronaStatus.do?menu_code=01');
$seoul_main=array(
'jongro'=>0,		// 종로구
'gangseo' => 1,		// 강서구
'seongbuk' => 2,	// 성북구
'seodaemun' => 3,	// 서대문구
'seongdong' => 4,	// 성동구
'seocho' => 5,		// 서초구
'jungnang'=> 6,		// 중랑구
'gangdong'=> 7,		// 강동구
'guro'=> 8,			// 구로구
'songpa'=> 9,		// 송파구
'mapo'=> 10,		// 마포구
'eunpyeong'=> 11,	// 은평구
'gwanak'=> 12,		// 관악구
'geumcheon'=> 13,	// 금천구
'junge'=> 14,		// 중구e
'yongsan'=> 15,		// 용산구
'gwangjin'=> 16,	// 광진구
'dongdaemoon' => 17,// 동대문구
'gangbuk' => 18,	// 강북구
'dobong' => 19,		// 도봉구
'nowon'=> 20,		// 노원구
'yangcheon'=> 21,	// 양천구
'yeongdeungpo'=>22,	// 영등포구
'dongjak'=>23,		// 동작구
'gangnam'=>24,		// 강남구
'etc'=>25			// 기타
);	


$sum=0;
preg_match_all('/<span class="num">(.*?)<\/span>/is', $snoopy->results, $seoul);

for($i=0;$i<=25;$i++){
$seoul[0][$i]=preg_replace('/<(.*?)>|,/', "", $seoul[0][$i]);
}

foreach($seoul_main as $key=>$val){
	$seoul_main[$key]=$seoul[0][$val];
	$sum+=$seoul_main[$key];
}
arsort($seoul_main);
$i=0;
foreach($seoul_main as $key=>$val){
	$seoul_per[$i]=$val/$sum*100;
	$i++;
}
print_r($seoul_main);
?>