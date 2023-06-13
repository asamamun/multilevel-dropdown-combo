<?php
if(isset($_GET['areaid'])){
require "database.php";
$selectAreainfo = "select * from `areainfo` where `areaid`='".$_GET['areaid']."'";
$selectAreainfoResult = $conn->query($selectAreainfo);

if($selectAreainfoResult->num_rows){
	$row = array();
	while($r = $selectAreainfoResult->fetch_array(MYSQLI_ASSOC)){
		$row[] = $r;
		}
		echo json_encode(["result"=>"1","records"=>$row]);
	}
else echo json_encode(["result"=>"0"]);
}