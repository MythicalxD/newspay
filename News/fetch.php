<?php


clearstatcache();
$data = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all headlines
if(file_exists(("data/head-lines-home-in.json"))) {
    $file = "data/head-lines-home-in.json";
    $myfile = file_get_contents($file);
}else {
    $myfile = fopen("data/head-lines-home-in.json", "w") or die("Unable to open file 1");
};
$txt = $data;
fwrite($myfile, $txt);
fclose($myfile);
clearstatcache();

$myFile = "data/Money_page1.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData  = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&apiKey=37dcf2a426534653811d9ba1e7e38bae'); //all Money
fwrite($fh, $stringData);
fclose($fh);


?>