<?php include 'assets/inc/header.php' ?>

<?php
    if(!isset($_SESSION['logged'])){
        header('Location: index.php');
    } 
?>

<title>Teassr | joshuagale.exe</title>
</head>

<body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

    <section class="accountPage">
        <div class="container">
            <div class="accountItem">
                <img class="accountPFP" src="assets/imgs/pfps/pfp5.png">
            </div>
            <div class="accountItem">
                <p class="accountUsername">joshuagale.exe</p>
            </div>
            <div class="accountItem">
                <p class="accountBio">Just your friendly neighborhood tech enthusiast! I love exploring all things digital, from coding to gaming. Always on the lookout for new gadgets and software to try out. When I’m not tinkering with tech, you can find me enjoying some good music or diving into a captivating book. Let’s connect and geek out together!</p>
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