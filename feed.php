<?php
session_start();
include_once('TOR/Tor.php');
if (isset($_SESSION['tor']) && isset($_POST['fid'])){
	$fid = $_POST['fid'];
	$tor = unserialize($_SESSION['tor']);
	$items =  $tor->getItemIds($fid, 'user/-/state/com.google/read');
	$items =  $items["itemRefs"];
	$i = 0;
	if (!empty($items)){
		foreach ($items as $key => $value) {
			echo "<div class='fitem' id='".$value['id']."'></div>";
		}
	}
	else{
		echo "No unread items";
	}

}

elseif (isset($_SESSION['tor']) && isset($_POST['itemid'])){
		$itemid = $_POST['itemid'];
		$tor = unserialize($_SESSION['tor']);
		$result = $tor->getItemContents($itemid);
		$result = $result['items'][0];
		$result['itemid'] = $itemid;
		echo json_encode($result);
}


?>