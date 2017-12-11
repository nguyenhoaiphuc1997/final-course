<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_SITE", "http://localhost/final-course/app/");
?>
<?php
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql = "select * from users where email='$email' and password='$password'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION["login"] = true;
			$_SESSION["userid"] = $row["id"];
			$_SESSION["flash"] = "Dang nhap thanh cong";
		}else{
			$_SESSION["flash"] = "Khong duoc quyen";
		}
	}else{
		$_SESSION["flash"] = "Wrong params";
	}
	header("location: ".URL_SITE."index.php");
?>
