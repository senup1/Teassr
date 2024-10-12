<?php include 'database.php'; ?>

<?php
session_start();

$userId = $_SESSION['user_id'];


if(empty($_POST['username'])){} else {
    $newUsername = $conn->real_escape_string(filter_input(INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    $checkUserSql = "SELECT id FROM userInfo WHERE username = ?";
    $checkUserPrep = $conn->prepare($checkUserSql);
    $checkUserPrep->bind_param("s", $newUsername);
    $checkUserPrep->execute();
    $checkUserPrep->store_result();

    if ($checkUserPrep->num_rows > 0) {
        $_SESSION['SUUsernameErr'] = 'Username already exists!';
    }
    else{
        $sql = "UPDATE userInfo SET username = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newUsername, $userId);
        $_SESSION['username'] = $newUsername;

        if ($stmt->execute()) {
            echo "Profile updated successfully.";
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    }
    $checkUserPrep->close();
}
if(empty($_POST['email'])){} else{
    $newEmail = $conn->real_escape_string(filter_input(INPUT_POST,
        'email',
        FILTER_SANITIZE_EMAIL));
    if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['SUEmailErr'] = 'Invalid email format!';
    }
    else{
        $sql = "UPDATE userInfo SET email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newEmail, $userId);

        if ($stmt->execute()) {
            echo "Profile updated successfully.";
        } else {
            echo "Error updating profile: " . $conn->error;
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
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . $conn->error;
    }   
    
}















$stmt->close();
?>
