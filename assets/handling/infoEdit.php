<?php include 'database.php'; ?>

<?php
session_start();


$tempId = '';
$sql2 = "SELECT id FROM userInfo WHERE username = ?";
$prep2 = $conn->prepare($sql2);
if (!$prep2) {
    die("Error in preparing statement: " . $conn->error);
}
$prep2->bind_param("s", $_SESSION['username']);
if ($prep2->execute()) {
    $prep2->store_result();
    if ($prep2->num_rows > 0) {
        $prep2->bind_result($tempId);
        $prep2->fetch();}
}
$prep2->close();

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
            $stmt->bind_param("si", $newUsername, $tempId);
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
        $stmt->bind_param("si", $newEmail, $tempId);

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
    $stmt->bind_param("si", $newBio, $tempId);
    
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
