<?php include 'assets/inc/header.php' ?>

<title>Contact Teassr</title>
	</head>
    <body>
        <section id="contactPage">
            <p id="contactTitle">Contact Us</p>
            <form action="handing/sendEmail.php" method="POST" class="container">
                <div class="CPItem">
                    <input type="email" name="email" placeholder="Enter Your Email" required>  
                </div>
                <div class="CPItem">
                    <textarea placeholder="Enter Message" id="message"  name="message" rows="5" required></textarea>
                </div>
                <div class="CPItem">
                    <button type="submit">Send</button>
                </div>
            </form>
        </section>

        
<?php include 'assets/inc/footer.php' ?>