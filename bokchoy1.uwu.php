<?php include 'assets/inc/header.php' ?>

<?php
    if(!isset($_SESSION['logged'])){
        header('Location: index.php');
    } 
?>

<title>Teassr | bokchoy1.uwu</title>
</head>

<body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

    <section class="accountPage">
        <div class="container">
            <div class="accountItem">
                <img class="accountPFP" src="assets/imgs/pfps/pfp1.png">
            </div>
            <div class="accountItem">
                <p class="accountUsername">bokchoy1.uwu</p>
            </div>
            <div class="accountItem">
                <p class="accountBio">Lover of all things wholesome and cute! Big fan of cozy vibes, whether it’s through comfort food like bok choy dishes or indulging in my favorite shows and games. You’ll usually find me embracing the uwu energy, appreciating the little things in life, and spreading positive vibes wherever I go.</p>
            </div>
            <div class="accountItem">
                <ul class="accountPosts">
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