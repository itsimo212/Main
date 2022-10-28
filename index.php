<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">



</head>

<body class="">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/gamingcampusparis.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Navigate to <span>Blogs</span>

                </h1>
                <p>
                    Powered by Gaming Campus
                </p>
                <div class="btn-con">

                </div>
            </div>
        </div>
    </header>
    <main>

        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/Moha.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="Mohamed/index.php">Mohamed's Website</a>
                            </h4>

                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/nico.jpeg" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="Nico/index.html">Nico's Website</a>
                            </h4>

                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/lilian.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="Lilian/index.php">Lilian's Website</a>
                            </h4>

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            In, laborum numquam? Quam excepturi perspiciatis quas quasi.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : London, united Kingdom
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: maclinzuniversal@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>: Sussex University, East Sussex</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: 07522670617</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: Afrikaans, English, Spanish</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="connect.php" method="post" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME" name="name">
                                <input type="email" required placeholder="YOUR EMAIL" name="mail">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT" name="subject">
                            </div>
                            <div class="input-control">
                                <textarea name="text" required cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="submit-btn">
                                <button type="submit" class="main-btn">
                                    <span class="btn-text" style="color:#454e56">Submit</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>


        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>

    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>


</body>

</html>