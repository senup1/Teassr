/*login modal code*/
function openLoginModal(){
	document.querySelector('#loginModal').style.visibility = 'visible';
}
function closeLoginModal(){
	document.querySelector('#loginModal').style.visibility = 'hidden';
}



/*sign up modal code*/
function openSignUpModal(){
	document.querySelector('#signUpModal').style.visibility = 'visible';
}
function closeSignUpModal(){
	document.querySelector('#signUpModal').style.visibility = 'hidden';
}




/* post Modal code */
function postClick(button){
	const post = button.parentElement;

	const title = post.children[1].textContent;
	const user = post.getAttribute('data-user');
	const imgSrc = post.children[0].src;

	document.getElementById("postModalTitle").textContent = title;
	document.getElementById("postModalUser").textContent = "by: " + user;
	document.getElementById("postModalImg").src = imgSrc;

	document.getElementById("postModal").style.display = "block";
}
function closePostModal(){
	document.getElementById("postModal").style.display = "none";
}

/* account post Modal code */
function accountPostClick(button){
	const post = button.parentElement.parentElement.parentElement.parentElement;
	const username = document.querySelector('.' + post.className + ' .accountUsername').textContent;
	const imgSrc = button.parentElement.children[0].src;

	document.getElementById("postModalUser").textContent = "by: " + username;
	document.getElementById("postModalImg").src = imgSrc;

	document.getElementById("postModal").style.display = "block";
}
function closePostModal(){
	document.getElementById("postModal").style.display = "none";
}



/*dashboard page code*/
//ignore code below, its there to because it doesnt work until second click
let tempVal = 0;
function menuActions(){
	let DNItems = document.querySelector('.DNItems');
	
	while(tempVal === 0){
		DNItems.style.display = "none";
		tempVal++;
	}
	if(DNItems.style.display == "none"){
		DNItems.style.display = "block";

	}
	else{
		DNItems.style.display = "none";
	}
}





/*password stuff*/
let SUMPassInput = document.querySelector('#SUMPass');

