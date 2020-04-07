<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Email for Realtors</title>
</head>
<body>
    <div class="home">  
<!--HEADER-->
    <header>
        <div class="head">
            <h2>Email for <span class="name">Realtors</span></h2>
        </div>

<!--NAVIGATION-->        
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SERVICES</a></li>
                <!-- <li><a href="#">BLOG</a></li> -->
                <!-- <li><a href="#">FEATURES</a></li> -->
                <!-- <li><a href="#">SHOP</a></li> -->
                <li><a href="#" type="button" class="quote">GET A QUOTE</a></li>
            </ul>
        </nav>
<!--END OF NAV-->        
    </header>
<!--END OF HEADER-->

    <div class="main">
        <div class="container">
            <h1>Email for <span class="name">Realtors</span></h1>
            <h3>Stay Top-of-Mind with your community</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aperiam a quis atque eius distinctio officia harum? Velit, magni. Corporis error voluptatem, ducimus, a eligendi, quasi hic inventore porro voluptates laudantium impedit? Alias qui repellendus in quasi nulla, exercitationem eos voluptates id dicta perferendis ullam impedit, facilis earum officiis praesentium.</p>
            <a href="#"><button>LEARN MORE</button></a>
        </div>
    </div>

    
    <aside>
        <p>Service starts at only <span class="price">$149</span></p>
        <a href="#"><button class="btn">FREE SYSTEM ANALYSIS</button></a>
    </aside>

    <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@evelynparis?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Evelyn  Paris"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Evelyn  Paris</span></a>
</div>

<div id="why-email">
    <h1>WHY EMAIL MARKETING?</h1>
    <div id="reasons">
        <div class="authority">
            <h3>Establish Authority</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
        </div>
        <div class="mind">
            <h3>Stay Top-of-Mind</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
        </div>
        <div class="relationship">
            <h3>Nurture Leads</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
        </div>
    </div>
</div> 

<div class="stats">
    <div class="forty">
        <div class="inner">
            <div class="roi">
                <h2>4000% ROI</h2>
            </div>
            <div class="invest">
                <p>The average return on investment for email marketing is $40 for every $1 spent!</p>
            </div>
        </div>
        <div class="chart">
            <img src="images/icons8-account-96.png" alt="chart showing positive return"/>
        </div>
    </div>
</div>
    
    <div id="services">
        <h1>WHAT WE OFFER</h1>
        <div id="offers">
            <div class="newsletter">
                <h3>Email Newsletter</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
            </div>
            <div class="targeted">
                <h3>Targeted Email Campaigns</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
            </div>
            <div class="webdev">
                <h3>Website Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
            </div>
            <div class="leadgen">
                <h3>Lead Generation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
            </div>
            <div class="lists">
                <h3>List Segmentation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorum ipsa saepe amet expedita facere nobis dolores! Enim alias neque nisi placeat quam, at, ipsum consequatur impedit quos sint ullam.</p>
            </div>
        </div>
    </div> 

    <div class="contact">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
          </div>
          <div class="row">
            <div class="column">
              <img src="" style="width:100%">
            </div>
            <div class="column">
            <form method="post" action="emailforrealtors.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your email..">

                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="Your Company">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>

    </div>

    
</body>
</html>





