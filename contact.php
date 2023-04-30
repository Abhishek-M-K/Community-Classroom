<?php
    $userName = $_POST['Name'];
    $userMail= $_POST['Mail'];    
    $IDnumber = $_POST['IDnumber'];
    $Message = $_POST['Message'];
    $to = "teambabbar@gmail.com";
    $body = "They have the following suggestion:";
   	// Database connection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Mail, IDnumber, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $userName, $userMail, $IDnumber, $Message);
		$execval = $stmt->execute();
		echo $execval;
        echo "We received your query/feedback successfully. Team will connect to you soon via Mail.";
		$stmt->close();
		$conn->close();
	}

?>
<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style (2).css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;900&display=swap" rel="stylesheet">

    <title>COMM_CLASSROOM_CONTACT</title>
    <head>
        <body>
             ************nav bar starts 
   <nav>
    <div class="container nav__container">
        <a href="index.html"><h4>COMMUNITY CLASSROOM</h4></a>
        <ul class="nav__menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li> 
            <li><a href="classes.html">Classes</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
    </div>
   </nav> 
   ************nav bar ends 

    ************contact form starts 

        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span>Us</h1>
            <div class="row">
                <div class="image">
                    <img src="/contact.svg" alt="">
                </div>
                 action="" method="post" 
                <form action="contact.php" method="POST" >
                    <span for="Name">Your Name</span>
                    <input type="text" required placeholder="enter your full name" maxlength="20" class="box" name="Name">
                    <span for="Mail">Your Mail</span>
                    <input type="text" required placeholder="enter your mail ID" maxlength="30" class="box" name="Mail" >
                    <span for="IDnumber">Your ID</span>
                    <input type="text" required placeholder="enter your ID No" maxlength="15" class="box"name="IDnumber">
                    <span for="Suggestion">Message</span>
                     <textarea id="message" rows="4" required placeholder="Query/Suggestions/Feed-back" class="box"></textarea> 
                    <input type="text" required placeholder="Query/Suggestions/Feed-back" maxlength="99" class="box" name="Message">
                    <input type="submit" value="" class="btn" name="SEND">
                </form>
            </div>
        </section>
 ************contact form ends 
        <script src="./main.js"></script>

        </body>
    </head> -->