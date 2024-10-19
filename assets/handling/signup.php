<?php include 'database.php'; ?>

<?php
session_start();

$username = $email = $password = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(empty($_POST['username'])){
		$_SESSION['SUUsernameErr'] = 'Username is required!';
	}
	else{
		$username = $conn->real_escape_string(filter_input(INPUT_POST,
			'username',
			FILTER_SANITIZE_FULL_SPECIAL_CHARS));

		$checkUserSql = "SELECT id FROM userInfo WHERE username = ?";
        $checkUserPrep = $conn->prepare($checkUserSql);
        $checkUserPrep->bind_param("s", $username);
        $checkUserPrep->execute();
        $checkUserPrep->store_result();

        if ($checkUserPrep->num_rows > 0) {
            $_SESSION['SUUsernameErr'] = 'Username already exists!';
        }
        $checkUserPrep->close();
	}


	if(empty($_POST['email'])){
		$_SESSION['SUEmailErr'] = 'Email is required!';
	}
	else{
		$email = $conn->real_escape_string(filter_input(INPUT_POST,
			'email',
			FILTER_SANITIZE_EMAIL));
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	            $_SESSION['SUEmailErr'] = 'Invalid email format!';
	        }
	}



	if(empty($_POST['password'])){
		$_SESSION['SUPasswordErr'] = 'Password is required!';
	}
	else{
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	}


	if(empty($_SESSION['SUUsernameErr']) && empty($_SESSION['SUEmailErr']) && empty($_SESSION['SUPasswordErr'])){
		$sql = "INSERT INTO userInfo (username, email, password) VALUES (?, ?, ?)";
		$prep = $conn->prepare($sql);
		if(!$prep){
			die("Error in preparing statement: " . $conn->error);
		}

		$prep->bind_param("sss", $username, $email, $password);

		if($prep->execute()){
			header('Location: ../../dashboard.php');
			$_SESSION['username'] = $username;
			$_SESSION['numMessages'] = 0;
			$_SESSION['logged'] = true;
			$_SESSION['createdPosts'] = [];
			exit();
		}
		else{
			header('Location: ../../index.php');
    		exit();
		}

		$prep->close();
	}
	else{
		$_SESSION['SUModalOpen'] = true;
		header('Location: ../../index.php');
	}
}


$conn->close();
?>