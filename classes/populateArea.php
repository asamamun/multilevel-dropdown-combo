<?php
if(isset($_GET['distid'])){
require "database.php";
$selectArea = "select * from `area` where `distid`='".$_GET['distid']."'";
$selectAreaResult = $conn->query($selectArea);

if($selectAreaResult->num_rows){
	$row = array();
	while($r = $selectAreaResult->fetch_assoc()){
		$row[] = $r;
		}
		echo json_encode(["result"=>"1","records"=>$row]);
	}
else echo json_encode(["result"=>"0"]);

}