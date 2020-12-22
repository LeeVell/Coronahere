<?
$c_info= @file("/var/www/auto/coronaMain.txt");
$c_city= @file("/var/www/auto/coronaInfo.txt");
$c_daegu= @file("/var/www/auto/coronaDaegu.txt");
$c_gb= @file("/var/www/auto/coronaGb.txt");
$c_seoul= @file("/var/www/auto/coronaSeoul.txt");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
	<meta property="og:title" content="CORONA HERE - 코로나히어">
	<meta property="og:description" content="전국 시·군·구 실시간 코로나19 정보 확인">
	<meta property="og:image" content="/assets/img/logo/logo2.png">
	<link rel=" shortcut icon" href="fabi.ico">
	<link rel="icon" href="/assets/img/ico/fabi.ico">
	<meta name="naver-site-verification" content="1fd479b2df433932037779a979a91cbf0cc96799"/>
	<meta name="description" content="전국 시·군·구의 실시간 코로나-19 현황을 제공하는 사이트입니다.">
  <link rel="canonical" href="http://coronahere.com/">
  <title>CORONA HERE - 코로나히어</title>
  <!--JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!--CSS-->
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/	font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap&subset=korean" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body><!--
  <div><img src="/assets/img/main/korea_fighting_color2.png" style="width: 100%; height: auto; margin-bottom: -9px;"></div>-->
  
	<video playsinline muted autoplay loop poster="/assets/img/main/again.png" id="home" style="object-fit: cover; width: 100%; height: auto; margin-bottom: -9px;">
		<source src="videoplayback.mp4" type="video/mp4">
		</video> 

		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<ul class="w3-navbar" style="color: white" id="myNavbar">
				<li class="w3-opennav w3-right">
					<a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
						<i class="fa fa-bars"></i>
					</a>
				</li>
				<li class="w3-left-align"><a href="index.php"> C ❍ R ❍ N A &nbsp; H E R E</a></li>
				<li class="w3-hide-small"><a href="#about"> 국내 발생현황</a></li>
				<li class="w3-hide-small"><a href="index_mask.php">마스크 판매 정보<span class="badge badge-primary ml-1">Beta</span></a></li>
				<li class="w3-hide-small w3-hide-medium"><a href="http://www.mohw.go.kr/react/popup_200128.html"> 선별진료소 및 안심병원 현황</a></li>
				<li class="w3-hide-small w3-hide-medium"><a href="self.php#aboutself" target="_blank"> 자가격리자 행동수칙</a></li>
			</ul>

			<!-- Navbar on small screens -->
			<div id="navDemo" class="w3-hide">
				<ul class="w3-navbar w3-left-align w3-white">
					<li><a class="w3-hide-medium w3-hide-large" href="#about" onclick="toggleFunction()">국내 발생현황</a></li>
					<li><a class="w3-hide-medium w3-hide-large" href="index_mask.php" onclick="toggleFunction()">마스크 판매 정보<span class="badge badge-primary ml-1">Beta</span></a></li>
					<li><a class="w3-hide-large" href="http://www.mohw.go.kr/react/popup_200128.html" onclick="toggleFunction()">선별진료소 및 안심병원 현황</a></li>
					<li><a class="w3-hide-large" href="self.php#aboutself" target="_blank">자가격리자 행동수칙</a></li>
					<li><a href="http://ncov.mohw.go.kr/index_main.jsp" target="_blank">질병관리본부</a></li>
					<li><a href="https://www.youtube.com/playlist?list=PL_-Emxqwow0AXFAJgXcEq5XDqAP3vbdJa" target="_blank">COVID-19 정부브리핑</a></li>
				</ul>
			</div>
		</div>

    <!--<div class="row w3-center w3-dark-grey" id="about">
      <div class="col w3-section">
        확진환자<br>
        <span style="font-size: 19.5px">3,150</span>
        <br>571 ▲
      </div>
      <div class="col w3-section">
        검사진행<br>
        <span style="font-size: 19.5px">30,237</span>
        <br>4,669 ▲
      </div>
      <div class="col w3-section">
        격리해제<br>
        <span style="font-size: 19.5px">27</span>
        <br>1 ▲
      </div>
      <div class="col w3-section">
        사망자<br>
        <span style="font-size: 19.5px">13</span>
        <br>-
      </div>
    </div>-->

    <!-- Container (About Section) -->
    <div class="w3-center w3-dark-grey" id="about">
     <div class="w3-row">
      <div class="w3-col s3 w3-section">
       확진환자<br>
       <span id="num"><?echo $c_info[0]?> 명</span> <!--46-->
       <br><?echo $c_info[4]?><!--50-->
     </div>
     <div class="w3-col s3 w3-section">
      검사진행<br>
      <span id="num"><?echo $c_info[1]?> 명</span> <!--47-->
      <br><?echo $c_info[5]?><!--51-->
    </div>
    <div class="w3-col s3 w3-section">
      격리해제<br>
      <span id="num"><?echo $c_info[2]?> 명</span> <!--48-->
      <br><?echo $c_info[6]?> <!--52-->
    </div>
    <div class="w3-col s3 w3-section">
      사망자<br>
      <span id="num"><?echo $c_info[3]?> 명</span> <!--49-->
      <br><?echo $c_info[7]?> <!--53-->
      <!-- ▲ ▼ -->
    </div>
  </div>
