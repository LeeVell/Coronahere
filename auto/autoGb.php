#!/usr/bin/php -q
<?
include '/var/www/html/info/gb/gb_main_info.php';


$i=0;
$file = fopen('/var/www/auto/coronaGb.txt','w');
foreach ($gb_main as $key => $val) {
    switch ($key){
      case 'gyeongsan':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/gyeongsan.png" style="width: 35px"></img><b class="w3-wide"> 경 산 시</b><span class="badge badge-pill badge-danger">위험</span><span style="float: right;"><a id="but" href="http://gbgs.go.kr/open_content/ko/page.do?mnu_uid=2160&parm_bod_uid=180517&step=258" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://gbgs.go.kr/programs/coronaMove/coronaMove.do" style="background-color: #FF6A4B" class="badge badge-primary">이동 경로</a></span></p><div class="w3-progress-container"><b style="color: #585858; float: right;">'.$val.'명&nbsp; </b> <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'cheongdo':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/cheongdo.png" style="width: 35px"></img><b class="w3-wide"> 청 도 군</b><span class="badge badge-pill badge-danger">위험</span><span style="float: right;"><a id="but" href="http://www.cheongdo.go.kr" class="badge badge-success">발생 현황</a> &nbsp;<a id="but" href="http://www.cheongdo.go.kr/open.content/health/corona/move/" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container"><b style="color: #585858; float: right;"> '.$val.'명&nbsp; </b><div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'gumi':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/gumi.png" style="width: 35px"></img><b class="w3-wide"> 구 미 시</b><span class="badge badge-pill badge-warning">경고</span><span style="float: right;"><a id="but" href="http://www.gumi.go.kr/portal/contents.do?mId=0610100300" class="badge badge-info">행사·시설</a> &nbsp;<a id="but" href="http://www.gumi.go.kr/portal/contents.do?mId=0610100400" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container"><b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b><div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'bonghwa':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/bonghwa.png" style="width: 35px"></img><b class="w3-wide"> 봉 화 군</b><span class="badge badge-pill badge-warning">경고</span><span style="float: right;"><a id="but" href="https://www.bonghwa.go.kr/" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container"><b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b> <!--no--><div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'chilgok':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/chilgok.png" style="width: 35px"></img><b class="w3-wide"> 칠 곡 군</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="http://www.chilgok.go.kr/popup/20200221/data0223.pdf" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://www.chilgok.go.kr/covid19/" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container"><b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b> <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div>
      </div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'usc':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/uiseong.png" style="width: 35px"></img><b class="w3-wide"> 의 성 군</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="https://www.usc.go.kr/tabBoard/view.tc?mn=2510&pageSeq=1700&tabBoardSeq=51" class="badge badge-success">발생 현황</a> &nbsp;<a id="but" href="https://www.usc.go.kr/board/detail.tc?boardNo=3029175&mngNo=275&mn=1275&pageNo=1314" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b> <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'andong':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/andong.png" style="width: 35px"></img><b class="w3-wide"> 안 동 시</b><span class="badge badge-pill badge-warning">경고</span><span style="float: right;"><a id="but" href="https://www.andong.go.kr/portal/bbs/view.do?bIdx=703357&ptIdx=156&mId=0401010000" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="https://www.andong.go.kr" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명&nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'pohang':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/pohang.png" style="width: 35px"></img><b class="w3-wide"> 포 항 시</b><span class="badge badge-pill badge-warning">경고</span><span style="float: right;"><a id="but" href="https://www.pohang.go.kr/pohang/2557/subview.do?enc=Zm5jdDF8QEB8JTJGYmJzJTJGcG9oYW5nJTJGMTA0JTJGNDUwNzM1JTJGYXJ0Y2xWaWV3LmRvJTNG" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://www.pohang.go.kr/COVID-19.html?tabNo=05" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b> <!--hard-->  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'yeongcheon':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/yeongcheon.png" style="width: 35px"></img><b class="w3-wide"> 영 천 시</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="https://www.yc.go.kr/health/bbs/view.do?bIdx=351685&ptIdx=658&mId=0903000000" class="badge badge-success">발생 현황</a> &nbsp;<a id="but" href="https://www.yc.go.kr/health/contents.do?mId=0901010000" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'gimcheon':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/gimcheon.png" style="width: 35px"></img><b class="w3-wide"> 김 천 시</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="http://gc.go.kr/dept2/post18/bbs/view.do?bIdx=3435564&ptIdx=2124&mId=0701000000" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://gc.go.kr/dept2/post18/bbs/list.do?ptIdx=2107&mId=0702000000" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b> <!--hard-->  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'seongju':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/seongju.png" style="width: 35px"></img><b class="w3-wide"> 성 주 군</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="http://www.sj.go.kr/page.do?cmd=258&bod_uid=425609&srchDept=&srchEnable=1&pageNo=2&srchSDate=&srchBgpUid=&mnu_uid=1043&srchKwd=&srchEDate=&srchColumn=&" class="badge badge-info">관광·시설</a> &nbsp;<a id="but" href="http://www.sj.go.kr/design/corona.jsp?design#self" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'sangju':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/sangju.png" style="width: 35px"></img><b class="w3-wide"> 상 주 시</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="https://www.sangju.go.kr/tabBoard/detail.tc?mn=4242&viewType=sub&mngNo=852&pageIndex=2&boardName=SKJLSJKDASDF&boardNo=2000001435&pageSeq=3015&preview=&previewTempl=&previewTempl=&tabBoardSeq=87&type=&tabOrder=&searchCondition=0&searchKeyword=" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="https://www.sangju.go.kr/tabBoard/view.tc?mn=4242&tabBoardSeq=87&pageSeq=3015&type=B&tabOrder=1" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'gyeongju':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/gyeongju.png" style="width: 35px"></img><b class="w3-wide"> 경 주 시</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="https://m.post.naver.com/viewer/postView.nhn?volumeNo=27577327&memberNo=15513069" class="badge badge-info">행사·시설</a> &nbsp;<a id="but" href="http://www.gyeongju.go.kr/area/page.do?mnu_uid=2860&" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'gunwi':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/gunwi.png" style="width: 35px"></img><b class="w3-wide"> 군 위 군</b><span style="float: right;"><a id="but" href="http://www.gunwi.go.kr/ko/page.do?pageNo=1&pagePrvNxt=1&pageRef=0&pageOrder=0&step=258&parm_bod_uid=62116&srchEnable=1&srchKeyword=&srchSDate=1960-01-01&srchBgpUid=-1&mnu_uid=166&parm_mnu_uid=0&srchEDate=9999-12-31&srchColumn=&srchVoteType=-1&" class="badge badge-info">5일장 휴장</a> &nbsp;<a id="but" href="http://www.gunwi.go.kr/ko/page.do?mnu_uid=965&" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;  
      case 'goryeong':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/goryeong.png" style="width: 35px"></img><b class="w3-wide"> 고 령 군</b><span style="float: right;"><a id="but" href="http://www.goryeong.go.kr/intro06.html" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://www.goryeong.go.kr/intro02.html" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'yecheon':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/yecheon.png" style="width: 35px"></img><b class="w3-wide"> 예 천 군</b><span class="badge badge-pill badge-secondary">주의</span><span style="float: right;"><a id="but" href="http://www.insect-expo.org" class="badge badge-info">행사 연기</a> &nbsp;<a id="but" href="http://www.ycg.kr/open.content/health/health.info/corona/today/?i=69653" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b> <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
      case 'gbmg':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/mungyeong.png" style="width: 35px"></img><b class="w3-wide"> 문 경 시</b><span style="float: right;"><a id="but" href="https://www.gbmg.go.kr/portal/bbs/view.do?mId=0604110100&bIdx=150834&ptIdx=169" class="badge badge-info">5일장 휴장</a> &nbsp;<a id="but" href="https://www.gbmg.go.kr/portal/contents.do?mId=0604110200" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;  
      case 'yeongju':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/yeongju.png" style="width: 35px"></img><b class="w3-wide"> 영 주 시</b><span style="float: right;"><a id="but" href="http://www.yeongju.go.kr/open_content/main/page.do?pageNo=2&pagePrvNxt=1&pageRef=0&pageOrder=0&step=258&parm_bod_uid=1068762&srchEnable=1&srchKeyword=&srchSDate=1990-01-01&srchBgpUid=-1&mnu_uid=10626&srchEDate=2100-01-01&srchVoteType=-1&srchColumn=&" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://www.yeongju.go.kr/open_content/main/page.do?pageNo=1&pagePrvNxt=1&pageRef=0&pageOrder=0&step=258&parm_bod_uid=1068750&srchEnable=-1&srchKeyword=&srchSDate=1990-01-01&srchBgpUid=-1&mnu_uid=10627&srchEDate=2100-01-01&srchColumn=&srchVoteType=-1&" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break; 
      case 'cheongsong':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/cheongsong.png" style="width: 35px"></img><b class="w3-wide"> 청 송 군</b><span style="float: right;"><a id="but" href="http://www.cs.go.kr/news/00002679/00002687.web" class="badge badge-info">발생 현황</a> &nbsp;<a id="but" href="http://www.cs.go.kr/news/00002679/00002687.web?gcode=1003&idx=338098&amode=view" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;"> '.$val.'명 &nbsp; </b> <!--no-->  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break; 
      case 'yyg':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/yeongyang.png" style="width: 35px"></img><b class="w3-wide"> 영 양 군</b><span style="float: right;"><a id="but" href="http://www.yyg.go.kr/www/organization/yyg_news/notice?idx=116274&page=2&mode=view" class="badge badge-info">5일장 휴장</a> &nbsp;<a id="but" href="http://static.yyg.go.kr/COVID.html?build=8f5e6c5ca52a52ae8cbd1a77af31c424#none" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break; 
      case 'yd':
      $gb_[$i]='<p style="color: #1C1C1C"><img src="/assets/img/gb/yeongdeok.png" style="width: 35px"></img><b class="w3-wide"> 영 덕 군</b><span style="float: right;"><a id="but" href="http://www.yd.go.kr/?p=64793&uid=276438&mod=document" class="badge badge-info">시설 휴관</a> &nbsp;<a id="but" href="http://www.yd.go.kr/?p=64793&uid=276619&mod=document" style="background-color: #FF6A4B" class="badge badge-info">이동 경로</a></span></p><div class="w3-progress-container">  <b style="color: #585858; float: right;">'.$val.'명 &nbsp; </b>  <div class="w3-progressbar" style="width:'.$gb_per[$i].'%"></div></div><br>';
      fwrite($file,$gb_[$i]."\n"); 
      break;
  }
  $i++;
}
fclose($file);
?>