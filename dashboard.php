<?php include 'assets/inc/header.php' ?>

<title>Dashboard</title>
</head>

<body>

	<?php include 'assets/inc/navbar.php' ?>

	<div class="spaceMaker"></div>

	<section id="dashBody">
		<div id="welcomeMessage">
			<p>Welcome <?php echo $_SESSION['username'] ?>!</p>
		</div>
		<div class="container">
			<div class="DBItem"></div>
			<div class="DBItem">
				<div id="postSection">
					<ul class="container">
						<li class="postItem">
							<div class="postItemContent" data-title="beautiful view in the mountains" data-user="User1" data-image="assets/imgs/ppl/ppl1.png">
								<img class="postImg" src="assets/imgs/ppl/ppl1.png">
								<p class="postTitle">beautiful view in the mountains</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="when mom says there's goldfish at home" data-user="User2" data-image="assets/imgs/ppl/ppl2.png">
								<img class="postImg" src="assets/imgs/ppl/ppl2.png">
								<p class="postTitle">when mom says there's goldfish at home</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="chilling in some rice fields" data-user="User3" data-image="assets/imgs/ppl/ppl3.png">
								<img class="postImg" src="assets/imgs/ppl/ppl3.png">
								<p class="postTitle">chilling in some rice fields</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="enjoying the view today, climbing tomorrow" data-user="User4" data-image="assets/imgs/ppl/ppl4.png">
								<img class="postImg" src="assets/imgs/ppl/ppl4.png">
								<p class="postTitle">enjoying the view today, climbing tomorrow</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="spent some time thinking by the river" data-user="User5" data-image="assets/imgs/ppl/ppl5.png">
								<img class="postImg" src="assets/imgs/ppl/ppl5.png">
								<p class="postTitle">spent some time thinking by the river</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="family photo in our backyard" data-user="User6" data-image="assets/imgs/ppl/ppl6.png">
								<img class="postImg" src="assets/imgs/ppl/ppl6.png">
								<p class="postTitle">family photo in our backyard</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="got a new haircut" data-user="User7" data-image="assets/imgs/ppl/ppl7.png">
								<img class="postImg" src="assets/imgs/ppl/ppl7.png">
								<p class="postTitle">got a new haircut</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="me when midterms are coming up" data-user="User8" data-image="assets/imgs/ppl/ppl8.png">
								<img class="postImg" src="assets/imgs/ppl/ppl8.png">
								<p class="postTitle">me when midterms are coming up</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="relaxing in the park" data-user="User9" data-image="assets/imgs/ppl/ppl9.png">
								<img class="postImg" src="assets/imgs/ppl/ppl9.png">
								<p class="postTitle">relaxing in the park</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="just finished my morning run" data-user="User10" data-image="assets/imgs/ppl/ppl10.png">
								<img class="postImg" src="assets/imgs/ppl/ppl10.png">
								<p class="postTitle">just finished my morning run</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="enjoying coffee by the beach" data-user="User11" data-image="assets/imgs/ppl/ppl11.png">
								<img class="postImg" src="assets/imgs/ppl/ppl11.png">
								<p class="postTitle">enjoying coffee by the beach</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="my trip to the mountains this weekend" data-user="User12" data-image="assets/imgs/ppl/ppl12.png">
								<img class="postImg" src="assets/imgs/ppl/ppl12.png">
								<p class="postTitle">my trip to the mountains this weekend</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="farming from minecraft irl" data-user="User13" data-image="assets/imgs/ppl/ppl3.png">
								<img class="postImg" src="assets/imgs/ppl/ppl3.png">
								<p class="postTitle">farming from minecraft irl</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="trying new styles" data-user="User14" data-image="assets/imgs/ppl/ppl14.png">
								<img class="postImg" src="assets/imgs/ppl/ppl14.png">
								<p class="postTitle">trying new styles</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="morning person for life" data-user="User15" data-image="assets/imgs/ppl/ppl15.png">
								<img class="postImg" src="assets/imgs/ppl/ppl15.png">
								<p class="postTitle">morning person for life</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="all alone on the bleachers" data-user="User16" data-image="assets/imgs/ppl/ppl18.png">
								<img class="postImg" src="assets/imgs/ppl/ppl18.png">
								<p class="postTitle">all alone on the bleachers</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="found some houses in the mountains" data-user="User17" data-image="assets/imgs/ppl/ppl16.png">
								<img class="postImg" src="assets/imgs/ppl/ppl16.png">
								<p class="postTitle">found some houses in the mountains</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="got my blue contacts" data-user="User18" data-image="assets/imgs/ppl/ppl17.png">
								<img class="postImg" src="assets/imgs/ppl/ppl17.png">
								<p class="postTitle">got my blue contacts</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="tried dying my hair" data-user="User19" data-image="assets/imgs/ppl/ppl19.png">
								<img class="postImg" src="assets/imgs/ppl/ppl19.png">
								<p class="postTitle">tried dying my hair</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="my favorite from today's photoshoot" data-user="User20" data-image="assets/imgs/ppl/ppl20.png">
								<img class="postImg" src="assets/imgs/ppl/ppl20.png">
								<p class="postTitle">my favorite from today's photoshoot</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="spent some time thinking by the river" data-user="User21" data-image="assets/imgs/ppl/ppl5.png">
								<img class="postImg" src="assets/imgs/ppl/ppl5.png">
								<p class="postTitle">spent some time thinking by the river</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-title="family photo in our backyard" data-user="User22" data-image="assets/imgs/ppl/ppl6.png">
								<img class="postImg" src="assets/imgs/ppl/ppl6.png">
								<p class="postTitle">family photo in our backyard</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>


					</ul>
				</div>
			</div>
			<div class="DBItem">
				<div id="suggestSection">
					<p id="suggestSectionTitle">Suggested Accounts: </p>
					<ul class="container">
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp1.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">bokchoy1.uwu</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)"><p class="followText">follow</p></button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp2.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">hisPumpkin4</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)"><p class="followText">follow</p></button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp3.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">holleratyaboy140</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)"><p class="followText">follow</p></button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp4.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">animelover2000</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)"><p class="followText">follow</p></button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp5.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">joshuagale.exe</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)"><p class="followText">follow</p></button>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="DBItem"></div>
		</div>
	</section>

	<?php include 'assets/modals/postModal.php' ?>


	<?php include 'assets/inc/footer.php' ?>