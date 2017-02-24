<!DOCTYPE html>
<html>

<head>
    <link href="../CSS/owlCarusel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../CSS/owlCarusel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/animate.css">
    <link href="../CSS/index_style.css" type="text/css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.smooth-scroll.js"></script>
    <script src="../JS/jquery.countTo.js"></script>
    <script src="../JS/jquery.lazyload.js"></script>
    <script src="../JS/jquery.waypoints.js"></script>
    <script src="../JS/owl.carousel.min.js"></script>
    <script src="../JS/wow.js"></script>
    <script src="../JS/index.js"></script>

    <script>
        $(function() {
            $(".lazy").lazyload({
                effect: "fadeIn"
            });

            $('body').smoothScroll({
                delegateSelector: 'aside.jumpto a'
            });

        });
        new WOW().init();  
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetMeStuff</title>
</head>

<body>
    <?php require_once("header.php") ?>
    <aside class="mobilenavwrapper">
        <div class="mobilenav">
            <ul>
                <li class="menu"><a class="menulink" href="index.php">Home</a></li>
                <li class="menu"><a class="menulink" href="about.php">About Us</a></li>
                <li class="menu"><a class="menulink" href="login.php#login">Log In</a></li>
                <li class="menu"><a class="menulink" href="login.php#signup">Sign Up</a></li>
                <li class="menu"><a class="menulink current">EN</a> | <a class="menulink">RU</a></li>
            </ul>
        </div>
    </aside>
    <main>
        <div class="mainwrapper">
            <section class="main" id="mainsection">
                <div class="maintextwrapper wow fadeIn">
                    <h1>GetMeStuff</h1>
                    <div class="moreinfo owl-carousel owl-theme">
                        <div class="item first"><p>Here at GetMeStuff, you can join a community of people, who give each other monetary help, so they can pursue their dreams.</p></div>
                        <div class="item"><p>Information about something1</p></div>
                        <div class="item"><p>Information about something2</p></div>
                        <div class="item"><p>Information about something3</p></div>
                        <div class="item"><p>Information about something4</p></div>
                        <div class="item"><p>Information about something5</p></div>
                    </div>
                    <a class="mainbtn" href="login.php">Sign Up</a>
                </div>
            </section>
        </div>
        <aside class="jumpto wow wobble">
                      <ul class="quicknav">
                        <li>
                          <span class="toolone">How it works?</span>
                          <a id="linkone" href="#how">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20">
                              <circle cx="10" cy="10" r='5' />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <span class="tooltwo">Who we are?</span>
                          <a id="linktwo" href="#who">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20">
                              <circle cx="10" cy="10" r='5' />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <span class="toolthree">Stories</span>
                          <a id="linkthree" href="#success">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20">
                              <circle cx="10" cy="10" r='5' />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <span class="toolfour">Contact</span>
                          <a id="linkfour" href="#contact">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20">
                              <circle cx="10" cy="10" r='5' />
                            </svg>
                          </a>
                        </li>
                      </ul>
        </aside>
        <section class="about content" id="how">
            <div class="imgwrapper">
                <img class="howimg lazy" data-original="../IMG/placeholder250.png">
            </div>
            <div class="secondtextwrapper how wow slideInUp">
                <h3>How it works?</h3>
                <p>The idea behind this site is very simple. Think about what you really want (iPhone, holidays) and ask people to help raise the funds. Although, to do this, you need to help first.</p>
                <a href="about.php" class="btn">More...</a>
            </div>
        </section>
        <div class="divisionwrapper">
            <section class="who content" id="who">
                <div class="secondtextwrapper we wow slideInUp">
                    <h3>Who are we?</h3>
                    <p>Just to firends who understood, that in the hour of need, it can be embarassing to ask others for help. Therefore, we came up with the idea of asking anonymously not only your firends, but the whole world.</p>
                    <a href="about.php" class="btn">More...</a>
                </div>
                <div class="imgwrapper">
                    <img class="whoimg lazy" data-original="../IMG/placeholder250.png">
                </div>
            </section>
        </div>
        <section class="story content" id="success">
            <div class="storywarpper wow slideInUp">
                <h3>Success stories</h3>
                <div class="successwrapper">
                    <div class="success">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                    <div class="success middle">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                    <div class="success">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="divisionwrapper">
            <section class="contact content" id="contact">
                <div class="contactwarpper wow bounceIn">
                    <h3>Contact Us</h3>
                    <div class="formwrapper">
                        <p>We would like to here from you about any suggestions or problems.</p>
                        <form>
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea name="message"></textarea>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once("footer.php")?>
</body>

</html>
