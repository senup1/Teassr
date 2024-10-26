<?php include 'assets/inc/header.php' ?>

<?php
    if(!isset($_SESSION['logged'])){
        header('Location: index.php');
    } 
?>

<?php
    $fetchedBio = '';
    $username = $_SESSION['username'];
    $sql = "SELECT bio FROM userInfo WHERE username = ?";
    $prep = $conn->prepare($sql);
    if (!$prep) {
        die("Error in preparing statement: " . $conn->error);
    }
    $prep->bind_param("s", $username);
	$prep->execute();
	$prep->store_result();

    if ($prep->num_rows > 0) {
        $prep->bind_result( $fetchedBio);
        $prep->fetch();}
    $conn->close();
?>

<!-- below php is for radio buttons for preselected image selection -->
<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fetchedTitle = '';
        $fetchedSRC = '';
        if(isset($_POST['postImage'])){
            if(isset($_POST['presetPostTitle'])){
                $fetchedTitle = $_POST['presetPostTitle'];
                $fetchedSRC = $_POST['postImage'];
                array_unshift($_SESSION['createdPosts'], $fetchedSRC);
            }
            else{
                $fetchedSRC = $_POST['postImage'];
                array_unshift($_SESSION['createdPosts'], $fetchedSRC);
            }
        }
    }
    
?>

<title>My Teassr Profile</title>
</head>

<body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

    <section class="myProfile">
        <div class="container">
            <div class="myProfileItem">
                <img class="accountPFP" src="assets/imgs/pfps/blankpfp.png">
            </div>
            <div class="myProfileItem">
                <p class="accountUsername"><?php echo $_SESSION['username'] ?></p>
            </div>
            <div class="myProfileItem">
                <p class="accountBio"><?php echo $fetchedBio ?></p>
            </div>
            <div class="myProfileItem">
                <ul class="myProfilePosts">
                    <?php foreach ($_SESSION['createdPosts'] as $post): ?>
                        <li class="myProfilePost">
                            <div>
                                <img class="accountPostImage" src="<?php echo $post ?>">
                                <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl4.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl5.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl6.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl8.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl9.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl10.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl1.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl2.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl3.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl1.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl2.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="myProfilePost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl3.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div id="makePost">
            <button onclick="makePost()">New Teass &plus;</button>
        </div>
    </section>

    <?php include 'assets/modals/postPresetsModal.php' ?>

    <?php include 'assets/modals/postModal.php' ?>

    <?php include 'assets/inc/footer.php' ?>