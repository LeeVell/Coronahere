#!/usr/bin/php -q
<?
include '/var/www/html/info/seoul/seoul_main_info.php';


$i=0;
$file = fopen('/var/www/auto/coronaSeoul.txt','w');
foreach ($seoul_main as $key => $val) {
  switch($key){
    case 'jongro':
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/jongro.png" style="width: 33px"></img><b class="w3-wide"> 종 로 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;
    case 'gangseo':
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gangseo.png" style="width: 33px"></img><b class="w3-wide"> 강 서 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;
    case 'seongbuk':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/seongbuk.png" style="width: 33px"></img><b class="w3-wide"> 성 북 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'seodaemun':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/seodaemun.png" style="width: 33px"></img><b class="w3-wide"> 서 대 문 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'seongdong':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/seongdong.png" style="width: 33px"></img><b class="w3-wide"> 성 동 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'seocho':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/seocho.png" style="width: 33px"></img><b class="w3-wide"> 서 초 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'jungnang':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/jungnang.png" style="width: 33px"></img><b class="w3-wide"> 중 랑 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'gangdong':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gangdong.png" style="width: 33px"></img><b class="w3-wide"> 강 동 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'guro':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/guro.png" style="width: 33px"></img><b class="w3-wide"> 구 로 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'songpa':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/songpa.png" style="width: 33px"></img><b class="w3-wide"> 송 파 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'mapo':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/mapo.png" style="width: 33px"></img><b class="w3-wide"> 마 포 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'eunpyeong':   
    $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/eunpyeong.png" style="width: 33px"></img><b class="w3-wide"> 은 평 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
    fwrite($file,$seoul_[$i]."\n"); 
    break;  
    case 'gwanak':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gwanak.png" style="width: 33px"></img><b class="w3-wide"> 관 악 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'geumcheon':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/geumcheon.png" style="width: 33px"></img><b class="w3-wide"> 금 천 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'junge':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/junge.png" style="width: 33px"></img><b class="w3-wide"> 중 구 e</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'yongsan':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/yongsan.png" style="width: 33px"></img><b class="w3-wide"> 용 산 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'gwangjin':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gwangjin.png" style="width: 33px"></img><b class="w3-wide"> 광 진 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'dongdaemoon':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/dongdaemoon.png" style="width: 33px"></img><b class="w3-wide"> 동 대 문 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'gangbuk':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gangbuk.png" style="width: 33px"></img><b class="w3-wide"> 강 북 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'dobong':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/dobong.png" style="width: 33px"></img><b class="w3-wide"> 도 봉 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'nowon':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/nowon.png" style="width: 33px"></img><b class="w3-wide"> 노 원 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'yangcheon':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/yangcheon.png" style="width: 33px"></img><b class="w3-wide"> 양 천 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'yeongdeungpo':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/yeongdeungpo.png" style="width: 33px"></img><b class="w3-wide"> 영 등 포 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'dongjak':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/dongjak.png" style="width: 33px"></img><b class="w3-wide"> 동 작 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'gangnam':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/gangnam.png" style="width: 33px"></img><b class="w3-wide"> 강 남 구</b></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
      case 'etc':   
      $seoul_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/seoul/etc.png" style="width: 33px"></img><b class="w3-wide"> 기 타</b></p><div    class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$seoul_per[$i].'%"></div></div><br>';
      fwrite($file,$seoul_[$i]."\n"); 
      break;  
    }
    $i++;
  }
  fclose($file);
  ?>