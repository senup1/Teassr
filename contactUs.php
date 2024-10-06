<?php include 'assets/inc/header.php' ?>

<title>Contact Teassr</title>
	</head>
    <body>
        <section id="contactPage">
            <div class="container">
                <div class="CPItem">
                    <p>Contact Us</p>
                </div>
                <div class="CPItem">
                    <form action="handing/sendEmail.php" method="POST">
                        <label for="name">Email:</label>
                        <input type="email" name="email" required>
                        <label for="name">Message:</label>
                        <textarea id="message"  name="message" rows="5" required></textarea>
                    </form>
                </div>
            </div>
        </section>

        
<?php include 'assets/inc/footer.php' ?>