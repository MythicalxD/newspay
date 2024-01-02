<?php
/*
 * Postback Example Script.  This script is meant to only be a rough outline of
 * how a postback should operate, and not necessarily used out of the box.
 * 
 * Copyright 2015. CPAlead, LLC. All Rights Reserved
 */

// Define your password, set to blank "" for no password. (optional).
$your_postback_password = "Password";

require_once '../includes/DbOperations.php';
$response = array();


// Setup postback variables.  For a complete list of variables visit https://cpalead.com/documentation/postback/index.php
$password =         $_REQUEST['password'];
$subid =            $_REQUEST['subid'];
$campaign_name =    $_REQUEST['campaign_name'];
$payout =           $_REQUEST['payout'];
$virtual_currency = $_REQUEST['virtual_currency'];

// If (optional) password is set, deny access.
if (!empty($your_postback_password) && isset($password) && !empty($password) && ($your_postback_password != $password))
{
  exit;
}


$db = new DbOperations();
$result = $db->setPointscpa($subid, $payout);
if ($result == 1) {
  echo $subid." Updated Successfully";
} else {
  echo "Some Error Occured Please try again";
}

?>