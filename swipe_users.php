<?php
	$dislike = [];
	$like = [];
	$superlike = [];
	foreach ($_POST as $id => $value) {
		if ($value == "PASS") {}
		elseif ($value == "DISLIKE") $dislike[] = $id;
		elseif ($value == "LIKE") $like[] = $id;
		elseif ($value == "SUPERLIKE") $superlike[] = $id;
		elseif ($value == "MARK_SUPERLIKE") $mark[] = $id;
	}
	
	echo "python $_POST[parent_folder]TndrAssistant.py --dislike";
	foreach ($dislike as $id) {
		echo " ".$id;
	}
	
	echo "<p>python $_POST[parent_folder]TndrAssistant.py --like";
	foreach ($like as $id) {
		echo " ".$id;
	}
	
	echo "<p>python $_POST[parent_folder]TndrAssistant.py --superlike";
	foreach ($superlike as $id) {
		echo " ".$id;
	}
	
	echo "<p>python $_POST[parent_folder]TndrAssistant.py --mark_superlike";
	foreach ($mark as $id) {
		echo " ".$id;
	}
	
	echo "<p>";
?>