</div>

<div class="w3-content w3-container">
 <h1 class="w3-center" id="title"><br><b style="color: #1C1C1C">C ❍ R ❍ N A &nbsp; H E R E</b></h1>
 <p class="w3-center" style="color: #1C1C1C"><b>5,000만 대한민국 국민과 함께합니다, 코로나히어</b></p><br>
 <p id="two" style="color: #1C1C1C"><b>CORONA HERE 개발팀</b>은 다양한 기능을 구현하고 있습니다.<br>시·도 상단에 제시된 <button type="button" class="btn btn-primary" id="detail"> 지역 </button><button type="button" class="btn btn-primary" id="sdetail"> 상세 </button> 탭을 통해 <b>시·군·구</b>의 세부적인 확진자 수를 확인하실 수 있으며, 현재까지 구현된 대구, 경북, 서울 외 지역의 상세보기는 순차적으로 개발될 예정입니다.<br><b>문의 및 피드백</b>은 hooneee@kakao.com으로 보내주시면 감사하겠습니다.<br><br>※ 본 수치는 질병관리본부의 공식사이트 자료를 기반으로 제공되므로, 특정 시점에 따라 각 지방자치단체가 발표한 확진자 수와 상이할 수 있습니다.<br><br></p>
 <div>
   <ul class="tab mb-4">
     <li class="on" data-tab="tab1">전국</li>
     <li data-tab="tab2">대구</li>
     <li data-tab="tab3">경북</li>
     <li data-tab="tab4">서울<span class="badge badge-primary ml-1">Beta</span></li>
   </ul>
   <!-- 전국 -->
   <div id="tab1" class="tabcontent on">
    <!-- local progress bar -->
    <?echo $c_city[0];?>
    <?echo $c_city[1];?>
    <?echo $c_city[2];?>
    <?echo $c_city[3];?>
    <?echo $c_city[4];?>
    <?echo $c_city[5];?>
    <?echo $c_city[6];?>
    <?echo $c_city[7];?>
    <?echo $c_city[8];?>
    <?echo $c_city[9];?>
    <?echo $c_city[10];?>
    <?echo $c_city[11];?>
    <?echo $c_city[12];?>
    <?echo $c_city[13];?>
    <?echo $c_city[14];?>
    <?echo $c_city[15];?>
    <?echo $c_city[16];?>
    <?echo $c_city[17];?>
  </div>
  <!--대구-->
  <div id="tab2" class="tabcontent">
   <!-- local progress bar -->
   <p style="color: #1C1C1C"><img src="/assets/img/daegu/dalseogu.png" style="width: 35px"></img><b class="w3-wide"> 달 서 구</b><span class="badge badge-pill badge-danger">위험</span><a href="https://www.dalseo.daegu.kr/index.do?menu_link=/icms/bbs/selectBoardArticle.do&menu_id=10000102&bbsId=BBS_00029&nttId=27871"><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
   <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> 1,619명 &nbsp; </b> <!--no-->
    <div class="w3-progressbar" style="width:23.7%"></div>
  </div><br>
  
  <p style="color: #1C1C1C"><img src="/assets/img/daegu/namdaegu.png" style="width: 35px"></img><b class="w3-wide"> 남 구</b><span class="badge badge-pill badge-danger">위험</span><a href="https://blog.naver.com/daegu_namgu/221818281839"><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[4]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:17.8%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/suseonggu.png" style="width: 35px"></img><b class="w3-wide"> 수 성 구</b><span class="badge badge-pill badge-danger">위험</span><a href="https://blog.naver.com/suseongblog/221814091740"><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[5]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:15.4%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/bukdaegu.png" style="width: 35px"></img><b class="w3-wide"> 북 구</b><span class="badge badge-pill badge-danger">위험</span><span style="float: right;"><a id="but" href="http://www.buk.daegu.kr/cmsh/buk.daegu.kr/ph.html" class="badge badge-info">시설 휴관</a></span></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[6]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:11.6%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/dongdaegu.png" style="width: 35px"></img><b class="w3-wide"> 동 구</b><span class="badge badge-pill badge-danger">위험</span><a href="http://www.dong.daegu.kr/main/page.htm?md=4&parm_mnu_uid=212&mnu_uid=212&msg_no=132174&v_no=9343&pageno=1&msg_ca_no=0&wztp="><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[7]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:10.4%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/dalseonggun.png" style="width: 35px"></img><b class="w3-wide"> 달 성 군</b><span class="badge badge-pill badge-danger">위험</span><a href="http://dalseong.daegu.kr/index.do?menu_link=/icms/bbs/selectBoardArticle.do"><span id="but" style="float: right;" class="badge badge-success">발생 현황</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> 671명 &nbsp; </b> <!--no-->
    <div class="w3-progressbar" style="width:9.8%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/seodaegu.png" style="width: 35px"></img><b class="w3-wide"> 서 구</b><span class="badge badge-pill badge-danger">위험</span><a href="https://www.dgs.go.kr/dgs/info/page.php?mnu_uid=987&md=4&msg_no=81934"><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[8]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:7.8%"></div>
  </div><br>

  <p style="color: #1C1C1C"><img src="/assets/img/daegu/jungdaegu.png" style="width: 35px"></img><b class="w3-wide"> 중 구</b><span class="badge badge-pill badge-danger">위험</span><a href="http://www.jung.daegu.kr/new/pages/administration/page.html?mc=0157&no=QM5UDN&mode=view&bbs_id=board_5"><span id="but" style="float: right;" class="badge badge-info">시설 휴관</span></a></p>
  <div class="w3-progress-container">
    <b style="color: #585858; float: right;"> <?echo $c_daegu[9]?> &nbsp; </b>
    <div class="w3-progressbar" style="width:3.6%"></div>
  </div><br>
  <br><br>
  <!-- local end -->

  <h2 id="hhh" class="w3-center" style="color: #1C1C1C">대구광역시 <b>선별진료소</b> 현황</h2>
  <p id="one" class="w3-center" style="color: #1C1C1C">질병관리본부 콜센터 <b>1339</b></p><br>
  <table class="table" style="color:#1C1C1C">
    <thead>
      <tr>
        <th scope="col">기관명</th>
        <th scope="col">전화번호</th>
        <th scope="col">기관명</th>
        <th scope="col">전화번호</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>영남대학교병원</td>
        <td>053-623-8001/620-3332</td>
        <td>칠곡경북대학교병원</td>
        <td>053-200-2000</td>
      </tr>
      <tr>
        <td>대구 가톨릭대학교병원</td>
        <td>053-650-3000</td>
        <td>북구보건소</td>
        <td>053-665-2756/2760</td>
      </tr>
      <tr>
        <td>남구보건소</td>
        <td>053-664-3644/3582</td>
        <td>대구의료원</td>
        <td>053-560-7575</td>
      </tr>
      <tr>
        <td>달서구보건소</td>
        <td>053-667-5754/3123</td>
        <td>서구보건소</td>
        <td>053-663-3176/3178</td>
      </tr>
      <tr>
        <td>계명대학교 동산병원</td>
        <td>053-258-7348</td>
        <td>수성구보건소</td>
        <td>053-666-3264/3266</td>
      </tr>
      <tr>
        <td>달성군보건소</td>
        <td>053-668-3121/3114</td>
        <td>경북대학교병원</td>
        <td>1666-5114</td>
      </tr>
      <tr>
        <td>대구파티마병원</td>
        <td>1688-7770/053-940-7098</td>
        <td>중구보건소</td>
        <td>053-661-3804/3826</td>
      </tr>
      <tr>
        <td>동구보건소</td>
        <td>053-662-3225/3274</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table><br>

  <p id="two" style="color: #1C1C1C">※ <b>코로나19 의심응급산모</b>(분만, 진통, 출혈, 양막파열 등) <b>지정의료기관 : 대구파티마병원</b><br>문의 : 1339콜센터, 고위험산모센터 053-258-6183, 대구파티마병원 053-940-7314<br></p></div>
  <div id="tab3" class="tabcontent">
    <?echo $c_gb[0];?>
    <?echo $c_gb[1];?>
    <?echo $c_gb[2];?>
    <?echo $c_gb[3];?>
    <?echo $c_gb[4];?>
    <?echo $c_gb[5];?>
    <?echo $c_gb[6];?>
    <?echo $c_gb[7];?>
    <?echo $c_gb[8];?>
    <?echo $c_gb[9];?>
    <?echo $c_gb[10];?>
    <?echo $c_gb[11];?>
    <?echo $c_gb[12];?>
    <?echo $c_gb[13];?>
    <?echo $c_gb[14];?>
    <?echo $c_gb[15];?>
    <?echo $c_gb[16];?>
    <?echo $c_gb[17];?>
    <?echo $c_gb[18];?>
    <?echo $c_gb[19];?>
    <?echo $c_gb[20];?>

    <p style="color: #1C1C1C"><img src="/assets/img/gb/uljin.png" style="width: 35px"></img><b class="w3-wide"> 울 진 군</b><span style="float: right;"><a id="but" href="https://www.bonghwa.go.kr/open.content/ko/news/corona/corona.info/co.info/" class="badge badge-info">5일장 휴장</a></span></p>
    <div class="w3-progress-container">
      <b style="color: #585858; float: right;"> 0명 &nbsp; </b>
      <div class="w3-progressbar" style="width:0%"></div>
    </div><br>

    <p style="color: #1C1C1C"><img src="/assets/img/gb/ulleng.png" style="width: 35px"></img><b class="w3-wide"> 울 릉 군</b></p>
    <div class="w3-progress-container">
      <b style="color: #585858; float: right;"> 0명 &nbsp; </b> <!--no-->
      <div class="w3-progressbar" style="width:0%"></div>
    </div><br><br><br>

    <h2 id="hhh" class="w3-center" style="color: #1C1C1C">경상북도 <b>선별진료소</b> 현황</h2>
    <p id="one" class="w3-center" style="color: #1C1C1C">질병관리본부 콜센터 <b>1339</b></p><br>

    <table class="table" style="color: #1C1C1C">
      <thead>
        <tr>
          <th scope="col">시군구</th>
          <th scope="col">기관명</th>
          <th scope="col">검체채취 여부</th>
          <th scope="col">전화번호</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>경산시</td>
          <td>세명병원</td>
          <td>검체 채취 O</td>
          <td>053-819-8500</td>
        </tr>
        <tr>
          <td>경산시</td>
          <td>경산중앙병원</td>
          <td>검체 채취 O</td>
          <td>053-715-0119</td>
        </tr>
        <tr>
          <td>경산시</td>
          <td>경산시 보건소</td>
          <td>검체 채취 O</td>
          <td>053-810-6314</td>
        </tr>
        <tr>
          <td>경주시</td>
          <td>경주시 보건소</td>
          <td>검체 채취 O</td>
          <td>054-779-8573</td>
        </tr>
        <tr>
          <td>고령군</td>
          <td>고령군 보건소</td>
          <td>검체 채취 O</td>
          <td>054-954-1300</td>
        </tr>
        <tr>
          <td>고령군</td>
          <td>고령영생병원</td>
          <td>검체 채취 O</td>
          <td>054-955-2661</td>
        </tr>
        <tr>
          <td>구미시</td>
          <td>구미순천향병원</td>
          <td>검체 채취 O</td>
          <td>054-468-9114</td>
        </tr>
        <tr>
          <td>구미시</td>
          <td>구미차병원</td>
          <td>검체 채취 O</td>
          <td>054-450-9700</td>
        </tr>
        <tr>
          <td>구미시</td>
          <td>구미강동병원</td>
          <td>검체 채취 X</td>
          <td>054-453-7575</td>
        </tr>
        <tr>
          <td>구미시</td>
          <td>구미시 구미보건소</td>
          <td>검체 채취 O</td>
          <td>054-480-4032</td>
        </tr>
        <tr>
          <td>군위군</td>
          <td>군위군보건소</td>
          <td>검체 채취 O</td>
          <td>054-383-4000</td>
        </tr>
        <tr>
          <td>김천시</td>
          <td>김천의료원</td>
          <td>검체 채취 O</td>
          <td>054-432-8901</td>
        </tr>
        <tr>
          <td>김천시</td>
          <td>김천제일병원</td>
          <td>검체 채취 O</td>
          <td>054-420-9440</td>
        </tr>
        <tr>
          <td>김천시</td>
          <td>김천시 보건소</td>
          <td>검체 채취 O</td>
          <td>054-433-4000</td>
        </tr>
        <tr>
          <td>문경시</td>
          <td>문경제일병원</td>
          <td>검체 채취 X</td>
          <td>054-550-7700</td>
        </tr>
        <tr>
          <td>문경시</td>
          <td>문경중앙병원</td>
          <td>검체 채취 O</td>
          <td>054-555-2011</td>
        </tr>
        <tr>
          <td>문경시</td>
          <td>문경시 보건소</td>
          <td>검체 채취 O</td>
          <td>054-555-2033</td>
        </tr>
        <tr>
          <td>봉화군</td>
          <td>봉화군 보건소</td>
          <td>검체 채취 O</td>
          <td>054-673-4000</td>
        </tr>
        <tr>
          <td>봉화군</td>
          <td>봉화해성병원</td>
          <td>검체 채취 O</td>
          <td>054-674-0011</td>
        </tr>
        <tr>
          <td>상주시</td>
          <td>상주적십자병원</td>
          <td>검체 채취 O</td>
          <td>054-534-3501</td>
        </tr>
        <tr>
          <td>상주시</td>
          <td>상주성모병원</td>
          <td>검체 채취 O</td>
          <td>054-532-5001</td>
        </tr>
        <tr>
          <td>상주시</td>
          <td>상주시 보건소</td>
          <td>검체 채취 O</td>
          <td>054-535-4000</td>
        </tr>
        <tr>
          <td>성주군</td>
          <td>성주군보건소</td>
          <td>검체 채취 O</td>
          <td>054-933-2400</td>
        </tr>
        <tr>
          <td>안동시</td>
          <td>안동시보건소</td>
          <td>검체 채취 O</td>
          <td>054-840-5999<br>054-840-5917</td>
        </tr>
        <tr>
          <td>안동시</td>
          <td>안동의료원</td>
          <td>검체 채취 O</td>
          <td>054-850-6055</td>
        </tr>
        <tr>
          <td>안동시</td>
          <td>안동병원</td>
          <td>검체 채취 O</td>
          <td>054-840-1004</td>
        </tr>
        <tr>
          <td>안동시</td>
          <td>안동성소병원</td>
          <td>검체 채취 O</td>
          <td>054-850-8114</td>
        </tr>
        <tr>
          <td>영덕군</td>
          <td>영덕아산병원</td>
          <td>검체 채취 O</td>
          <td>054-730-0114</td>
        </tr>
        <tr>
          <td>영양군</td>
          <td>영양군보건소</td>
          <td>검체 채취 O</td>
          <td>054-680-5114</td>
        </tr>
        <tr>
          <td>영양군</td>
          <td>영양병원</td>
          <td>검체 채취 O</td>
          <td>054-682-0727</td>
        </tr>
        <tr>
          <td>영주시</td>
          <td>영주시보건소</td>
          <td>검체 채취 O</td>
          <td>054-631-4000</td>
        </tr>
        <tr>
          <td>영천시</td>
          <td>영남대학교 영천병원</td>
          <td>검체 채취 O</td>
          <td>054-338-9000</td>
        </tr>
        <tr>
          <td>영천시</td>
          <td>영천시 보건소</td>
          <td>검체 채취 O</td>
          <td>054-339-7860</td>
        </tr>
        <tr>
          <td>예천군</td>
          <td>예천군보건소</td>
          <td>검체 채취 O</td>
          <td>054-650-8616</td>
        </tr>
        <tr>
          <td>예천군</td>
          <td>예천권병원</td>
          <td>검체 채취 O</td>
          <td>054-654-6611</td>
        </tr>
        <tr>
          <td>울릉군</td>
          <td>울릉군보건의료원</td>
          <td>검체 채취 O</td>
          <td>054-790-6871</td>
        </tr>
        <tr>
          <td>울진군</td>
          <td>울진군의료원</td>
          <td>검체 채취 O</td>
          <td>054-785-7015</td>
        </tr>
        <tr>
          <td>의성군</td>
          <td>의성군보건소</td>
          <td>검체 채취 O</td>
          <td>054-830-6660</td>
        </tr>
        <tr>
          <td>의성군</td>
          <td>공생병원</td>
          <td>검체 채취 O</td>
          <td>054-834-3881</td>
        </tr>
        <tr>
          <td>청도군</td>
          <td>청도군 치매안심센터 내 선별진료소</td>
          <td>검체 채취 O</td>
          <td>054-370-6566</td>
        </tr>
        <tr>
          <td>청도군</td>
          <td>청도군보건소 화양보건지소</td>
          <td>검체 채취 O</td>
          <td>054-370-6572</td>
        </tr>
        <tr>
          <td>청송군</td>
          <td>청송군보건의료원</td>
          <td>검체 채취 O</td>
          <td>054-870-7100</td>
        </tr>
        <tr>
          <td>칠곡군</td>
          <td>칠곡군보건소</td>
          <td>검체 채취 O</td>
          <td>054-973-4000</td>
        </tr>
        <tr>
          <td>칠곡군</td>
          <td>왜관병원</td>
          <td>검체 채취 X</td>
          <td>054-971-1002</td>
        </tr>
        <tr>
          <td>포항시</td>
          <td>포항시 북구보건소</td>
          <td>검체 채취 O</td>
          <td>054-270-4114</td>
        </tr>
        <tr>
          <td>포항시</td>
          <td>포항시 남구보건소</td>
          <td>검체 채취 O</td>
          <td>054-270-4004</td>
        </tr>
        <tr>
          <td>포항시</td>
          <td>포항세명 기독병원</td>
          <td>검체 채취 O</td>
          <td>054-275-0005</td>
        </tr>
        <tr>
          <td>포항시</td>
          <td>포항 성모병원</td>
          <td>검체 채취 O</td>
          <td>054-272-0151</td>
        </tr>
        <tr>
          <td>포항시</td>
          <td>포항의료원</td>
          <td>검체 채취 O</td>
          <td>054-247-0551</td>
        </tr>
      </tbody>
    </table><br>
  </div>
  <div id="tab4" class="tabcontent">
    <?echo $c_seoul[0];?>
    <?echo $c_seoul[1];?>
    <?echo $c_seoul[2];?>
    <?echo $c_seoul[3];?>
    <?echo $c_seoul[4];?>
    <?echo $c_seoul[5];?>
    <?echo $c_seoul[6];?>
    <?echo $c_seoul[7];?>
    <?echo $c_seoul[8];?>
    <?echo $c_seoul[9];?>
    <?echo $c_seoul[10];?>
    <?echo $c_seoul[11];?>
    <?echo $c_seoul[12];?>
    <?echo $c_seoul[13];?>
    <?echo $c_seoul[14];?>
    <?echo $c_seoul[15];?>
    <?echo $c_seoul[16];?>
    <?echo $c_seoul[17];?>
    <?echo $c_seoul[18];?>
    <?echo $c_seoul[19];?>
    <?echo $c_seoul[20];?>
    <?echo $c_seoul[21];?>
    <?echo $c_seoul[22];?>
    <?echo $c_seoul[23];?>
    <?echo $c_seoul[24];?>
    <?echo $c_seoul[25];?>
  </div>
  <br>
