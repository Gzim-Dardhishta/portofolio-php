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

            <pre>
            <span class="yellow">{</span>
                <span class="blue">"Name"</span>:  "Gzim",
                <span class="blue">"LastName"</span>:  "Dardhishta",
                <span class="blue">"Age"</span>:  20,
                <span class="blue">"aboutMe"</span>: <span class="purple">[</span>
                    <span class="blue">{</span>
                        <span class="blue">"Profession"</span>:  "Student",
                        <span class="blue">"Info"</span>:  "I am Gzim Dardhishta Software Developer seeking for new challenges.
                        Very ambitious and hard worker. I’m keen to learn new things. 
                        I experienced in Web Development creating fast and good looking websites implementing my 
                        knowledge of Programming Languages such as ReactJs, SASS, Java, SQL, .Net, PHP"
                    <span class="blue">}</span>
                <span class="purple">]</span>
            <span class="yellow">}</span>
            </pre>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>