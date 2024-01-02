<?php

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	$db = new DbOperations();
	$time =  $db->requestspaming($_GET['uid']);
	$micro = round(microtime(true));
	if (($micro - $time) > 1) {
		$db->setspaming($_GET['uid'], $micro);
		
	}else{
	}

	if (isset($_GET['uid']) and !isset($_GET['Points']) and !isset($_GET['Referral']) and !isset($_GET['Links'])) {
		//operate the data further

		$db = new DbOperations();
		$result = $db->getData($_GET['uid']);
		echo $result;
	} else {
		$response['error'] = true;
		$response['message'] = "Required Feilds are missing";
	}

} else {
	$response['error'] = true;
	$response['message'] = "Invalid Request";
}

echo json_encode($response);
