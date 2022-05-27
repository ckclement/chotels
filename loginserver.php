<?php
$invalid=""; //variable that stores error message

if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$invalid="Incorrect";
		}
		else{
			$username = $_POST['username']; 
			$password = md5($_POST['password']); 
			
			$conn = mysqli_connect("localhost", "root", "");
			$db = mysqli_select_db($conn, "clementhotels");  //db name "clementhotels"
			$query = mysqli_query($conn, "SELECT * FROM users WHERE password='$password' AND username='$username'");
			
			$rows = mysqli_num_rows($query);
			if($rows == 1){
				header("Location: index.php"); //redirecting
			}else{
				$invalid="Incorrect";
			}
				mysqli_close($conn);
		}
}
?>