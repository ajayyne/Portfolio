<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    <meta name="description" content="I am based in the Scottish Borders, Contact me
    to find out more about my Wed Develpment services or quotes.">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="javascript/navigation.js" defer></script>
</head>

<body>
<header class="header">
        <div class="mobile-nav">
            <nav>
                <div class="hamburger-container" id="toggle">
                    <div class="hamburger-1 hamburger">
                    </div>
                    <div class="hamburger-2 hamburger">
                    </div>
                    <div class="hamburger-3 hamburger">
                    </div>
                </div>
            </nav>
            <ul class="navigation" id="myList">
                <li><a href="About.html">ABOUT ME</a></li>
                <li><a href="Projects.html">PROJECTS</a></li>
                <li><a href="Services.html">SERVICES</a></li>
                <li><a href="Testimonials.html">TESTIMONIALS</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="desk-nav">
            <ul>
                <li><a href="About.html">ABOUT ME</a></li>
                <li><a href="Projects.html">PROJECTS</a></li>
                <li><a href="Services.html">SERVICES</a></li>
                <li><a href="Testimonials.html">TESTIMONIALS</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="header-name">
            <h1><a href="index.html">AJ Development</a></h1>
        </div>
    </header>

    <main>
        <div class="coloured-header flex">
            <h2>GET IN TOUCH</h2>
        </div>

        <div class="margin">
            <div>
                <div class="contact-img" data-aos="fade-right" data-aos-duration="1000">
                    <img src="images/email.png">
                </div>
                <div class="sc">
                    <a href="https://www.linkedin.com/in/amber-degner-budd-43b1932ab/" target="_blank"><div class="flex social-contact">
                        <img src="images/linkedin.png" width="50px" height="50px">
                        <p> Link with me on Linked In</p>
                    </div></a>
                    <a href="https://www.facebook.com/profile.php?id=61573587692197" target="_blank"><div class="flex social-contact">
                        <img src="images/facebook.png" width="50px" height="50px">
                        <p>Message me on Facebook</p>
                    </div></a>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="email-border">
                    <p></p>
                </div>
                <div class="flex">
                    <p class="email-title"><em>or send me an email</em></p>
                </div>
            </div>


            <div>
                <form method="POST" action="contact.php" class="flex flex-col form">
                    <label for="name">Name</label>
                    <input name="name" type="text" required>
                    <label for="email">Email Address</label>
                    <input name="email" type="email" required>
                    <label for="message">Message</label>
                    <input name="message" type="text" required>
                    <input type="submit" value="SEND" class="contact-send">
                </form>
            </div>
        </div>
        </div>

        <!-- PHP for sending emails through form -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = trim($_POST['name']); 
            $email = trim($_POST['email']); 
            $message = trim($_POST['message']);
        
            // Set email address
            $to = "amber.db17@yahoo.com"; 
            $subject = "Form Enquiry";

            // Create the email content
            $email_content = "Name: $name\n";
            $email_content .= "Email: $email\n";
            $email_content .= "Message:\n$message\n";

            // Create email headers
            $headers = "From: $name <$email>\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Send the email
            if (mail($to, $subject, $email_content, $headers)) {
                echo "<script>alert('Email sent successfully')</script>";
            } else {
                echo "<script>alert('Failed to send email')</script>";
            }
        }
        ?>
    </main>

    <footer>
        <div class="desk-footer">
            <div class="socials">
                <div class="flex footer-links">
                    <img src="images/linkedin.png" width="40px" height="40px">
                    <a href="" target="blank">
                        <p>Connect with me on LinkedIn</p>
                    </a>
                </div>
                <div class="flex footer-links">
                    <img src="images/github.png" width="40px" height="40px">
                    <a href="" target="blank">
                        <p>View my GitHub</p>
                    </a>
                </div>
            </div>
            <div class="footer-links links2">
                <a href="Contact.php">
                    <p>Contact Me</p>
                </a>
                <a href="Projects.html">
                    <p>My Projects</p>
                </a>
                <a href="Services.php">
                    <p>Services</p>
                </a>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.getElementById('toggle').addEventListener('click', function () {
            const border = document.querySelector('.header');
            border.classList.toggle('shrink'); // Add or remove the 'shrink' class
        });
    </script>
</body>

</html>