</div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-section">
    <span id="bot">코로나19 감염이 의심되면</span><br>
    <span id="botbot">즉시 <b>보건소</b> 및 <b>1339</b>로 신고 바랍니다.</span>
  </div>
</div>
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min">
	<div class="w3-display-middle">
	</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
	<a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
	<div class="w3-xlarge w3-section">
		<p style="font-size: 15px">문의 및 피드백 _ hooneee@kakao.com | coldpaper@kakao.com<br>개발자 정보 _ <a class="fa fa-facebook-official w3-hover-text-indigo" target="_blank" href="https://www.facebook.com/h00n222" style="color:white"> 김동훈</a> | <a class="fa fa-facebook-official w3-hover-text-indigo" target="_blank" href="https://www.facebook.com/profile.php?id=100005424761432" style="color:white"> 이종찬</a><br>영상 출처 _ 뉴메이크 대표 이재천님<br>자료 출처 _ <a href="http://ncov.mohw.go.kr/index.jsp" style="color:white">질병관리본부 코로나바이러스감염증-19</a></p>

	</div>
	<p>Powered by information security club, <b>i-Keeper</b></p>
</footer>

<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
	var navbar = document.getElementById("myNavbar");
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
	} else {
		navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
	}
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
	var x = document.getElementById("navDemo");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}
</script>
<script>
	$(function() {
		$('ul.tab li').click(function() {
			var activeTab = $(this).attr('data-tab');
			$('ul.tab li').removeClass('on');
			$('.tabcontent').removeClass('on');
			$(this).addClass('on');
			$('#' + activeTab).addClass('on');
		})
	});
</script>
</body>
</html>
