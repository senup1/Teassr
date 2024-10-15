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
	document.querySelector('.convImg').src=friendItem.children[0].children[0].src;
	document.querySelector('.convUsername').textContent=friendItem.children[1].children[0].textContent;
	let messagePFPs = document.querySelectorAll('.messagePFP');
	messagePFPs.forEach(function(pfp){
		pfp.src=friendItem.children[0].children[0].src;
	});
}