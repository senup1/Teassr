
<div id="convSection">
    <div id="convTop">
        <img class="convImg" src="assets/imgs/pfps/pfp7.png">
        <p class="convUsername">goldenApple43</p>
    </div>
    <div id="convMiddle">
        <ul id="conversation">
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>message me</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>message you</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>message me</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>message you</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>message me</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>message you</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>message me</p>
                </div>
            </li>
            <?php 
            if(isset($_SESSION['numMessages']) && $_SESSION['numMessages']>=1){echo '
                <li class="convItem">
                    <div class="convSubItem">
                        <p> omg no way whats up </p>
                    </div>
                </li>
                <li class="convItem">
                    <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                    <div class="convSubItem">
                        <p>if this works thatd be crazyyyy</p>
                    </div>
                </li>'
            ;}else{}
            if(isset($_SESSION['numMessages']) && $_SESSION['numMessages']>=2){echo '
                <li class="convItem">
                    <div class="convSubItem">
                        <p> no way really? me tooo!!!</p>
                    </div>
                </li>
                <li class="convItem">
                    <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                    <div class="convSubItem">
                        <p>its still working omg omg</p>
                    </div>
                </li>'
            ;}else{}
                
            ?>
        </ul>
    </div>
    <div id="convBottom">
        <form id="messageForm" method="POST">
            <input name="sms" id="messageField" type="text" placeholder="Message...">
            <div id="sendButtonHolder">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
</div>