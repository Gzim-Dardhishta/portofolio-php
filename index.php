<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Gzim Portofolio</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>XIMI</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li class="nav-link"><a href="#home">#Home</a></li>
                <li class="nav-link"><a href="#about">#About</a></li>
                <li class="nav-link"><a href="#">#Skills</a></li>
                <li class="nav-link"><a href="#">#Contact</a></li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main>
        <div id="home" class="home">
            <div class="introduce">
                <p class="test">Hi, I am Ximi!</p>
                <h3>I'm Software Developer</h3>

                <div class="cv">
                    <a href="./Gzim Dardhishta-CV.pdf" target="_blank">Get my CV</a>
                </div>
            </div>

            <div class="image">
                <img src="./images/bitmoji.jpg" alt="" width="300" height="300">
            </div>
        </div>

        <div id="about">
            <p class="about me">Get to know me</p>

            <div class="pre">
                <span class="yellow">{<br></span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"Name"</span>: "Gzim",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"LastName"</span>: "Dardhishta",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"Age"</span>: 20,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"aboutMe"</span>: <span class="purple">[</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"Profession"</span>: "Student",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">"Info"</span>: "I am a Software Developer seeking for new challenges.
                Very ambitious and hard worker. I’m keen to learn new things.
                I experienced in Web Development creating fast and good looking websites."<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="blue">}</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple">]</span><br>
                <span class="yellow">}</span>
            </div>
        </div>


        <!-- Skills -->
        <div id="skills">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="./images/react.png" width="100%">
                    <div class="text">ReactJs</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="./images/sass.png" width="100%">
                    <div class="text">Sass</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="./images/java.png" width="100%">
                    <div class="text">Java</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="./images/sql.png" width="100%">
                    <div class="text">SQL</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="./images/net.png" width="100%">
                    <div class="text">.Net Core</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="./images/php.png" width="100%">
                    <div class="text">PHP</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>