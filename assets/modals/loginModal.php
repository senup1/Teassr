<div id="loginModal" style="<?= isset($_SESSION['modalOpen']) ? 'visibility: visible;' : 'visibility: hidden;'; ?>">
	<div class="container">
		<div class="LMItem">
			<button id="LMCloseButton">
				<p>X</p>
			</button>
		</div>
		<div class="LMItem">
			<img class="logo" src="/assets/imgs/bow1-removebg-preview.png" alt="oops">
		</div>
		<div class="LMItem">
			<form id="loginForm" action="assets/handling/login.php" method="POST">
				<div>
					<input type="text" name="username" placeholder="Username or Email">
				</div>
				<div style="color: red;"><?= isset($_SESSION['usernameErr']) ? $_SESSION['usernameErr'] : ''; ?></div>
				<div>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div style="color: red;"><?= isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] : ''; ?></div>
			</form>
		</div>
		<div class="LMItem">
			<a href="#">Forgot Password?</a>
			<div style="color: red;"><?= isset($_SESSION['loginErr']) ? $_SESSION['loginErr'] : ''; ?></div>
		</div>
		<div class="LMItem">
			<button id="LMButton" type="submit" form="loginForm">
				<p>Sign in</p>
			</button>
		</div>

	</div>
</div>
<?php
unset($_SESSION['usernameErr']);
unset($_SESSION['passwordErr']);
unset($_SESSION['loginErr']);
unset($_SESSION['modalOpen']);
?>