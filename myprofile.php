<?php include 'assets/inc/header.php' ?>

<?php
    $fetchedEmail = $fetchedBio = '';
    $id = $_SESSION['user_id'];
    $sql = "SELECT email, bio FROM userInfo WHERE id = ?";
    $prep = $conn->prepare($sql);
    if (!$prep) {
        die("Error in preparing statement: " . $conn->error);
    }
    $prep->bind_param("i", $id);
	$prep->execute();
	$prep->store_result();

    if ($prep->num_rows > 0) {
        $prep->bind_result($fetchedEmail, $fetchedBio);
        $prep->fetch();}
?>

<title>Teassr Profile</title>
	</head>
    <body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>
    
        <section id="profile">
            <div class="container">
                <div class="profileItem">
                    <p class="profileTitle"><?php echo $_SESSION['username'] ?>'s Profile</p>
                </div>

                <div class="profileItem">
                    <form id="profileForm" action="assets/handling/infoEdit.php" method="POST">
                        <div>
                            <input type="text" name="username" placeholder="<?php echo $_SESSION['username'] ?>">
                            <button>Change</button>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="<?php echo $fetchedEmail ?>">
                            <button>Change</button>
                        </div>
                        <div>
                            <textarea placeholder="<?php if(empty($fetchedBio)){echo 'Enter Bio';}else{echo $fetchedBio;} ?>" id="bio"  name="bio" rows="5"></textarea>
                            <button>Change</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        
<?php include 'assets/inc/footer.php' ?>