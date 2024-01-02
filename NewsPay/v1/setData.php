
<?php

/* Error Codes Mapping [ 80 : Points Set Success ] [ 81 : Points Update Failed ] */
/* Code Maping [ 12 : Update Time ] [ 13 : Update Gold ] [ 14 : Update Gold and Requests ] [ 15 : Referral ] */
/* Code Maping [ 16 : Update Coins and Tokens ] [ 17 : Update Coins and GameZop ] [ 18 : Update Coins and WatchVideo ] */
/* Code Maping [ 23 : Update Daily ] [ 25 : Update Lucky ] [ 50 : Withdrawal ] [ 300 : Ban User ] [ 301 : set Visit ]*/

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['uid']) and isset($_POST['code'])) {
        //operate the data further

        if ($_POST['code'] == 13) {

            $db = new DbOperations();
            $coins = $db->decode($_POST['Gold']);
            $result = $db->setPoints($_POST['uid'], $coins, $_POST['Gold']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Updated Successfully";
                $response['Code'] = "90";
            } else if ($result == 3) {
                $response['error'] = false;
                $response['message'] = "Invaild Token";
                $response['Code'] = "92";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "91";
            }
        } else if ($_POST['code'] == 12) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Time']);
            $result = $db->setTime($_POST['uid'], $data, $_POST['Time']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Updated Successfully";
                $response['Code'] = "80";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "81";
            }
        } else if ($_POST['code'] == 14) {
            $db = new DbOperations();
            $result = $db->setNewsGold($_POST['uid'], $_POST['Gold']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "400";
                $response['Code'] = "100";
            } else  if ($result == 3) {
                $response['error'] = false;
                $response['message'] = "100";
                $response['Code'] = "100";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "101";
            }
        } else if ($_POST['code'] == 39) {
            $db = new DbOperations();
            $data = $db->decode($_POST['med']);
            $result = $db->setMed($_POST['uid'], $data, $_POST['med']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Rewards Recieved";
                $response['Code'] = "161";
            } else  if ($result == 3) {
                $response['error'] = false;
                $response['message'] = "You have been meditating for 30min comeback tomorrow";
                $response['Code'] = "161";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "162";
            }
        } else if ($_POST['code'] == 27) {
            $db = new DbOperations();
            $result = $db->setEmail($_POST['uid'], $_POST['Email']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Email Saved Successfully ";
                $response['Code'] = "150";
            } else  if ($result == 3) {
                $response['error'] = false;
                $response['message'] = "Invaild Token";
                $response['Code'] = "151";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "152";
            }
        }  else if ($_POST['code'] == 32) {
            $db = new DbOperations();
            $data = $db->decode($_POST['c']);
            $result = $db->setCodes($_POST['uid'], $data, $_POST['c']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Code Redeemed Successfully ";
                $response['Code'] = "170";
            } else  if ($result == 3) {
                $response['error'] = false;
                $response['message'] = "Invaild Token";
                $response['Code'] = "171";
            } else {
                $response['error'] = true;
                $response['message'] = "Some Error Occured Please try again";
                $response['Code'] = "172";
            }
        } else if ($_POST['code'] == 15) {
            $db = new DbOperations();
            $result = $db->referral($_POST['uid'], $_POST['Ref']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Referral Success";
                $response['Code'] = "140";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
                $response['Code'] = "141";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Referral Already Done!";
                $response['Code'] = "142";
            }
        } else if ($_POST['code'] == 18) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Gold']);
            $result = $db->setCoinsWatch($_POST['uid'], $data, $_POST['Gold']);
            /** Set Tokens -1 */
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Points Added!";
                $response['Code'] = "110";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
                $response['Code'] = "111";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "You have watch all ads";
                $response['Code'] = "112";
            }
        } else if ($_POST['code'] == 28) {
            $db = new DbOperations();
            $result = $db->setLock($_POST['uid']);
            /** Set Tokens -1 */
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Done";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Done!";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Error!";
            }
        } else if ($_POST['code'] == 23) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Daily']);
            $result = $db->setDaily($_POST['uid'], $data, $_POST['Daily']);
            /** Set Tokens -1 */
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Update Success";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
            }
        } else if ($_POST['code'] == 26) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Daily']);
            $result = $db->setLevel($_POST['uid'], $_POST['Level']);
            /** Set Tokens -1 */
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Update Success";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
            }
        } else if ($_POST['code'] == 24) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Task']);
            $result = $db->setTask($_POST['uid'], $data, $_POST['num'], $_POST['Task']);
            /** Set Tokens -1 */
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Update Success";
                $response['Code'] = 120;
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
                $response['Code'] = 121;
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
                $response['Code'] = 122;
            }
        } else if ($_POST['code'] == 25) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Ref']);
            $result = $db->withdrawal($_POST['uid'], $data, $_POST['Ref']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Withdrawal Success";
                $response['Code'] = "130";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
                $response['Code'] = "131";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
                $response['Code'] = "132";
            }
        } else if ($_POST['code'] == 50) {
            $db = new DbOperations();
            $data = $db->decode($_POST['Coins']);
            $result = $db->withdrawal($_POST['uid'], $data, $_POST['Coins']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "Withdrawal Success";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
            }
        } else if ($_POST['code'] == 301) {
            $db = new DbOperations();
            $data = $db->decode($_POST['visit']);
            $result = $db->withdrawal($_POST['uid'], $data, $_POST['visit']);
            if ($result == 1) {
                $response['error'] = false;
                $response['message'] = "visit to get points";
            } elseif ($result == 0) {
                $response['error'] = true;
                $response['message'] = "Invalid Code!";
            } elseif ($result == 3) {
                $response['error'] = true;
                $response['message'] = "Token Expired!";
            }
        } else if ($_POST['code'] == 300) { //Ban User
            $db = new DbOperations();
            $result = $db->verifyBan($_POST['uid']);
            if ($result) {
                $response['error'] = false;
                $response['message'] = "Invalid Activity Detected!";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "Invalid Request";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Invalid Request";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid Request";
}

echo json_encode($response);
