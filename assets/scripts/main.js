/*login modal code*/
let loginButton = document.querySelector('#MPLoginButton');

if(loginButton){
	let loginModal = document.querySelector('#loginModal');
	let loginModalCloseButton = document.querySelector('#LMCloseButton');

	loginButton.addEventListener('click', function(e){
		loginModal.style.visibility = 'visible';
	});
	loginModalCloseButton.addEventListener('click', function(e){
		loginModal.style.visibility = 'hidden';
	});
}



/*sign up modal code*/
let signUpButton = document.querySelector('#MPSignUpButton');

if(signUpButton){
	let signUpModal = document.querySelector('#signUpModal');
	let signUpModalCloseButton = document.querySelector('#SUMCloseButton');

	signUpButton.addEventListener('click', function(e){
		signUpModal.style.visibility = 'visible';
	});
	signUpModalCloseButton.addEventListener('click', function(e){
		signUpModal.style.visibility = 'hidden';
	});

	window.onclick = function(e){
		if(e.target === loginModal || e.target === signUpModal){
			loginModal.style.visibility = 'hidden';
			signUpModal.style.visibility = 'hidden';
		}
		
	};
}




/* post Modal code */
function postClick(button){
	const post = button.parentElement;

	const title = post.getAttribute('data-title');
	const user = post.getAttribute('data-user');
	const imgSrc = post.getAttribute('data-image');

	document.getElementById("postModalTitle").textContent = title;
	document.getElementById("postModalUser").textContent = "by: " + user;
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




