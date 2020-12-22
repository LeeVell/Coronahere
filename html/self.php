<?
$c_info= @file("/var/www/auto/coronaMain.txt");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
  <meta property="og:title" content="CORONA HERE - 코로나히어">
  <meta property="og:description" content="전국 시·군·구 실시간 코로나19 정보 확인">
  <meta property="og:image" content="assets/img/logo/logo2.png">
  <link rel=" shortcut icon" href="fabi.ico">
  <link rel="icon" href="assets/img/ico/fabi.ico">
  <meta name="naver-site-verification" content="1fd479b2df433932037779a979a91cbf0cc96799"/>
  <meta name="description" content="전국 시·군·구의 실시간 코로나-19 현황을 제공하는 사이트입니다.">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/  font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap&subset=korean" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>
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
          <li><a class="w3-hide-medium w3-hide-large" href="index_mask" onclick="toggleFunction()">마스크 판매 정보<span class="badge badge-primary ml-1">Beta</span></a></li>
          <li><a class="w3-hide-large" href="http://www.mohw.go.kr/react/popup_200128.html" onclick="toggleFunction()">선별진료소 및 안심병원 현황</a></li>
          <li><a class="w3-hide-large" href="self.php#aboutself" target="_blank">자가격리자 행동수칙</a></li>
          <li><a href="http://ncov.mohw.go.kr/index_main.jsp" target="_blank">질병관리본부</a></li>
          <li><a href="https://www.youtube.com/playlist?list=PL_-Emxqwow0AXFAJgXcEq5XDqAP3vbdJa" target="_blank">COVID-19 정부브리핑</a></li>
        </ul>
      </div>
    </div>

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

 <div class="w3-content w3-container w3-padding-64">
  <h2 id="hh" class="w3-center" style="color: #1C1C1C"><b>자가격리대상자</b> 생활수칙</h2><br>
  <img src="/assets/img/daesang.jpeg" style="width: 100%; height: auto;"><br><br><br><br>
  <h2 id="hhh" class="w3-center" style="color: #1C1C1C">자가격리대상자 <b>가족·동거인</b> 생활수칙</h2><br>
  <img src="/assets/img/family.jpeg" style="width: 100%; height: auto;"><br><br>
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
  <a href="#homeself" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <p style="font-size: 15px">문의 및 피드백 _ hooneee@kakao.com<br>개발자 정보 _ <a class="fa fa-facebook-official w3-hover-text-indigo" target="_blank" href="https://www.facebook.com/h00n222"> 김동훈</a> | <a class="fa fa-facebook-official w3-hover-text-indigo" target="_blank" href="https://www.facebook.com/profile.php?id=100005424761432"> 이종찬</a><br>영상 출처 _ 뉴메이크 대표 이재천님</p>
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

</body>
</html>