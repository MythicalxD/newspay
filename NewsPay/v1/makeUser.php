<?php

/* Error Codes Mapping [ 102 : DeviceID Found ] [ 101 : Database Error ] [ 100 : Database Make SUccess ] */

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_POST['uid']) and isset($_POST['Referral']) and isset($_POST['DeviceID'])) {
		//operate the data further

		$db = new DbOperations();

		if ($result = $db->isUserExists($_POST['DeviceID'])) {
			$response['message'] = "User Already Registered";
			$response['Code'] = "102";
		} else {
			$result = $db->createUser($_POST['uid'], $_POST['Referral'], $_POST['DeviceID'], $_POST['Country']);
			if ($result == 1) {
				$response['message'] = "User Registered Successfully";
				$response['Code'] = "100";
			} else {
				$response['message'] = "Some Error Occured Please try again";
				$response['Code'] = "101";
			}
		}
	} else {
		$response['error'] = true;
		$response['message'] = "Required Feilds are missing";
	}
} else {
	$response['error'] = true;
	$response['message'] = "Invalid Request";
}

echo json_encode($response);
