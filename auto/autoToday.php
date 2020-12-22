#!/usr/bin/php -q
<?

include "/var/www/html/info/main/main_info.php";

$file = fopen('/var/www/auto/coronaToday.txt','w');
for($i=0;$i<18;$i++){
  switch($cities_name[$i]){
    case "대구":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/daegu.png" style="width: 35px"></img><b class="w3-wide"> 대 구 광 역 시</b><span class="badge badge-pill badge-danger">위험</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "경북":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/gyeongbuk.jpeg" style="width: 35px"></img><b class="w3-wide"> 경 상 북 도</b><span class="badge badge-pill badge-danger">위험</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "경기":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/gyeonggi.png" style="width: 35px"></img><b class="w3-wide"> 경 기 도</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "서울":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/seoul.png" style="width: 33px"></img><b class="w3-wide"> 서 울 특 별 시</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "검역":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/airplan.png" style="width: 33px"></img><b class="w3-wide"> 검 역</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "부산":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/busan.png" style="width: 33px"></img><b class="w3-wide"> 부 산 광 역 시</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "충남":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/chungnam.png" style="width: 35px"></img><b class="w3-wide"> 충 청 남 도</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "경남":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/gyeongnam.png" style="width: 35px"></img><b class="w3-wide"> 경 상 남 도</b><span class="badge badge-pill badge-warning">경고</span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "강원":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/gangwon.png" style="width: 35px"></img><b class="w3-wide"> 강 원 도</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "울산":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/ulsan.png" style="width: 35px"></img><b class="w3-wide"> 울 산 광 역 시</b></p></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "대전":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/daejeon.png" style="width: 35px"></img><b class="w3-wide"> 대 전 광 역 시</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "광주":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/gwangju.png" style="width: 35px"></img><b class="w3-wide"> 광 주 광 역 시</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "충북":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/chungbuk.png" style="width: 35px"></img><b class="w3-wide"> 충 청 북 도</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "인천":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/incheon.png" style="width: 35px"></img><b class="w3-wide"> 인 천 광 역 시</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "전북":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/jeonbuk.png" style="width: 35px"></img><b class="w3-wide"> 전 라 북 도</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;  
    case "전남":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/jeonnam.png" style="width: 35px"></img><b class="w3-wide"> 전 라 남 도</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "제주":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/jeju.png" style="width: 35px"></img><b class="w3-wide"> 제 주 특 별 자 치 도</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;
    case "세종":
    $city[$i]='<p style="color: #1C1C1C"><img src="/assets/img/main/sejong.png" style="width: 35px"></img><b class="w3-wide"> 세 종 특 별 자 치 시</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$cities_num[$i].' 명('.$cities_before[$i].') &nbsp; </b><div class="w3-progressbar" style="width:'.$cities_per[$i].'%"></div></div><br>';
    fwrite($file,$city[$i]."\n"); 
    break;  
  }
}
fclose($file);

?>