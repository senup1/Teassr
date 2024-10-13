<?php 
	if(isset($_POST['logout'])){
		unset($_SESSION['username']);
		unset($_SESSION['user_id']);
		unset($_SESSION['logged']);
	}
?>
<nav id="nav">
	<a href="../../../../../dashboard.php">
		<img class="logo" src="../../../../assets/imgs/bow1-removebg-inverted.png">
	</a>
	<div class="container">
		<div class="menuButton">
			<button onclick="menuActions()"></button>
		</div>
		<div class="DNItems">
			<div class=DNItem>
			<button onclick="window.open('../../../../myprofile.php', '_self')">My Profile</button>
			</div>
			<div class=DNItem>
				<button onclick="window.open('../../../../messages.php', '_self')">Messages</button>
			</div>
			<div class=DNItem>
				<form method="POST" action="">
					<button name="logout" type="submit">Logout</button>
				</form>
			</div>
		</div>
	</div>
</nav>