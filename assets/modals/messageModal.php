
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
                    <p>Hey, how's it going?</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>Pretty well. Thanks for asking. What about you?</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>Honestly, not too well. I lost my car key :(</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>Sorry to hear that broski. I hope you find it soon. I'm praying for you.</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>Oh say can you see, by the dawn's early light,
What so proudly we hail'd at the twilight's last gleaming,
Whose broad stripes and bright stars through the perilous fight
Oh the ramparts we watch'd were so gallantly streaming?
And the rocket's red glare, the bomb bursting in air,
Gave proof through the night that our flag was still there.</p>
                </div>
            </li>
            <li class="convItem">
                <div class="convSubItem">
                    <p>Um. Okay.</p>
                </div>
            </li>
            <li class="convItem">
                <img src="assets/imgs/pfps/pfp7.png" class="messagePFP"> 
                <div class="convSubItem">
                    <p>Sorry. I just needed to get that out.</p>
                </div>
            </li>
            <?php include 'assets/inc/defaultMessages.php'; ?>
        </ul>
    </div>
    <div id="convBottom">
        <form id="messageForm" method="POST">
            <input name="sms" id="messageField" type="text" placeholder="Message...">
            <div id="sendButtonHolder">
                <button type="submit" onclick="scrollFix()">Send</button>
            </div>
        </form>
    </div>
</div>