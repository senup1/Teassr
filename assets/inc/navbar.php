<?php 
	if(isset($_POST['logout'])){
		unset($_SESSION['username']);
		unset($_SESSION['logged']);
		unset($_SESSION['numMessages']);
		unset($_SESSION['logged']);
		header('Location: index.php');
	}
?>
<nav id="nav">
	<a  <?= isset($_SESSION['logged']) ? 'href="../../../../../dashboard.php"' : 'href="../../../../../index.php"'; ?>>
		<img class="logo" src="../../../../assets/imgs/bow1-removebg-inverted.png">
	</a>
	<a href="messages.php" <?= isset($_SESSION['logged']) ? 'style="display: block;"' : 'style="display: none"'; ?>><img id="messagesIcon" src="../../../../../assets/imgs/message.png"></a>
	<div class="container">
		<div class="menuButton" <?= isset($_SESSION['logged']) ? 'style="display: block;"' : 'style="display: none"'; ?>>
			<button onclick="menuActions()"></button>
		</div>
		<div class="DNItems">
			<div class=DNItem>
			<button onclick="window.open('../../../../myprofile.php', '_self')">My Profile</button>
			</div>
			<div class=DNItem>
				<button onclick="window.open('../../../../settings.php', '_self')">Settings</button>
			</div>
			<div class=DNItem>
				<form method="POST" action="">
					<button name="logout" type="submit">Logout</button>
				</form>
			</div>
		</div>
	</div>
</nav>