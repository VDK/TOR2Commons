<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="script.js" ></script>

<title>FlickRSStoCommons</title></head>
<body>
<?php

include_once('TOR/Tor.php');
include_once('password.php');


$tor = new \Zelenin\Tor;
$result = $tor->getToken($email, $password);
$tor = new \Zelenin\Tor($result['Auth']);
$_SESSION['tor'] = serialize($tor);

$subscriptions = $tor->getSubscriptionsList();
$subscriptions = $subscriptions ["subscriptions"];
$fsubscriptions = array();
foreach ($subscriptions as $key => $subscription) {
	if (preg_match_all('/http:\/\/api\.flickr\.com\//', $subscription['url'], $matches )){
		// $items =  $tor->getItemIds($subscription['id'], 'user/-/state/com.google/read');
		// $items =  $items["itemRefs"];
		// if (!empty($items)){
		// 	$subscription['itemRefs'] = $items;
			array_push($fsubscriptions , $subscription);
		// }
	}
}
?>
<form id='mainform'>
<select id='accounts' autofocus>
	<option selected="true" disabled="disabled" >--select one--</option>
<?php
foreach ($fsubscriptions as $key => $fsubscription) {
		echo "<option value=".$fsubscription['id'].">".$fsubscription['title']."</option>";
}
?>
</select>
</form>
<div id="progressbar" class='ui-progressbar'></div>
<div id="content"></div>

</body>
</html>