<?php

$category = "technology";

$api1 = "933c892bb0394793aa5361ead12c6ee4";
$api2 = "bf264645f86443bb9ea59003954e9c6a";
$api3 = "ca2220ec99c54578ab71db8409f997f8";
$api4 = "7546973d9ff049b589c12d278326babe";
$api5 = "37dcf2a426534653811d9ba1e7e38bae";

if($_GET['key'] == "1"){
    $api = $api1;
} else if($_GET['key'] == "2"){
    $api = $api2;
} else if($_GET['key'] == "3"){
    $api = $api3;
} else if($_GET['key'] == "4"){
    $api = $api4;
} else if($_GET['key'] == "5"){
    $api = $api5;
} 

//--------------------------------------------

$myFile = "data/head-lines-home-in.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=in&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-es.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/everything?q=España&from=2022-01-27&sortBy=popularity&pageSize=50&apiKey='.$api); //all Money

//$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=us&pageSize=100&apiKey='.$api); //all Money

fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-vn.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/everything?q=Vi%E1%BB%87t%20Nam&from=2022-01-27&sortBy=popularity&pageSize=50&apiKey='.$api); //all Money
//$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=us&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ae.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ae&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ar.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ar&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-at.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=at&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-au.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=au&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-be.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=be&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-bg.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=bg&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-br.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=br&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ca.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ca&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ch.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ch&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-cn.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=cn&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-co.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=co&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-cu.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=cu&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-cz.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=cz&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-de.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=de&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-eg.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=eg&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-fr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=fr&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-gb.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=gb&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-gr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=gr&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-hk.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=hk&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);


//--------------------------------------------

$myFile = "data/head-lines-home-id.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=id&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);


//--------------------------------------------

$myFile = "data/head-lines-home-il.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=il&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-it.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=it&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-jp.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=jp&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-kr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=kr&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ma.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ma&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-mx.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=mx&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-my.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=my&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ng.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ng&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-nl.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=nl&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-no.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=no&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-nz.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=nz&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ph.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ph&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-pl.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=pl&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-pt.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=pt&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ro.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ro&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-rs.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=rs&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ru.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ru&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-sa.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=sa&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-se.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=se&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-sg.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=sg&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-si.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=si&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

/*$myFile = "data/head-lines-home-gb.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=sk&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);*/

//--------------------------------------------

$myFile = "data/head-lines-home-th.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=th&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-tr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=tr&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-tw.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=tw&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

/*$myFile = "data/head-lines-home-us.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ua&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);*/

//--------------------------------------------

$myFile = "data/head-lines-home-us.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=us&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-ve.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=ve&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-home-za.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category='.$category.'&country=za&pageSize=100&apiKey='.$api); //all Money
fwrite($fh, $stringData);
fclose($fh);