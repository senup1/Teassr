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
					<ul class="postRow">
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl1.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl2.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl3.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
					</ul>
					<ul class="postRow">
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl4.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl5.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl6.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
					</ul>
					<ul class="postRow">
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl7.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl8.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl9.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
					</ul>
					<ul class="postRow">
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl10.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl11.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
						<li class="postItem">
							<a href="#">
								<img class="postImg" src="assets/imgs/ppl/ppl12.png">
								<p class="postTitle">asdf</p>
							</a>
						</li>
					</ul>
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
								<p>bokchoy1.uwu</p>
							</div>
							<div class="suggestSubItem">
								<button>follow</button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp2.png">
							</div>
							<div class="suggestSubItem">
								<p>hisPumpkin4</p>
							</div>
							<div class="suggestSubItem">
								<button>follow</button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp3.png">
							</div>
							<div class="suggestSubItem">
								<p>holleratyaboy140</p>
							</div>
							<div class="suggestSubItem">
								<button>follow</button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp4.png">
							</div>
							<div class="suggestSubItem">
								<p>animelover2000</p>
							</div>
							<div class="suggestSubItem">
								<button>follow</button>
							</div>
						</li>
						<li class="suggestItem">
							<div class="suggestSubItem">
								<img class="suggestImg" src="assets/imgs/pfps/pfp5.png">
							</div>
							<div class="suggestSubItem">
								<p>joshuagale.exe</p>
							</div>
							<div class="suggestSubItem">
								<button>follow</button>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="DBItem"></div>
		</div>
	</section>


	<?php include 'assets/inc/footer.php' ?>