<?php
class DbOperations
{

    private $con;

    function __construct() {

        require_once dirname(__FILE__) . '/DbConnect.php';

        $db = new DbConnect();

        $this->con = $db->connect();
    }

    /* CREATE DATABASE */

    public function createUser($uid, $referral, $deviceID, $country) {

        $stmt = $this->con->prepare("INSERT INTO `users` (`UID`, `Referral`, `DeviceID`, `Country`) VALUES (?, ?, ?, ?);");

        $stmt->bind_param("ssss", $uid, $referral, $deviceID, $country);

        if ($stmt->execute()) {
            return 1;
        } else {
            return 2;
        }
    }

    public function getData($uid) {
        
        $this->setRequest($uid);

        $stmt = $this->con->prepare("SELECT `UID`, `Referral`, `Gold`, `Gold_Today`, `Daily`, `DailyLogin`, `Booster`, `Task1`, `Task2`, `Task3`, `Task4`, `Task5`, `Task6`, `Task7`, `Task8`, `Task9`, `Ban`, `Time_Read`, `Level`, `ReferralNum`, `OfferEarn`, `PayoutNum`, `WatchNum`, `Version`, `Country`, `ReferralDone`, `PayoutEmail`, `PayLock`, `Invite`, `Task10`, `codesNum`, `med` FROM `users` WHERE UID = ?");

        $stmt->bind_param("s", $uid);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();
            return json_encode($row);
        } else {
            return NULL;
        }
    }

    public function setPointscpa($uid, $points) {

        $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + ?, `Gold_Today` = Gold_Today + ?, `OfferEarn` = OfferEarn + ? WHERE `users`.`UID` = ?");

        $stmt->bind_param("iiis", $points, $points, $points, $uid);

        if ($stmt->execute()) {
            return 1;
        } else {
            return 2;
        }
    }

    public function setPoints($uid, $points, $hash) {

        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + ?, `Gold_Today` = Gold_Today + ?, `Aid` = ? WHERE `users`.`UID` = ?");

            $stmt->bind_param("iiss", $points, $points, $hash, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
        return 3;
    }

    public function setTime($uid, $time, $hash) {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            $stmt = $this->con->prepare("UPDATE `users` SET `Time_Read` = Time_Read + 5, `TimeReadCopy` = `TimeReadCopy` + 5, `Aid` = ? WHERE `users`.`UID` = ?");

            $stmt->bind_param("ss", $hash, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    public function setNewsGold($uid, $hash) {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            if ($this->checkNews($uid)) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 100, `Booster` = Booster + 1, `Gold_Today` = Gold_Today + 100, `Aid` = ?  WHERE `users`.`UID` = ?");

                $stmt->bind_param("ss", $hash, $uid);

                if ($stmt->execute()) {
                    return 3;
                } else {
                    return 2;
                }
            } else {

                $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 400, `Booster` = Booster + 1, `Gold_Today` = Gold_Today + 400, `Aid` = ?  WHERE `users`.`UID` = ?");

                $stmt->bind_param("ss", $hash, $uid);

                if ($stmt->execute()) {
                    return 1;
                } else {
                    return 2;
                }
            }
        }
    }



    public function setCoinsWatch($uid, $coins, $hash) //coins to increse
    {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            if ($this->checkWatch($uid)) {
                return 3;
            } else {

                $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + ?, `WatchNum` = WatchNum + 1, `Gold_Today` = Gold_Today + ?, `Aid` = ? WHERE `users`.`UID` = ?");

                $stmt->bind_param("iiss", $coins, $coins, $hash, $uid);

                if ($stmt->execute()) {
                    return 1;
                } else {
                    return 2;
                }
            }
        }
    }

    public function setMed($uid, $coins, $hash) //coins to increse
    {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            if ($this->checkmed($uid)) {
                return 3;
            } else {

                $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 3000, `med` = med + 1, `Gold_Today` = Gold_Today + 3000, `Aid` = ? WHERE `users`.`UID` = ?");

                $stmt->bind_param("ss", $hash, $uid);

                if ($stmt->execute()) {
                    return 1;
                } else {
                    return 2;
                }
            }
        }
    }

    public function setDaily($uid, $daily, $hash) //coins to increse
    {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            $stmt = $this->con->prepare("UPDATE `users` SET `Daily` = 1, `Aid` = ?, `Gold` = Gold + 5000, `Gold_Today` = Gold_Today + 5000 WHERE `users`.`UID` = ?");

            $stmt->bind_param("ss", $hash, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    public function setTask($uid, $lucky, $num, $hash) //coins to increse
    {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            if ($num == 1) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task1` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 2) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task2` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 3) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task3` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 4) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task4` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 5) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task5` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 6) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task6` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 7) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task7` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 8) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task8` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 9) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task9` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            } else if ($num == 10) {

                $stmt = $this->con->prepare("UPDATE `users` SET `Task10` = ?, `Aid` = ? WHERE `users`.`UID` = ?");
            }

            $stmt->bind_param("iss", $lucky, $hash, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    public function resetTokens($tokens) {
        $stmt1 = $this->con->prepare("UPDATE `users` SET `Task8` = 0 WHERE `Task8` = 2");

        $stmt2 = $this->con->prepare("UPDATE `users` SET `Task9` = 0 WHERE `Task9` = 2");

        $stmt = $this->con->prepare("UPDATE `users` SET `Gold_Today` = 0, `Time_Read` = 0, `Booster` = 0, `Daily` = 0, `med` = 0");

        $stmt->bind_param("i", $tokens);

        $stmt1->execute();
        $stmt2->execute();

        if ($stmt->execute()) {
            return 1;
        } else {
            return 2;
        }
    }

    public function resetLogin($day) {

        $stmt2 = $this->con->prepare("UPDATE `users` SET `DailyLogin` = `DailyLogin` + 1 WHERE `DailyLogin` < 6;");
        $stmt2->execute();
        $stmt = $this->con->prepare("UPDATE `users` SET `DailyLogin` = 1 WHERE `DailyLogin` = 6;");
        $stmt->execute();
    }

    public function withdrawal($uid, $points, $aid) {
        if ($this->validate($uid, $aid)) {
            return 3;
        } else {

            $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold - ?, `Aid` = ? WHERE `users`.`UID` = ?");

            $stmt->bind_param("iss", $points, $aid, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    public function setEmail($uid, $email) {

        $stmt = $this->con->prepare("UPDATE `users` SET `PayoutEmail` = ? WHERE `users`.`UID` = ?");

        $stmt->bind_param("ss", $email, $uid);

        if ($stmt->execute()) {
            return 1;
        } else {
            return 2;
        }
    }

    public function setCodes($uid, $coins, $hash) //coins to increse
    {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {
            $stmt = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + ?, `codes` = codes + ?, `codesNum` = codesNum + 1, `Gold_Today` = Gold_Today + ?, `Aid` = ? WHERE `users`.`UID` = ?");
            $stmt->bind_param("iiiss",$coins, $coins, $coins, $hash, $uid);
            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }


    public function setLevel($uid, $hash) {
        if ($this->validate($uid, $hash)) {
            return 3;
        } else {

            $stmt = $this->con->prepare("UPDATE `users` SET `Level` = `Level` + 1, `Aid` = ? WHERE `users`.`UID` = ?");

            $stmt->bind_param("ss", $hash, $uid);

            if ($stmt->execute()) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    public function referral($uid, $referral_opposite) {
        //check for can referral ?
        $check = $this->con->prepare("SELECT UID FROM users WHERE UID = ? AND ReferralDone = 0;");
        $check->bind_param("s", $uid);
        $check->execute();
        $check->store_result();
        if ($check->num_rows > 0) {
            //referral not done

            $stmt = $this->con->prepare("SELECT UID FROM `users` WHERE `Referral` = ?");
            $stmt->bind_param("s", $referral_opposite);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt4 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 2000, `Gold_Today` = Gold_Today + 2000, `ReferralNum` = `ReferralNum` + 1 WHERE `users`.`Referral` = ? AND `ReferralNum` < 15");
                $stmt4->bind_param("s", $referral_opposite);
                $stmt4->execute();

                $stmt5 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 3000, `Gold_Today` = Gold_Today + 3000, `ReferralNum` = `ReferralNum` + 1 WHERE `users`.`Referral` = ? AND `ReferralNum` < 50 AND `ReferralNum` > 14");
                $stmt5->bind_param("s", $referral_opposite);
                $stmt5->execute();

                $stmt6 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 4500, `Gold_Today` = Gold_Today + 4500, `ReferralNum` = `ReferralNum` + 1 WHERE `users`.`Referral` = ? AND `ReferralNum` < 150 AND `ReferralNum` > 49");
                $stmt6->bind_param("s", $referral_opposite);
                $stmt6->execute();

                $stmt7 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 6000, `Gold_Today` = Gold_Today + 6000, `ReferralNum` = `ReferralNum` + 1 WHERE `users`.`Referral` = ? AND `ReferralNum` < 400 AND `ReferralNum` > 149");
                $stmt7->bind_param("s", $referral_opposite);
                $stmt7->execute();

                $stmt8 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 5000, `Gold_Today` = Gold_Today + 5000, `ReferralNum` = `ReferralNum` + 1 WHERE `users`.`Referral` = ? AND `ReferralNum` > 399");
                $stmt8->bind_param("s", $referral_opposite);
                $stmt8->execute();


                $stmt1 = $this->con->prepare("UPDATE `users` SET `Gold` = Gold + 10000, `Gold_Today` = Gold_Today + 10000 WHERE `users`.`UID` = ?;");
                $stmt1->bind_param("s", $uid);
                if ($stmt1->execute()) {
                    $stmt2 = $this->con->prepare("UPDATE `users` SET `ReferralDone` = '1' WHERE `users`.`UID` = ?;");
                    $stmt2->bind_param("s", $uid);
                    if ($stmt2->execute()) {
                        return 1; //success
                        $stmt2->close();
                        $stmt1->close();
                        $stmt->close();
                    }
                } else {
                    return 2; //error user not found
                }
            } else {
                return 0; // error invalid code
            }
        } else {
            return 3;
        }
    }

    public function setNewsData() {
        $stmt = $this->con->prepare("UPDATE `data` SET `req` = `req` + 1;");
        $stmt->execute();
    }

    public function isUserExists($deviceID) {
        $stmt = $this->con->prepare("SELECT * FROM users WHERE DeviceID=?");
        $stmt->bind_param("s", $deviceID);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function validate($uid, $hash) {
        $stmt = $this->con->prepare("SELECT * FROM users WHERE UID=? AND Aid = ?");
        $stmt->bind_param("ss", $uid, $hash);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function checkNews($uid) {
        $stmt = $this->con->prepare("SELECT `Booster` FROM users WHERE UID=? AND `Booster` > 100");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function checkWatch($uid) {
        $stmt = $this->con->prepare("SELECT `WatchNum` FROM users WHERE UID=? AND `WatchNum` > 10");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }

    public function checkmed($uid) {
        $stmt = $this->con->prepare("SELECT `med` FROM users WHERE UID=? AND `med` > 3");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }


    public function requestspaming($uid) {
        $stmt = $this->con->prepare("SELECT `LastRequest` FROM users WHERE UID=?");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $result_1 = $row['LastRequest'];
        return $result_1;
    }

    public function setspaming($uid, $time) {
        $stmt = $this->con->prepare("UPDATE `users` SET `LastRequest` = ? WHERE UID=?");
        $stmt->bind_param("is", $time, $uid);
        $stmt->execute();
    }

    public function setLock($uid) {
        $stmt = $this->con->prepare("UPDATE `users` SET `PayLock` = `PayLock` + 1 WHERE UID=?");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
    }

    public function decode($hash) {
        /*$hash = "67b1fd18bbe13cbd62a5d1200e530fe870d1621b8c119fff9ea5913cc4dfba0dcf844";*/
        $lenVal = substr($hash, strlen($hash) - 1);
        $pos = 21;
        $result = substr($hash, $pos, $lenVal);
        return $result;
    }

    public function verifyBan($uid) {
        $stmt = $this->con->prepare("UPDATE `users` SET `Ban` = '1' WHERE UID=?");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
    }

    public function setRequest($uid) {

        $stmt = $this->con->prepare("UPDATE `users` SET `RequestNum` = RequestNum + 1 WHERE `users`.`UID` = ?");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
    }
}