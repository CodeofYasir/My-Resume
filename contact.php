<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./css/main.js" defer></script>
    <title>Resume</title>
</head>

<body>
    <div class="nav-container">
        <div class="logo">
            <h2>Portfolio</h2>
            <div class="div-icon">
                <button class="icon" id="open"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <button class="icon" id="close"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./project.php">Projects</a></li>
                <li><a href="./contact.php">Contact Us</a></li>
                <li>
                    <a class="btn" href="./img/YasirAkramCV.pdf" type="submit" Download="YasirAkram">Download CV</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="left_side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="img/profile.jfif" alt="this is a image">
                </div>
                <h2>Yasir Akram <br> <span>Web Developer</span></h2>
            </div>
            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text">+92 308 6200608</span>
                    </li>
                    <!-- <li>
                        <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                        <span class="text">www.google.com</span>
                    </li> -->
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">yasir311997@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <span class="text">www.linkedin.com/in/yasir-rajput/</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">Sultan Town, Lahore, Pakistan</span>
                    </li>
                </ul>
            </div>
            <div class="contactInfo education">
                <h3 class="title">education</h3>
                <ul>
                    <li>
                        <h5>2017-2021</h5>
                        <h4>Bachelor In Compter Science</h4>
                        <h4>Superior University, Lahore</h4>
                    </li>
                    <li>
                        <h5>2015-2017</h5>
                        <h4>Fsc Pre Engineering</h4>
                        <h4>Punjab College, Gujrawala</h4>
                    </li>
                    <li>
                        <h5>2013-2015</h5>
                        <h4>Matriculation</h4>
                        <h4>Govt Hight School, Kamoke</h4>
                    </li>

                </ul>
            </div>
            <div class="contactInfo language">
                <h3 class="title">Language</h3>
                <ul>
                    <li>
                        <span class="text">English</span>
                        <span class="percent">
                            <div style="width: 90%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Urdu</span>
                        <span class="percent">
                            <div style="width: 100%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Chinese</span>
                        <span class="percent">
                            <div style="width: 50%;"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right_side">
            <div class="top-side">
                <img src="./img/contect.png" alt="">
            </div>
            <div class="middle-side">
                <form action="https://formspree.io/f/mknydwva" method="post" class="contact-form">
                    <div class="form-name">
                        <input type="text" name="FirstName" placeholder="Enter First Name" required>
                        <input type="text" name="LastName" placeholder="Enter Last Name" required>
                    </div>
                    <input type="email" name="Emailaddress" placeholder="Enter Email Address" required>
                    <textarea name="message" rows="7" placeholder="Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>