<?php

 header("Access-Control-Allow-Origin: *");

function writeData($sData, $sFilePath) {

	$sTargetFile = fopen($sFilePath, "a");

	fwrite($sTargetFile, $sData);
	fclose($sTargetFile);

}

if(isset($_POST['sData'])) {

	writeData($_POST['sData'], "testLog.txt");
	echo "done";

}
