
<?php
	function sanitise_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		session_start();
        $username = $_POST["username"];
		$password = $_POST["password"];

        if($username=='admin'&&$password=='password123'){
            $_SESSION['user']=$username;
            header('Location:welcome.php');
        } else {
            echo "invalid login. <a href='login.php'>Try again</a>";
        }
		
	}
?>