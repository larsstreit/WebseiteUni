<?php
if($_POST) {
    $firstname = "";
    $lastname = "";
    $email = "";
    $subject = "";
    $email_body = "<div>";
      
    if(isset($_POST['firstname'])) {
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$firstname."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }

      
    if(isset($_POST['subject'])) {
        $subject = htmlspecialchars($_POST['subject']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$subject."</div>
                        </div>";
    }
      
    /*if($concerned_department == "billing") {
        $recipient = "billing@domain.com";
    }
    else if($concerned_department == "marketing") {
        $recipient = "marketing@domain.com";
    }
    else if($concerned_department == "technical support") {
        $recipient = "tech.support@domain.com";
    }
    else {
        $recipient = "contact@domain.com";
    }*/
      

    $email_body .= "</div>";
    $toEmail = "ls.larsstreit@t-online.de";

 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($toEmail, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $firstname. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
}


?>
<!DOCTYPE html>

<html lang="de">

    <head>
        <title>Crème de la Crème | Die Rezept Seite Ihres Vertrauens</title>
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <nav id="top">
            <ul>
                <li>
                    <h3 id="logo">CC</h3>
                    <!-- logobild-->
                </li>
                <li><a href="Kontakt.php">Kontakt</a></li>
                <li><a href="Services.html">Services</a></li>
                <li><a href="Neue_Rezepte.html">Neue Rezepte</a></li>
                <li><a href="index.html">Start</a></li>
            </ul>
        </nav>
        <main id="contact_main">
            <section id="contact">
                <div id="contact_wrapper">
                    <h2>Kontakt</h2>
                    <p>Hier können SIe uns gerne Kontaktieren bei Fragen oder Anmerkungen</p>
                    <form action="" method="POST">

                        <label for="fname">Vorname</label>
                        <input type="text" id="fname" name="firstname" placeholder="Ihr Vorname">

                        <label for="lname">Nachname</label>
                        <input type="text" id="lname" name="lastname" placeholder="Ihr Nachname">
                        
                        <label for="email">Nachname</label>
                        <input type="text" id="email" name="email" placeholder="Ihre E-Mail">

                        <label for="subject">Betreff</label>
                        <textarea id="subject" name="subject" placeholder="Ihr Betreff" style="height:200px"></textarea>

                        <input type="submit" value="Senden">
                    </form>    
                </div>        
            </section>
            <section id="#map">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=trier&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </section>
        </main>
        <footer id="contact_footer">
            <ul>
                <li>Copyright 2021 | Crème de la Crème</li>
                <li><a href="#" onclick="alertnp()">Impressum</a></li>
                <li><a href="#" onclick="alertnp()">Sitemap</a></li>
            </ul>
        </footer>
        <script src="app.js"></script>
    </body>

</html>