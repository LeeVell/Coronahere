<?php
//Snoopy class include
require_once('/var/www/Snoopy/Snoopy.class.php');

//COVID-19_all 
$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

$snoopy->fetch('https://www.usc.go.kr/tabBoard/view.tc?mn=2510&tabBoardSeq=51&pageSeq=1700&type=B&tabOrder=1');

preg_match('/title="게시글 보기">의성#(.*?)<\/a>/is', $snoopy->results, $pohang);


$pohang[1]=preg_replace('/title="게시글 보기">의성#|<(.*?)>|\((.*?)\)/',"",$pohang[1]);

echo $pohang[1];
?>