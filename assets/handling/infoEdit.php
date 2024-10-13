<?php include 'database.php'; ?>

<?php
session_start();

$userId = $_SESSION['user_id'];


if(empty($_POST['username'])){} else {
    $newUsername = $conn->real_escape_string(filter_input(INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS));




    $fetchedId = '';
    $sql = "SELECT id FROM userInfo WHERE username = ?";
    $prep = $conn->prepare($sql);
    if (!$prep) {
        die("Error in preparing statement: " . $conn->error);
    }
    $prep->bind_param("s", $newUsername);
    if ($prep->execute()) {
        $prep->store_result();
        if ($prep->num_rows > 0) {
            $prep->bind_result($fetchedId);
            $prep->fetch();}
    
    
    
        if (!empty($fetchedId)) {
            $_SESSION['usernameErr'] = 'Username already exists!';
            header('Location: ../../../myprofile.php');
            exit();
        }
        else{
			unset($_SESSION['usernameErr']);
            $sql = "UPDATE userInfo SET username = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $newUsername, $userId);
            $_SESSION['username'] = $newUsername;
    
            if ($stmt->execute()) {
                header('Location: ../../../myprofile.php');
                $conn->close();
                exit();
            } else {
                header('Location: ../../../myprofile.php');
                $conn->close();
                exit();
            }
    }

    
    }
}
if(empty($_POST['email'])){} else{
    $newEmail = $conn->real_escape_string(filter_input(INPUT_POST,
        'email',
        FILTER_SANITIZE_EMAIL));
    if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailErr'] = 'Invalid email format!';
    }
    else{
        unset($_SESSION['emailErr']);
        $sql = "UPDATE userInfo SET email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newEmail, $userId);

        if ($stmt->execute()) {
            header('Location: ../../../myprofile.php');
            $conn->close();
			exit();
        } else {
            header('Location: ../../../myprofile.php');
            $conn->close();
			exit();
        }
    }
}
if(empty($_POST['bio'])){} else{
    $newBio = $conn->real_escape_string(filter_input(INPUT_POST,
        'bio',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    $sql = "UPDATE userInfo SET bio = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newBio, $userId);
    
    if ($stmt->execute()) {
        header('Location: ../../../myprofile.php');
        $conn->close();
		exit();
    } else {
        header('Location: ../../../myprofile.php');
        $conn->close();
		exit();
    }
    
}

















?>
