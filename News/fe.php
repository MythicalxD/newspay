<?php

$api1 = "933c892bb0394793aa5361ead12c6ee4";
$api2 = "bf264645f86443bb9ea59003954e9c6a";
$api3 = "ca2220ec99c54578ab71db8409f997f8";
$api4 = "7546973d9ff049b589c12d278326babe";
$api5 = "37dcf2a426534653811d9ba1e7e38bae";

error_reporting(E_ALL);
ini_set('display_errors', '1');

//---------------------IN---------------------

$myFile = "data/head-lines-home-in.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------VN---------------------

$myFile = "data/head-lines-home-vn.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/everything?q=Vi%E1%BB%87t%20Nam&from=2022-01-12&sortBy=popularity&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------AE---------------------

$myFile = "data/head-lines-home-ae.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=ae&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------AR---------------------

$myFile = "data/head-lines-home-ar.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=ar&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------AT---------------------

$myFile = "data/head-lines-home-at.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=at&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------AU---------------------

$myFile = "data/head-lines-home-au.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=au&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------BE---------------------

$myFile = "data/head-lines-home-be.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=be&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------BG---------------------

$myFile = "data/head-lines-home-bg.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=bg&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------BR---------------------

$myFile = "data/head-lines-home-br.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=br&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CA---------------------

$myFile = "data/head-lines-home-ca.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=ca&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CO---------------------

$myFile = "data/head-lines-home-co.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=co&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CN---------------------

$myFile = "data/head-lines-home-cn.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=cn&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CH---------------------

$myFile = "data/head-lines-home-ch.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=ch&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CU---------------------

$myFile = "data/head-lines-home-cu.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=cu&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------CZ---------------------

$myFile = "data/head-lines-home-cz.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=cz&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------DE---------------------

$myFile = "data/head-lines-home-de.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=de&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------EG---------------------

$myFile = "data/head-lines-home-eg.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=eg&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------FR---------------------

$myFile = "data/head-lines-home-fr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=fr&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------GB---------------------

$myFile = "data/head-lines-home-gb.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=gb&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------GR---------------------

$myFile = "data/head-lines-home-gr.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=gr&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------HK---------------------

$myFile = "data/head-lines-home-hk.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=hk&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//---------------------HU---------------------

$myFile = "data/head-lines-home-hu.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?country=hu&pageSize=100&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//-------------------SPORTS--------------------

$myFile = "data/head-lines-sports-in.json";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category=sports&country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-health-in.json";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category=health&country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-science-in.json";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category=science&country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

//--------------------------------------------

$myFile = "data/head-lines-entertainmemt-in.json";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category=entertainment&country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);


//--------------------------------------------

$myFile = "data/head-lines-technology-in.json";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = file_get_contents('https://newsapi.org/v2/top-headlines?category=technology&country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);

echo ("Data Saved !");