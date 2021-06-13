
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

                  <h2>Projects</h2>

                          <div class="imgMainBody">
                        <div class="imageFrame">
                            <div class="imageSlide">
                                <div class="imageContainer">
                                <img src="pics\pic1.png" alt="bigBuilderImages">
                                </div>
                                <div class="imageContainer">
                                <img src="pics\pic2.png" alt="bigBuilderImages">
                                </div>
                                <div class="imageContainer">
                                <img src="pics\pic3.png" alt="bigBuilderImages">
                                </div>
                                <div class="imageContainer">
                                <img src="pics\pic4.png" alt="bigBuilderImages">
                                </div>
                                <div class="imageContainer">
                                <img src="pics\pic5.png" alt="bigBuilderImages">
                                </div>
                                <div class="imageContainer">
                                <img src="pics\pic6.png" alt="bigBuilderImages">
                                </div>
                            </div>
                        </div>
                        <div class="imageFrame2">
                            <div class="imageSlide2">
                                <div class="imageContainer">
                                <img src="img2.png" alt="meTubeImages">
                                </div>
                                <div class="imageContainer">
                                <img src="img1.png" alt="meTubeImages">
                                </div>

                            </div>
                        </div>
                      <!-- <div id="web-app">
                            <img src="check-logo.png" alt="check-logo">
                            <a href="https://bigbuilders-home-app.herokuapp.com">Business Web App</a>
                        </div>

                    <div id="youtube-app">
                        <img src="check-logo.png" alt="check-logo">
                        <a href="#">Simple Youtube App</a>
                    </div>-->


                  </div>
                       <div class="label">
                  <a href="https://bigbuilders-home-app.herokuapp.com">Business App</a>
                   <a href="https://webdevmetube.herokuapp.com">Simple Youtube App</a>

                </div>

            </section>

                <section class="about" id="about" >
                    <div id="about-tile">
                    <h3>About</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Hello, Charlie II S. Gonzales here, and currently a 3rd-year
Computer Science student. I’m interested in the path of being a Web Developer. Other
than the subjects that they teach us under the curriculum of Computer Science,
I’m also enrolled in 2 online code camps which are the FreeCodeCamp and Codecademy.
I have completed the HTML and CSS part of the FreeCodeCamp and received the Responsive
Web Design Certificate. I can develop a simple front-end of a website using CSS and HTML.
I’m in the process of learning Javascript that is also essential in the front-end part of a website..</p>
                        <div class="download">
                        <div>
                            <label for="cv">Curriculum Vitae</label>
                            <a href="details\CV_CHARLIE_II_S_GONZALES.pdf">
                                <img id="cv" src="download-logo.png"  alt="download button">
                            </a>
                        </div>
                        <div> <label for="resume">Resume</label>
                             <a href="details\RESUME_CHARLIE_II_GONZALES.pdf">
                                <img id="resume" src="download-logo.png"  alt="download button">
                            </a>
                        </div>

                    </div>

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