if(SUMPassInput){
	let PReq = document.querySelector('#PRSection');
	let matchPass = document.querySelector('#matchPass');
	let SUMPassCheck = document.querySelector('#SUMPassCheck');

	let PLCheck = document.querySelector('#PLCheck');
	let LCCheck = document.querySelector('#LCCheck');
	let UCCheck = document.querySelector('#UCCheck');
	let NumCheck = document.querySelector('#NumCheck');
	let SCCheck = document.querySelector('#SCCheck');
	let MRCheck = document.querySelector('#MRCheck');

	let joinButton = document.querySelector('#SUMButton');

	let PLGood = false;
	let pasReqsMet = false;
	let passPass = false;

	let checks = [
			{
				regex: /[a-z]/,
				element: LCCheck,
				good: false
			},
			{
				regex: /[A-Z]/,
				element: UCCheck,
				good: false
			},
			{
				regex: /[0-9]/,
				element: NumCheck,
				good: false
			},
			{
				regex: /[!@#$%^&*_]/,
				element: SCCheck,
				good: false
			}
		];

	SUMPassInput.addEventListener('input', function(e){

		//PReq.style.display = SUMPassInput.value === '' ? 'none' : 'block';

		if(SUMPassInput.value === ''){
			PReq.style.display = 'none';
			document.querySelector('#signUpModal .container').style.height = '470px';
		}
		else{
			PReq.style.display = 'block';
			document.querySelector('#signUpModal .container').style.height = '570px';
		}

		/*password length check*/
		if(SUMPassInput.value.length >= 6){
			PLCheck.style.color = 'green';
			PLGood = true;
		}
		else{
			PLCheck.style.color = 'red';
			PLGood = false;
		}

		/*password requirement checks*/
		checks.forEach(function(check){
			if(check.regex.test(SUMPassInput.value)){
				check.element.style.color = 'green';
				check.good = true;
			}
			else{
				check.element.style.color = 'red';
				check.good = false;
			}
		});

		let goodCount = [checks[0].good, checks[1].good, checks[2].good, checks[3].good].filter(Boolean).length;
		
		
		if(goodCount >= 3){
			pasReqsMet = true;
			MRCheck.style.color = 'green';
		}
		else{
			pasReqsMet = false;
			MRCheck.style.color = 'red';
		}

		if(SUMPassCheck.value === SUMPassInput.value){
			matchPass.style.display = 'none';
			passPass = true;
		}
		else if(SUMPassCheck.value.length > 0){
			matchPass.style.display = 'block';
			passPass = false;
		}

		allowJoin();

	});


	SUMPassCheck.addEventListener('input', function(e){

		if(SUMPassCheck.value === SUMPassInput.value){
			matchPass.style.display = 'none';
			passPass = true;
		}
		else{
			matchPass.style.display = 'block';
			passPass = false;
		}
		allowJoin();

		
	});

	function allowJoin(){
		if(pasReqsMet && passPass){
			joinButton.disabled = false;
		}
		else{
			joinButton.disabled = true;
		}
	}
}






/* suggested Account follow button*/
function suggestClick(button){
	const postText = button.children[0];
	//const postText = document.querySelector('.' + suggestedPost.className + ' .followText');
	if(postText.textContent == "unfollow"){
		postText.textContent = "follow";
	}
	else{
		postText.textContent = "unfollow";
	};
}


/* conversation selected on messages page */
function conversationSelection(button){
	let friendItem = button.parentElement;
	let friendList = document.querySelectorAll('.' + friendItem.className);
	friendList.forEach(function(element){
		element.style.background = "transparent";
	});
	friendItem.style.background = "rgb(83, 83, 83)";


	/* code for modal changes based on selected convo */
	let tempUsername = friendItem.children[1].children[0].textContent
	document.querySelector('.convImg').src=friendItem.children[0].children[0].src;
	document.querySelector('.convUsername').textContent=tempUsername;
	let messagePFPs = document.querySelectorAll('.messagePFP');
	messagePFPs.forEach(function(pfp){
		pfp.src=friendItem.children[0].children[0].src;
	});

	/* this is for you kris */
	if(tempUsername === 'GoatGIRL1999'){
		let messageConvos = document.querySelectorAll('.convSubItem');
		messageConvos[0].textContent = 'I once saw a goat staring at a wall for three hours. Made me question reality.';
		messageConvos[1].textContent = 'That’s... oddly specific. Did you ever wonder what the cows were thinking?';
		messageConvos[2].textContent = 'Probably plotting how to become more like goats. But who knows?';
		messageConvos[3].textContent = 'Yeah, I bet they envy our existential crises. Cows just stand there, you know?';
		messageConvos[4].textContent = 'Standing is a profound statement. But it doesn’t change the fact that they just... exist.';
		messageConvos[5].textContent = 'True. And honestly, cows aren’t even that great.';
		messageConvos[6].textContent = 'Cows aren’t even that great.';
	}
	else if(tempUsername === 'goldenApple43'){
		let messageConvos = document.querySelectorAll('.convSubItem');
		messageConvos[0].textContent = 'Hey, how\'s it going?';
		messageConvos[1].textContent = 'Pretty well. Thanks for asking. What about you?';
		messageConvos[2].textContent = 'Honestly, not too well. I lost my car key :(';
		messageConvos[3].textContent = 'Sorry to hear that broski. I hope you find it soon. I\'m praying for you.';
		messageConvos[4].textContent = "Oh say can you see, by the dawn\'s early light, What so proudly we hail\'d at the twilight\'s last gleaming, Whose broad stripes and bright stars through the perilous fight Oh the ramparts we watch\'d were so gallantly streaming? And the rocket\'s red glare, the bomb bursting in air\, Gave proof through the night that our flag was still there.";
		messageConvos[5].textContent = 'Um. Okay.';
		messageConvos[6].textContent = 'Sorry. I just needed to get that out.';
	}
	else if(tempUsername === 'JimmyNeutron'){
		let messageConvos = document.querySelectorAll('.convSubItem');
		messageConvos[0].textContent = 'I just discovered that cheese can float in space. Did you know that?';
		messageConvos[1].textContent = 'Cheese in space? Does it have feelings, or is it just a snack?';
		messageConvos[2].textContent = 'It definitely has feelings. It whispered “take me to the moon” when I wasn’t looking.';
		messageConvos[3].textContent = 'Sounds like the cheese is plotting something. Should we be worried?';
		messageConvos[4].textContent = "Worried? Nah, I think it just wants a change of scenery.";
		messageConvos[5].textContent = 'Fair enough. I’m in. But I hope it doesn’t start singing on the way.';
		messageConvos[6].textContent = 'We’re going to the moon tonight.';
	}
	else if(tempUsername === 'PowerpuffCheerio'){
		let messageConvos = document.querySelectorAll('.convSubItem');
		messageConvos[0].textContent = 'I saw a cat wearing a cape today. It looked like it was ready to save the world.';
		messageConvos[1].textContent = 'Was the cat also plotting to overthrow the cereal kingdom? Sounds suspicious.';
		messageConvos[2].textContent = 'Definitely. I caught it trying to recruit my Cheerios for an uprising.';
		messageConvos[3].textContent = 'I hope they weren’t promising them a life of adventure and marshmallow rainbows.';
		messageConvos[4].textContent = "They were! The betrayal stung more than soggy cereal.";
		messageConvos[5].textContent = 'That’s rough. I couldn\'t have imagined such a betrayal.';
		messageConvos[6].textContent = 'I couldn\'t have imagined such a betrayal.';
	}
	else if(tempUsername === 'NetheriteGOD69'){
		let messageConvos = document.querySelectorAll('.convSubItem');
		messageConvos[0].textContent = 'I found a pig wearing sunglasses in the Nether. What do you think it was doing?';
		messageConvos[1].textContent = 'Probably judging your armor choices. Pigs can be sassy like that.';
		messageConvos[2].textContent = 'Right? I asked it if I looked cool, and it just oinked and walked away.';
		messageConvos[3].textContent = 'Classic pig move. They’re basically the fashion police of Minecraft.';
		messageConvos[4].textContent = "Maybe I should've worn diamond. But diamonds can’t withstand lava fashion.";
		messageConvos[5].textContent = 'True, lava is unforgiving. Still, nice to have a pig critique your gear!';
		messageConvos[6].textContent = 'Lol I just got full netherite.';
	}
	

}


/* fix scroll on messages page */
function scrollFix(){
	if(window.location.pathname === '/messages.php'){
		function scrollToBottom(){
			const chatContainer = document.getElementById('convMiddle');
			chatContainer.scrollTop = chatContainer.scrollHeight;
		}
	
		scrollToBottom();
	}
}
window.onload = scrollFix;



/* make post on my profile page */
function makePost(){
	document.querySelector('#postPresetsModal').style.display = 'block';
}
function closePostPresetModal(){
	document.querySelector('#postPresetsModal').style.display = 'none';
}


/* make submit button appear and function when preselected image is selected */
function presetImageSelected(button){
	let submitButton = button.parentElement.parentElement.children[6];
	submitButton.type="submit";
	submitButton.style.display="block";
}