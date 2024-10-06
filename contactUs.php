<?php include 'assets/inc/header.php' ?>

<title>Contact Teassr</title>
	</head>
    <body>
        <section id="contactPage">
            <p id="contactTitle">Contact Us</p>
            <form action="handing/sendEmail.php" method="POST" class="container">
                <div>
                    <label for="name">Email:</label>
                    <input type="email" name="email" required>  
                </div>
                <div>
                    <label for="name">Message:</label>
                    <textarea id="message"  name="message" rows="5" required></textarea>
                </div>
                <div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </section>

        
<?php include 'assets/inc/footer.php' ?>