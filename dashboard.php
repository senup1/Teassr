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
							<div class="postItemContent" data-user="PixelVoyager">
								<img class="postImg" src="assets/imgs/ppl/ppl1.png">
								<p class="postTitle">beautiful view in the mountains</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="LunaCrest">
								<img class="postImg" src="assets/imgs/ppl/ppl2.png">
								<p class="postTitle">when mom says there's goldfish at home</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="NovaFrost">
								<img class="postImg" src="assets/imgs/ppl/ppl3.png">
								<p class="postTitle">chilling in some rice fields</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="QuantumBlaze">
								<img class="postImg" src="assets/imgs/ppl/ppl4.png">
								<p class="postTitle">enjoying the view today, climbing tomorrow</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="EchoZephyr">
								<img class="postImg" src="assets/imgs/ppl/ppl5.png">
								<p class="postTitle">spent some time thinking by the river</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="ShadowRipple">
								<img class="postImg" src="assets/imgs/ppl/ppl6.png">
								<p class="postTitle">family photo in our backyard</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="StellarWhiz">
								<img class="postImg" src="assets/imgs/ppl/ppl7.png">
								<p class="postTitle">got a new haircut</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="FrostEcho">
								<img class="postImg" src="assets/imgs/ppl/ppl8.png">
								<p class="postTitle">me when midterms are coming up</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="MysticForge">
								<img class="postImg" src="assets/imgs/ppl/ppl9.png">
								<p class="postTitle">relaxing in the park</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="SolarWanderer">
								<img class="postImg" src="assets/imgs/ppl/ppl10.png">
								<p class="postTitle">just finished my morning run</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="MidnightSpecter">
								<img class="postImg" src="assets/imgs/ppl/ppl11.png">
								<p class="postTitle">enjoying coffee by the beach</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="CyberGlider">
								<img class="postImg" src="assets/imgs/ppl/ppl12.png">
								<p class="postTitle">my trip to the mountains this weekend</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="EmberVortex">
								<img class="postImg" src="assets/imgs/ppl/ppl3.png">
								<p class="postTitle">farming from minecraft irl</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="PhantomPulse">
								<img class="postImg" src="assets/imgs/ppl/ppl14.png">
								<p class="postTitle">trying new styles</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="NebulaStride">
								<img class="postImg" src="assets/imgs/ppl/ppl15.png">
								<p class="postTitle">morning person for life</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="AeroTide">
								<img class="postImg" src="assets/imgs/ppl/ppl18.png">
								<p class="postTitle">all alone on the bleachers</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="RadiantFlux">
								<img class="postImg" src="assets/imgs/ppl/ppl16.png">
								<p class="postTitle">found some houses in the mountains</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="TwilightDrifter">
								<img class="postImg" src="assets/imgs/ppl/ppl17.png">
								<p class="postTitle">got my blue contacts</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="BlazeQuantum">
								<img class="postImg" src="assets/imgs/ppl/ppl19.png">
								<p class="postTitle">tried dying my hair</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="ThunderHorizon">
								<img class="postImg" src="assets/imgs/ppl/ppl20.png">
								<p class="postTitle">my favorite from today's photoshoot</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="HyperNova">
								<img class="postImg" src="assets/imgs/ppl/ppl5.png">
								<p class="postTitle">spent some time thinking by the river</p>
								<button class="postButton" onclick="postClick(this)"></button>
							</div>
						</li>
						<li class="postItem">
							<div class="postItemContent" data-user="CosmicTrek">
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
								<button onclick="suggestClick(this)">
									<p class="followText">follow</p>
								</button>
							</div>
							<button class="suggestItemButton"
								onclick="window.open('bokchoy1.uwu.php', '_self')"></button>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp2.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">hisPumpkin4</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)">
									<p class="followText">follow</p>
								</button>
							</div>
							<button class="suggestItemButton"
								onclick="window.open('hisPumpkin4.php', '_self')"></button>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp3.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">holleratyaboy140</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)">
									<p class="followText">follow</p>
								</button>
							</div>
							<button class="suggestItemButton"
								onclick="window.open('holleratyaboy140.php', '_self')"></button>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp4.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">animelover2000</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)">
									<p class="followText">follow</p>
								</button>
							</div>
							<button class="suggestItemButton"
								onclick="window.open('animelover2000.php', '_self')"></button>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp5.png">
							</div>
							<div class="suggestSubItem">
								<p class="suggestUsername">o0br4nd0n0o</p>
							</div>
							<div class="suggestSubItem">
								<button onclick="suggestClick(this)">
									<p class="followText">follow</p>
								</button>
							</div>
							<button class="suggestItemButton"
								onclick="window.open('joshuagale.exe.php', '_self')"></button>
						</li>
					</ul>
				</div>
			</div>
			<div class="DBItem"></div>
		</div>
	</section>

	<?php include 'assets/modals/postModal.php' ?>


	<?php include 'assets/inc/footer.php' ?>