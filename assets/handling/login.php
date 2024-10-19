<?php include 'database.php'; ?>

<?php
session_start();

$username = $password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (empty($_POST['username'])) {
		$_SESSION['usernameErr'] = 'Username or Email is required.';
		$_SESSION['modalOpen'] = true;
	} else {
		$username = $conn->real_escape_string(filter_input(
			INPUT_POST,
			'username',
			FILTER_SANITIZE_FULL_SPECIAL_CHARS
		));
	}

	if (empty($_POST['password'])) {
		$_SESSION['passwordErr'] = 'Password is required.';
		$_SESSION['modalOpen'] = true;
	} else {
		$password = $_POST['password'];
	}

	if (empty($_SESSION['usernameErr']) && empty($_SESSION['passwordErr'])) {
		$sql = "SELECT id, username, email, password FROM userInfo WHERE username = ? or email = ?";
		$prep = $conn->prepare($sql);
		if (!$prep) {
			die("Error in preparing statement: " . $conn->error);
		}

		$prep->bind_param("ss", $username, $username);
		$prep->execute();
		$prep->store_result();

		if ($prep->num_rows > 0) {
			$prep->bind_result($userId, $fetchedUsername, $fetchedEmail, $hashedPassword);
			$prep->fetch();

			if (password_verify($password, $hashedPassword)) {
				$_SESSION['username'] = $fetchedUsername;
				$_SESSION['logged'] = true;
				$_SESSION['numMessages'] = 0;
				$_SESSION['createdPosts'] = [];
				header('Location: ../../dashboard.php');
				exit();
			} else {
				$_SESSION['loginErr'] = 'Invalid Login/Password!';
				$_SESSION['modalOpen'] = true;
			}
		} else {
			$_SESSION['loginErr'] = 'Invalid Login/Password!';
			$_SESSION['modalOpen'] = true;
		}

		$prep->close();
	}





	header('Location: ../../index.php');
	exit();




}

$conn->close();

?>