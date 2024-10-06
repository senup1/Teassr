<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "teassrteam@gmail.com";
    $subject = "Form Submission from teassr.com/contact";
    $body = "Email: $email\nMessage:\n$message";

    $headers = "From: $email";

}
?>


<?php include '../../../assets/inc/header.php' ?>

<title>About Teassr</title>
	</head>
    <body>
        <section id="aboutPage">
            <p>test</p>
        </section>

        
<?php include '../../../assets/inc/footer.php' ?>
