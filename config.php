<?php
Class DbConnection{
    function getdbconnect(){
    	$sname="localhost";
		$uname="root";
		$db="php";

		$conn=new mysqli($sname,$uname,"",$db);
		return $conn;
    }

	

	}


?>