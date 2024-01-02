<?php

$category = "technology";

$api1 = "933c892bb0394793aa5361ead12c6ee4";
$api2 = "bf264645f86443bb9ea59003954e9c6a";
$api3 = "ca2220ec99c54578ab71db8409f997f8";
$api4 = "7546973d9ff049b589c12d278326babe";
$api5 = "37dcf2a426534653811d9ba1e7e38bae";


$api = $api4

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