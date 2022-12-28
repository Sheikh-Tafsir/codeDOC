<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="home.css">
    <link rel="shortcut icon" href="images/logo.ico" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akshar' rel='stylesheet'>
</head>
<body>
     <a id="Home"></a>
        <div class="cov">
            <div class="header" data-aos="fade-down">
                <div class="headlogo">
                    <a href="https://sheikh-tafsir.github.io/octo-journey.github.io/"><img src="images/code1.png" height="75" width="200"></a>
                </div>
                <div class="headbar">
                    <i class="fa-solid fa-xmark xmark" onclick="settmin()"></i>
                    <i class="fa fa-bars bars" onclick="settmax()"></i>
                </div>
                <div class="headmenu">
                    <a href="#Home">Home</a>
                    <a href="#services">Services</a>
                    <a href="#About">About</a>
                    <a href="#Contacts">Contacts</a>
                    <button class="logout"><a href="indexpat.php">Login</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
            </div>

            <div class="banner">
                <div class="motto" data-aos="fade-right">
                    <h1>NEVER STOP TO</h1>
                    <h2>HELP THE WORLD</h2>
                    <p>We help people to find the best and preferable visiting spots all over Bangladesh.</p>
                    <p>Lorem Ipsum Dolor Sit Amrt Consecutor Adipisocing Eit SIt Consequuntor?</p>
                    <button class="btn">EXPLORE</button>
                </div>
            </div>
        </div>

        <a id="services"></a>
        <div class="headline">
            <h1 class="fir">PROVIDED &nbsp;</h1>
            <h1 class="sec">SERVICES</h1>
        </div>

        <div class="place-bar" data-aos="fade-left">
            <div class="srvcmenu">
                <div class="srvc">
                    <div class="srvcimg">
                        <img src="https://img.pikbest.com/png-images/20211011/tiny-programmers-upgrading-operation-system-of-computer_6142453.png!bw700" />
                    </div>
                    <h2>Book Appointment</h2>
                    <p> Book a room in your preferred slot and date depending on availability for a quiz or extra class.</p>
                    <button><a href="#" class="srvclink">Book</a></button>
                </div>
                <div class="srvc">
                    <div class="srvcimg">
                        <img src="https://www.pngfind.com/pngs/m/74-746223_notifications-vector-laundry-icon-png-transparent-png.png" />
                    </div>
                    <h2>Check Appoinments</h2>
                    <p>Manage your room bookings, change the timing or cancel the booking all together based on your requirement. </p>
                    <button><a href="#" class="srvclink">Manage</a></button>
                </div>
                
                <div class="srvc">
                    <div class="srvcimg">
                        <img src="https://www.pngitem.com/pimgs/m/157-1576399_learning-daily-routine-business-man-hd-png-download.png" />
                    </div>
                    <h2>View Profile</h2>
                    <p> Make your routine by giving the coursenames , courseteachers and other constraints! </p>
                    <button><a href="#" class="srvclink">Let's Go</a></button>
                </div>
            </div>
        </div>

        <a id="About"></a>
        <div class="headline">
            <h1 class="fir">ABOUT &nbsp;</h1>
            <h1 class="sec">US</h1>
        </div>
        <div class="about" data-aos="fade-right">
            <div class="ab" >
                <h1>What Makes Us Special?</h1>
                <p>tera yakin kyon maine kiya nahi, tujhse raah kyon juda mujh pe yeh zindagi karti rahi sitam une hi di hai panah </p>
                <p>mera rishta puraana. hai kya tadap,hai yeh kaisi saza tu kyun mujhe aaj yaad aa gaya bechain</p>
                <p> din mere, bechain raat hai kya main karu kuchh bata yeh mere paanv hi khud<</p>
            </div>
            <img src="images/image1.jpg" alt="Girl in a jacket" width="500" height="450" class="abtImg" >

        </div>
        

        <a id="Contacts"></a>
        <div class="headline">
            <h1 class="fir">CONTACT &nbsp;</h1>
            <h1 class="sec">US</h1>
        </div>
        <div class="contacts">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1823.6940172161292!2d90.4005318070167!3d23.911309797940902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4f7327b77d9%3A0x3a4d627fbb048dcc!2z4Kam4Kak4KeN4Kak4Kaq4Ka-4Kec4Ka-LCDgpp_gppngp43gppfgp4A!5e0!3m2!1sbn!2sbd!4v1639748336310!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" data-aos="fade-right"></iframe>
            <div class="con" data-aos="fade-left">
                    <form class="con-form" action="https://formspree.io/f/xeqnvlln" method="POST">
                        <h1>GET IN TOUCH</h1>
                        <input type="text" id="name" placeholder="Your Name" name="Name" required>
                        <input type="email" id="email" placeholder="Your Emaiil" name="Email" required>
                        <textarea id="message" placeholder="Your Needs" name="needs" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                
            </div>
        </div>

        <div class="footer">
            <div class="follow">
                <a href="https://www.facebook.com/tmr.rahman" target="_blank" class="icon-style fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/sheikh_tafsir_rahman/" target="_blank" class="icon-style fab fa-instagram"></a>
                <a href="https://github.com/Sheikh-Tafsir" target="_blank" class="icon-style fab fa-github"></a>
                <a href="https://github.com/Sheikh-Tafsir" target="_blank" class="icon-style fab fa-twitter"></a>
                <a href="https://github.com/Sheikh-Tafsir" target="_blank" class="icon-style fa fa-linkedin"></a>
            </div>
            <h1>Created By Mr. Sheikh| All Rights Reserved</h1>
        </div>

     <!--<h1>Hello, <?php echo $_SESSION['name']; ?></h1>-->
</body>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="home.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease',
        once: true,
        anchorPlacement: 'middle-bottom',
    });
</script>
</html>
