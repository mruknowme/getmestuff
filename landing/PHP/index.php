<!DOCTYPE html>
<html>

<head>
    <link href="../CSS/owlCarusel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../CSS/owlCarusel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/index_style.css" type="text/css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.smooth-scroll.js"></script>
    <script src="../JS/jquery.countTo.js"></script>
    <script src="../JS/jquery.lazyload.js"></script>
    <script src="../JS/jquery.waypoints.js"></script>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/owl.carousel.min.js"></script>

    <script>
        $(function() {
            $(".lazy").lazyload({
                effect: "fadeIn"
            });

            $('body').smoothScroll({
                delegateSelector: 'aside.jumpto a'
            });

        });  
    </script>

    <meta charset="utf-8">
    <title>GetMeStuff</title>
</head>

<body>
    <?php require_once("header.php") ?>
    <main>
        <div class="mainwrapper">
            <section class="main" id="mainsection">
                <div class="maintextwrapper">
                    <h1>GetMeStuff</h1>
                    <div class="owl-carousel owl-theme">
                    <div class="item"><p>Here at GetMeStuff, you can join a community of people, who give each other monetary help, so they can pursue their dreams.</p></div>
                    <div class="item"><p>Information about something1</p></div>
                    <div class="item"><p>Information about something2</p></div>
                    <div class="item"><p>Information about something3</p></div>
                    <div class="item"><p>Information about something4</p></div>
                    <div class="item"><p>Information about something5</p></div>
                    </div>
                    <a class="mainbtn" href="login.php">Sign Up</a>
                    <aside class="jumpto">
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
                </div>
            </section>
        </div>
        <section class="about content" id="how">
            <img class="howimg lazy" data-original="../IMG/placeholder250.png">
            <div class="secondtextwrapper how">
                <h3>How it works?</h3>
                <p>The idea behind this site is very simple. Think about what you really want (iPhone, holidays) and ask people to help raise the funds. Although, to do this, you need to help first.</p>
                <a href="about.php" class="btn">More...</a>
            </div>
        </section>
        <div class="divisionwrapper">
            <section class="who content" id="who">
                <div class="secondtextwrapper we">
                    <h3>Who are we?</h3>
                    <p>Just to firends who understood, that in the hour of need, it can be embarassing to ask others for help. Therefore, we came up with the idea of asking anonymously not only your firends, but the whole world.</p>
                    <a href="about.php" class="btn">More...</a>
                </div>
                <img class="whoimg lazy" data-original="../IMG/placeholder250.png">
            </section>
        </div>
        <section class="story content" id="success">
            <div class="storywarpper">
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
                <div class="contactwarpper">
                    <h3>Contact Us</h3>
                    <p>We would like to here from you about any suggestions or problems.</p>
                    <form>
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php require_once("footer.php")?>
</body>

</html>
