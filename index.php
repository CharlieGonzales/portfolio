<?php ?>
<!DOCTYPE HTML>
          <html Lang="en">
<html>

<head>
       <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ied=edge"/>
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav>
        <ul class="nav-links">
                <li><a data-page="home" href="#home">Home</a></li>
                <li><a data-page="projects" href="#projects">Projects</a></li>
                <li><a data-page="about" href="#about">About</a></li>
                <li><a  data-page="contact" href="#contact">Contact</a></li>
                <div class="bubble"></div>
        </ul>
            <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

        </div>
        </nav>

        <main>
                <section class="home" id="home">
                    <div>
                        <p id="hi">Hi, I'm</p><br>
                        <h1>Charlie</h1>
                        <p id="description">Aspiring to be a Successful Web Developer</p>
                    </div>
                </section>
                <section class="projects" id="projects">

                  <div id="project-tile">
                  <h2>Projects</h2>

                       <div id="web-app">
                            <img src="check-logo.png" alt="check-logo">
                            <a href="https://bigbuilders-home-app.herokuapp.com">Business Web App</a>
                        </div>

                    <div id="youtube-app">
                        <img src="check-logo.png" alt="check-logo">
                        <a href="#">Simple Youtube App</a>
                    </div>


                  </div>


            </section>
                <section class="about" id="about" >
                    <div id="about-tile">
                    <h3>About</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Hello! I'm Charlie II S. Gonzales and my dream is to become a professional Web Developer.
I'm a beginner in Web Development and still learning. I sincerely hope that you can train me and guide me on my journey to be successful.
I'm eager to learn especially things that I enjoy doing. Thank you, and God Bless.</p>
                    </div>
                </section>


                <section class="contact" id="contact">
                    <h5>Contact</h5>
                    <div>
                        <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                 <img src="messenger-logo.png" alt="messenger-logo">
                            </div>
                    <div class="flip-box-back">
                        <a href="https://l.messenger.com/l.php?u=https%3A%2F%2Fm.me%2FcharlieG0930&h=AT1TMdVnLA8azC3f3ateVeroepX2beNPhKEM6g1iJhldfRY3BYWw2cfjP3XudwudvcTeUfVTi8t02rJp6JqjE7n462rjp16H97mn5clYopJjOaaSla4Vaee8RpviprpOMJ42gQ" target="_blank">Chat with me<br>on Facebook </a>
                    </div>
                         </div>
                    </div>

                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                 <img src="email-logo.png" alt="email-logo">
                            </div>
                    <div class="flip-box-back">
                        <a href="mailto:charliegonzales0930@gmail.com? &subject=Website_work_request">Send me an<br>Email</a>

                    </div>
                         </div>
                    </div>
                      <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                 <img src="whatsapp-logo.png" alt="whatsapp-logo">
                            </div>
                    <div class="flip-box-back">
                        <a href="https://wa.me/09390062336">Message me<br>on WhatsApp</p>

                    </div>
                         </div>
                    </div>
                    </div>
                </section>



<script src="index.js"></script>
        </main>
</body>

</html>
