<?php include 'assets/inc/header.php' ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_SESSION['numMessages'] > 39){
            $_SESSION['numMessages'] = 0;
        }
        if(!empty($_POST['sms'])){
            $_SESSION['numMessages']+=2;
        }
    }
    
?>


<title>Teassr Messages</title>
</head>

<body>

    <?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

    <section id="messages">
        <div class="container">
            <div class="messagesItem">
                <ul id="friendList">
                    <li class="friendItem">
                        <div class="friendSubItem">
                            <img class="messageItemPFP" src="assets/imgs/pfps/pfp7.png">
                        </div>
                        <div class="friendSubItem">
                            <p class="messageItemUsername">goldenApple43</p>
                            <p class="lastMessage">Sorry. I just needed to get that out.</p>
                        </div>
                        <div class="backgroundFix"></div>
                        <button class="conversationSelection" onclick="conversationSelection(this)"></button>                       
                    </li>
                    <li class="friendItem">
                        <div class="friendSubItem">
                            <img class="messageItemPFP" src="assets/imgs/pfps/pfp8.png">
                        </div>
                        <div class="friendSubItem">
                            <p class="messageItemUsername">GoatGIRL1999</p>
                            <p class="lastMessage">Cows aren’t even that great.</p>
                        </div>
                        <div class="backgroundFix"></div>
                        <button class="conversationSelection" onclick="conversationSelection(this)"></button>
                    </li>
                    <li class="friendItem">
                        <div class="friendSubItem">
                            <img class="messageItemPFP" src="assets/imgs/pfps/pfp9.png">
                        </div>
                        <div class="friendSubItem">
                            <p class="messageItemUsername">JimmyNeutron</p>
                            <p class="lastMessage">We’re going to the moon tonight.</p>
                        </div>
                        <div class="backgroundFix"></div>
                        <button class="conversationSelection" onclick="conversationSelection(this)"></button>
                    </li>
                    <li class="friendItem">
                        <div class="friendSubItem">
                            <img class="messageItemPFP" src="assets/imgs/pfps/pfp10.png">
                        </div>
                        <div class="friendSubItem">
                            <p class="messageItemUsername">PowerpuffCheerio</p>
                            <p class="lastMessage">I couldn't have imagined such a betrayal.</p>
                        </div>
                        <div class="backgroundFix"></div>
                        <button class="conversationSelection" onclick="conversationSelection(this)"></button>
                    </li>
                    <li class="friendItem">
                        <div class="friendSubItem">
                            <img class="messageItemPFP" src="assets/imgs/pfps/pfp11.png">
                        </div>
                        <div class="friendSubItem">
                            <p class="messageItemUsername">NetheriteGOD69</p>
                            <p class="lastMessage">Lol I just got full netherite.</p>
                        </div>
                        <div class="backgroundFix"></div>
                        <button class="conversationSelection" onclick="conversationSelection(this)"></button>
                    </li>
                </ul>
            </div>
            <div class="messagesItem">
                <?php include 'assets/modals/messageModal.php' ?>
            </div>
        </div>
    </section>


    <?php include 'assets/inc/footer.php' ?>