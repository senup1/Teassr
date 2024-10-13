
		<div id="signUpModal" style="<?= isset($_SESSION['SUModalOpen']) ? 'visibility: visible;' : 'visibility: hidden;'; ?>">
			<div class="container">
				<div class="SUMItem">
					<button id="SUMCloseButton" onclick="closeSignUpModal()"><p>&times;</p></button>
				</div>
				<div class="SUMItem">
					<img class="logo" src="/assets/imgs/bow1-removebg-inverted.png" alt="oops">
				</div>
				<div class="SUMItem">
					<form id="signUpForm" action="assets/handling/signup.php" method="POST">
						<div>
							<input type="text" name="username" placeholder="Username">
							<div style="color: red;"><?= isset($_SESSION['SUUsernameErr']) ? $_SESSION['SUUsernameErr'] : ''; ?></div>
						</div>
						<div>
							<input type="email" name="email" placeholder="Email">
							<div style="color: red;"><?= isset($_SESSION['SUEmailErr']) ? $_SESSION['SUEmailErr'] : ''; ?></div>
						</div>
						<div>
							<input id="SUMPass" type="password" name="password" placeholder="Password">
							<div style="color: red;"><?= isset($_SESSION['SUPasswordErr']) ? $_SESSION['SUPasswordErr'] : ''; ?></div>
						</div>
						<div id="PRSection">
							<div id="PLCheck">
								<ul>
									<li>
										<p>Must be at least 6 characters</p>
									</li>
								</ul>
							</div>
							<div id="MRCheck">
								<p>Meet 3 of the 4 requirements below:</p>
							</div>
							<div id="PRCheck">
								<ul>
									<li>
										<p id="LCCheck">Contains lower case letter</p>
										<p id="UCCheck">Contains upper case letter</p>
										<p id="NumCheck">Contains number</p>
										<p id="SCCheck">Contains special character (!,@,#,etc)</p>
									</li>
								</ul>
							</div>
						</div>
						<div>
							<input id="SUMPassCheck" type="password" name="passwordCheck" placeholder="Confirm Password">
						</div>
						<div id="matchPass" class="smallError">
							<p>Your passwords don't match</p>
						</div>
					</form>
				</div>
				<div class="SUMItem">
					<a href="#">Forgot Password?</a>
				</div>
				<div class="SUMItem">
					<button id="SUMButton" type="submit" form="signUpForm"><p>Join</p></button>
				</div>
				
			</div>
			<button id="signUpModalOffClick" onclick="closeSignUpModal()"></button>
		</div>
		<?php
			unset($_SESSION['SUUsernameErr']);
			unset($_SESSION['SUPasswordErr']);
			unset($_SESSION['SUEmailErr']);
			unset($_SESSION['SUModalOpen']);
		?>