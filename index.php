<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>cachom</title>
</head>
<body>
    <section class="header">
        <div class="navbar">
            <img src="images/logo.png" alt="church logo">
                <ul class="nav" id="mynav">
                    <li><a href="">Home</a></li>
                    <li><a href="#Study">Study</a></li>
                    <li><a href="#event">Event</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a class="toggle">
                    <i class="fa fa-bars"></i>
                </a>
        </div>
    </section>
    <section class="hero">
        <div class="container">
            <div class="content">
                <h1>CHRIST APOSTOLIC CHURCH <br><span>HOUSE OF MERCY</span></h1>
                <p><em>One Fold One Shephard</em> </p>
                <div class="btn">
                    <button><a href="#contact">Join Us</a></button>
                </div>
            </div>
        </div>
    </section>
    <section class="slider">
        <div class="slide-title">
            <h2>Watch-Word</h2>
        </div>
        <div class="container">
            <div class="mySlides">
                <p>English Version</p>
                <q>Your word is a lamp to my feet
                    And a light to my path.
                </q>
                <p class="verse"><em class="B-text">Psalm 119:105</em></p>
            </div>
            <div class="mySlides">
                <p>Yoruba Version</p>
                <q>Ọ̀rọ̀ rẹ ni fìtílà sí ẹsẹ̀ mi àti ìmọ́lẹ̀ sí ipa ọ̀nà mi</q>
                <p class="verse"><em class="B-text">ORIN DAFIDI 119:105</em></p>
            </div>
            <div class="mySlides">
                <p>Hausa Version</p>
                <q>Maganarka fitila ce wadda za ta bi da ni, Haske ne kuma a kan hanyata.</q>
                <p class="verse"><em class="B-text">Zab 119:105</em></p>
            </div>
            <div class="mySlides">
                <p>Igbo Version</p>
                <q>Okwu-gi bụ oriọna rue ụkwụ m ìhè, bụrụkwa ìhè si m ụzọ.</q>
                <p class="verse"><em class="B-text">Abụ Ọma 119: 105</em></p>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </section>
    <section class="main" id="Study">
        <div class="max-width">
            <h3 class="title">Study</h3>
            <div class="main-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <div class="text">Sunday School Pamphlet</div>
                        <p>sunday school study book</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <div class="text">Living Waters</div>
                        <p>We have daily study</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <div class="text">Bible Study</div>
                        <p>Weekely Verse of Study</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event" id="event">
        <h3 class="title">Events</h3>
        <div class="container-1">
            <div class="event-1">
                <h5 class="heading">Pastors Comference</h5>
                <p>The pastor's comference is an annual program that takes place at the CAC memorial int'l miracle camp ikeji arakeji Osun state Nigeria.<br>
                This comference are held to regenerate the life of everyone in attendance and help to inprove the life of every single attendant do well to attend if yor're parth of this category.
                </p>
                <button class="view">View Details</button>
            </div>
            <img src="images/pastor.jpg" alt="P-comference">
        </div>
        <div class="container-2">
            <div class="event-2">
                <h5 class="heading">Cama Comference</h5>
                <p>The CAMA comference is an annual program that takes place at the CAC memorial int'l miracle camp ikeji arakeji Osun state Nigeria.<br>
                This comference are held to regenerate the life of everyone in attendance and help to inprove the life of every single attendant do well to attend if yor're parth of this category.
                </p>
                <button class="view">View Details</button>
            </div>
            <img src="images/cama.jpg" alt="c-comference">
        </div>
        <div class="container-3">
            <div class="event-3">
                <h5 class="heading">Good Women Comference</h5>
                <p>The Good Women comference is an annual program that takes place at the CAC memorial int'l miracle camp ikeji arakeji Osun state Nigeria.<br>
                This comference are held to regenerate the life of everyone in attendance and help to inprove the life of every single attendant do well to attend if yor're parth of this category.
                </p>
                <button class="view">View Details</button>
            </div>
            <img src="images/gw.jpg" alt="c-comference">
        </div>
        <div class="container-4">
            <div class="event-4">
                <h5 class="heading">Minister's Wife Comference</h5>
                <p>The Minister's Wife comference is an annual program that takes place at the CAC memorial int'l miracle camp ikeji arakeji Osun state Nigeria.<br>
                This comference are held to regenerate the life of everyone in attendance and help to inprove the life of every single attendant do well to attend if yor're parth of this category.
                </p>
                <button class="view">View Details</button>
            </div>
            <img src="images/mwife.jpg" alt="c-comference">
        </div>
    </section>
    <section class="about" id="about">
        <h3 class="title">About</h3>
        <div class="abt-section">
            <div class="card-1">
                <b>mission</b>
                <p>Leading people into the knowledge of God through an in-depth study of The Word of God, prevailing prayer, and spiritual worship.</p>
            </div>
            <div class="card-2">
                <b>Vission</b>
                <p>Soul winning and spiritual re-awakening of the world.</p>
            </div>
            <div class="card-3">
                <b>Motto</b>
                <p>One Fold One Shephard</p>
            </div>
        </div>
        <div class="about-container">
            <div class="c-1">
                <p>The President</p>
                <img src="images/president.png" alt="President">
                <p class="content"><span>S.O. Oladele</span> is the president of CAC both Nigeria and Oversea</p>
            </div>
            <div class="c-2">
                <p>The Pastor</p>
                <img src="images/pastor.png" alt="President">
                <p class="content"><span>Pastor Omoloye Ariyo Babatola</span> is the resident pastor of House of Mercy Kaduna Nigeria</p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h3 class="title">Contact Us</h3>
        <div class="form-container">
            <form action="connect.php" class="form" method="post">
                <div>
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Enter Name" name="name" required>
                </div>
                <div>
                    <label for="name">Email</label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                </div>
                <div>
                    <label for="name">Phone Number</label>
                    <input type="text" placeholder="Enter phone number" name="phone" required>
                </div>
                <div>
                    <label for="name">Address</label>
                    <textarea name="address" id="address" cols="20" rows="1" required></textarea>
                </div>
                <div class="join-btn">
                    <button type="submit" name="submit">Join us now</button>
                </div>
            </form>
        </div>
    </section>
    <div class="foter">
        <div class="foter-container">
            <div class="foter-content">
                <p class="copy">&copy; Copyright 2023 Built with &#x2661; by A-prime</p>
            </div>
            <div class="foter-icons">
                <a href=""><img src="images/facebook.svg" alt="facebook"></a>
                <a href=""><img src="images/youtube.svg" alt="youtube"></a>
            </div>
        </div>
    </div>
<script src="script.js">
</script>
</body>
</html>