<?php include 'assets/inc/header.php' ?>

<?php
    if(!isset($_SESSION['logged'])){
        header('Location: index.php');
    } 
?>

<?php
    $fetchedEmail = $fetchedBio = '';
    $username = $_SESSION['username'];
    $sql = "SELECT email, bio FROM userInfo WHERE username = ?";
    $prep = $conn->prepare($sql);
    if (!$prep) {
        die("Error in preparing statement: " . $conn->error);
    }
    $prep->bind_param("s", $username);
	$prep->execute();
	$prep->store_result();

    if ($prep->num_rows > 0) {
        $prep->bind_result($fetchedEmail, $fetchedBio);
        $prep->fetch();}
    $conn->close();
?>

<title>Teassr Settings</title>
	</head>
    <body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>
    
        <section id="settings">
            <div class="container">
                <div class="settingsItem">
                    <p class="settingsTitle"><?php echo $_SESSION['username'] ?>'s Profile Settings</p>
                </div>
                <div class="settingsItem">
                    <img id="settingsImg" src="../../../../assets/imgs/pfps/blankpfp.png">
                </div>

                <div class="settingsItem">
                    <form id="settingsForm" action="assets/handling/infoEdit.php" method="POST">
                        <div class="settingsSubItem">
                            <input type="text" name="username" placeholder="<?php echo $_SESSION['username'] ?>">
                            <button>Change</button>
                        </div>
                        <div style="color: red;"><?= isset($_SESSION['usernameErr']) ? $_SESSION['usernameErr'] : ''; ?></div>
                        <div class="settingsSubItem">
                            <input type="email" name="email" placeholder="<?php echo $fetchedEmail ?>">
                            <button>Change</button>
                        </div>
                        <div style="color: red;"><?= isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : ''; ?></div>
                        <div class="settingsSubItem">
                            <textarea placeholder="<?php if(empty($fetchedBio)){echo 'Enter Bio';}else{echo $fetchedBio;} ?>" id="bio"  name="bio" rows="5"></textarea>
                            <button>Change</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <?php
			unset($_SESSION['usernameErr']);
			unset($_SESSION['emailErr']);
		?>

        
<?php include 'assets/inc/footer.php' ?>