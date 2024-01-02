<?php
$apiKey = "37dcf2a426534653811d9ba1e7e38bae";

require_once '../NewsPay/includes/DbOperations.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if ($_GET['apiKey'] == $apiKey) {

        if ($_GET['category']  == "sports") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-sports-in.json"));
            }
            if ($_GET['category']  == "sports" and $_GET['country'] == "us") {
                echo nl2br(file_get_contents("data/head-lines-sports-us.json"));
            }
            if ($_GET['category']  == "sports" and $_GET['country'] == "pt") {
                echo nl2br(file_get_contents("data/head-lines-sports-pt.json"));
            }
        }

        if ($_GET['category']  == "health") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-health-in.json"));
            }
            if ($_GET['country'] == "us") {
                echo nl2br(file_get_contents("data/head-lines-health-us.json"));
            }
            if ($_GET['country'] == "pt") {
                echo nl2br(file_get_contents("data/head-lines-health-pt.json"));
            }
        }

        if ($_GET['category']  == "technology") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-technology-in.json"));
            }
            if ($_GET['country'] == "us") {
                echo nl2br(file_get_contents("data/head-lines-technology-us.json"));
            }
            if ($_GET['country'] == "pt") {
                echo nl2br(file_get_contents("data/head-lines-technology-pt.json"));
            }
        }

        if ($_GET['category']  == "entertainment") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-entertainment-in.json"));
            }
            if ($_GET['country'] == "us") {
                echo nl2br(file_get_contents("data/head-lines-entertainment-us.json"));
            }
            if ($_GET['country'] == "pt") {
                echo nl2br(file_get_contents("data/head-lines-entertainment-pt.json"));
            }
        }

        if ($_GET['category']  == "science") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-science-in.json"));
            }
            if ($_GET['country'] == "us") {
                echo nl2br(file_get_contents("data/head-lines-science-us.json"));
            }
            if ($_GET['country'] == "pt") {
                echo nl2br(file_get_contents("data/head-lines-science-pt.json"));
            }
        }
        
        //------------------------------------
        
        if(isset($_GET['category']) and isset($_GET['country'])){
            $db = new DbOperations();
            $db->setNewsData();
        }

        if ($_GET['category']  == "home") {
            if ($_GET['country'] == "IN") {
                echo nl2br(file_get_contents("data/head-lines-home-in.json"));
            }
            if ($_GET['country'] == "US") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "VN") {
                echo nl2br(file_get_contents("data/head-lines-home-vn.json"));
            }
            if ($_GET['country'] == "AE") {
                echo nl2br(file_get_contents("data/head-lines-home-ae.json"));
            }
            if ($_GET['country'] == "AR") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "AT") {
                echo nl2br(file_get_contents("data/head-lines-home-at.json"));
            }
            if ($_GET['country'] == "AU") {
                echo nl2br(file_get_contents("data/head-lines-home-au.json"));
            }
            if ($_GET['country'] == "BE") {
                echo nl2br(file_get_contents("data/head-lines-home-be.json"));
            }
            if ($_GET['country'] == "BG") {
                echo nl2br(file_get_contents("data/head-lines-home-bg.json"));
            }
            if ($_GET['country'] == "BR") {
                echo nl2br(file_get_contents("data/head-lines-home-br.json"));
            }
            if ($_GET['country'] == "CA") {
                echo nl2br(file_get_contents("data/head-lines-home-ca.json"));
            }
            if ($_GET['country'] == "CH") {
                echo nl2br(file_get_contents("data/head-lines-home-ch.json"));
            }
            if ($_GET['country'] == "CN") {
                echo nl2br(file_get_contents("data/head-lines-home-cn.json"));
            }
            if ($_GET['country'] == "CO") {
                echo nl2br(file_get_contents("data/head-lines-home-co.json"));
            }
            if ($_GET['country'] == "CU") {
                echo nl2br(file_get_contents("data/head-lines-home-cu.json"));
            }
            if ($_GET['country'] == "CZ") {
                echo nl2br(file_get_contents("data/head-lines-home-cz.json"));
            }
            if ($_GET['country'] == "DE") {
                echo nl2br(file_get_contents("data/head-lines-home-de.json"));
            }
            if ($_GET['country'] == "EG") {
                echo nl2br(file_get_contents("data/head-lines-home-eg.json"));
            }
            if ($_GET['country'] == "FR") {
                echo nl2br(file_get_contents("data/head-lines-home-fr.json"));
            }
            if ($_GET['country'] == "GB") {
                echo nl2br(file_get_contents("data/head-lines-home-gb.json"));
            }
            if ($_GET['country'] == "GR") {
                echo nl2br(file_get_contents("data/head-lines-home-gr.json"));
            }
            if ($_GET['country'] == "HK") {
                echo nl2br(file_get_contents("data/head-lines-home-hk.json"));
            }
            if ($_GET['country'] == "HU") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "ID") {
                echo nl2br(file_get_contents("data/head-lines-home-id.json"));
            }
            if ($_GET['country'] == "IE") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "IL") {
                echo nl2br(file_get_contents("data/head-lines-home-il.json"));
            }
            if ($_GET['country'] == "IT") {
                echo nl2br(file_get_contents("data/head-lines-home-it.json"));
            }
            if ($_GET['country'] == "JP") {
                echo nl2br(file_get_contents("data/head-lines-home-jp.json"));
            }
            if ($_GET['country'] == "KR") {
                echo nl2br(file_get_contents("data/head-lines-home-kr.json"));
            }
            if ($_GET['country'] == "LT") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "LV") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "MA") {
                echo nl2br(file_get_contents("data/head-lines-home-ma.json"));
            }
            if ($_GET['country'] == "MX") {
                echo nl2br(file_get_contents("data/head-lines-home-mx.json"));
            }
            if ($_GET['country'] == "MY") {
                echo nl2br(file_get_contents("data/head-lines-home-my.json"));
            }
            if ($_GET['country'] == "NG") {
                echo nl2br(file_get_contents("data/head-lines-home-ng.json"));
            }
            if ($_GET['country'] == "NL") {
                echo nl2br(file_get_contents("data/head-lines-home-nl.json"));
            }
            if ($_GET['country'] == "NO") {
                echo nl2br(file_get_contents("data/head-lines-home-no.json"));
            }
            if ($_GET['country'] == "NZ") {
                echo nl2br(file_get_contents("data/head-lines-home-nz.json"));
            }
            if ($_GET['country'] == "PH") {
                echo nl2br(file_get_contents("data/head-lines-home-ph.json"));
            }
            if ($_GET['country'] == "PL") {
                echo nl2br(file_get_contents("data/head-lines-home-pl.json"));
            }
            if ($_GET['country'] == "PT") {
                echo nl2br(file_get_contents("data/head-lines-home-pt.json"));
            }
            if ($_GET['country'] == "RO") {
                echo nl2br(file_get_contents("data/head-lines-home-ro.json"));
            }
            if ($_GET['country'] == "IL") {
                echo nl2br(file_get_contents("data/head-lines-home-il.json"));
            }
            if ($_GET['country'] == "RS") {
                echo nl2br(file_get_contents("data/head-lines-home-rs.json"));
            }
            if ($_GET['country'] == "RU") {
                echo nl2br(file_get_contents("data/head-lines-home-ru.json"));
            }
            if ($_GET['country'] == "SA") {
                echo nl2br(file_get_contents("data/head-lines-home-sa.json"));
            }
            if ($_GET['country'] == "SE") {
                echo nl2br(file_get_contents("data/head-lines-home-se.json"));
            }
            if ($_GET['country'] == "SG") {
                echo nl2br(file_get_contents("data/head-lines-home-sg.json"));
            }
            if ($_GET['country'] == "SI") {
                echo nl2br(file_get_contents("data/head-lines-home-si.json"));
            }
            if ($_GET['country'] == "SK") {
                echo nl2br(file_get_contents("data/head-lines-home-gb.json"));
            }
            if ($_GET['country'] == "TH") {
                echo nl2br(file_get_contents("data/head-lines-home-th.json"));
            }
            if ($_GET['country'] == "TR") {
                echo nl2br(file_get_contents("data/head-lines-home-tr.json"));
            }
            if ($_GET['country'] == "TW") {
                echo nl2br(file_get_contents("data/head-lines-home-tw.json"));
            }
            if ($_GET['country'] == "UA") {
                echo nl2br(file_get_contents("data/head-lines-home-us.json"));
            }
            if ($_GET['country'] == "VE") {
                echo nl2br(file_get_contents("data/head-lines-home-ve.json"));
            }
            if ($_GET['country'] == "ZA") {
                echo nl2br(file_get_contents("data/head-lines-home-za.json"));
            }
            if ($_GET['country'] == "ES") {
                echo nl2br(file_get_contents("data/head-lines-home-es.json"));
            }
        }


         if ($_GET['category']  == "sports" and $_GET['country'] == "pt") {
            echo nl2br(file_get_contents("data/head-lines-sports-in.json"));
        } else  if (!isset($_GET['category']) and $_GET['country'] == "IN") {
            echo nl2br(file_get_contents("data/head-lines-home-in.json"));
        } else  if (!isset($_GET['category']) and $_GET['country'] == "us") {
            echo nl2br(file_get_contents("data/head-lines-home-us.json"));
        } else  if (!isset($_GET['category']) and $_GET['country'] == "pt") {
            echo nl2br(file_get_contents("data/head-lines-home-pt.json"));
        }

    } else {
        echo ("Invalid API key");
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}
