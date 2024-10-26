<?php include 'assets/inc/header.php' ?>

<?php
    if(!isset($_SESSION['logged'])){
        header('Location: index.php');
    } 
?>

<title>Teassr | holleratyaboy140</title>
</head>

<body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

    <section class="accountPage">
        <div class="container">
            <div class="accountItem">
                <img class="accountPFP" src="assets/imgs/pfps/pfp3.png">
            </div>
            <div class="accountItem">
                <p class="accountUsername">holleratyaboy140</p>
            </div>
            <div class="accountItem">
                <p class="accountBio">Just a chill person who loves connecting with others! I enjoy sharing laughs, good vibes, and relatable content. Whether it's music, memes, or just chatting about life, I'm all about keeping it fun and friendly. Hit me up, and let’s vibe together!</p>
            </div>
            <div class="accountItem">
                <ul class="accountPosts">
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl4.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl5.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl6.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl8.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl9.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl10.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl1.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl2.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl3.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl1.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl2.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    <li class="accountPost">
                        <div>
                            <img class="accountPostImage" src="assets/imgs/ppl/ppl3.png">
                            <button class="accountPostButton" onclick="accountPostClick(this)"></button>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>

    <?php include 'assets/modals/postModal.php' ?>

    <?php include 'assets/inc/footer.php' ?>