<?php
	// session_start();
	$username = "root";
	$password = "";
	$database = "catering";
	$hostname = "localhost";
	$con = mysqli_connect($hostname,$username,$password,$database) or die("Connection Corrupt");
  $mysqli = new mysqli($hostname, $username, $password,$database);
	// mysqli_connect("localhost", "root", "");
	// mysqli_select_db("catering");

	// settings
	$url = "http://localhost/catering/";
	$title = "Website TH Catering Ibu Tini Hari";
	$no = 1;

	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>
