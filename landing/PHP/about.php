<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../CSS/about_style.css"s rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Merriweather:700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/animate.css">
    
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../JS/jquery.countTo.js"></script>
    <script src="../JS/jquery.lazyload.js"></script>
    <script src="../JS/wow.js"></script>
    <script src='../JS/about.js'></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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
        <div class="mainheadingwrapper">
            <h1 class="wow flipInX">Our Timeline</h1>
        </div>
        <section class="ourtimeline">
            <div class="timeline">
                <div class="seventeen">
                    <span>2017</span>
                </div>
                <div class="timelinecontainer">
                    <div class="timelineitem first">
                        <div class="timelineicon">
                        </div>
                        <div class="timelinecontent wow fadeInUp">
                            <div class="arrow"></div>
                            <h2>Idea</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate justo nibh, at condimentum ante laoreet molestie. Nullam vel metus et dui iaculis iaculis. Proin et augue sem. Quisque vehicula venenatis lorem id aliquet. Fusce sed mollis urna. Praesent tortor nibh, pellentesque et libero congue, semper interdum nunc.</p>
                        </div>
                    </div>
                    <div class="timelineitem inverted cf">
                        <div class="timelineicon">
                        </div>
                        <div class="timelinecontent right wow fadeInUp">
                            <div class="arrow"></div>
                            <h2>Development</h2>
                            <p>Aliquam quam urna, fermentum et nisi non, mattis vulputate erat. Sed eros dui, tristique in erat quis, fermentum sollicitudin dui. In consectetur faucibus nunc sit amet porta. Quisque ac pulvinar lorem. Nullam interdum turpis non finibus pharetra. Cras in tincidunt mauris, non pellentesque nisl. Vestibulum faucibus nulla ac vulputate elementum. Mauris mauris neque, efficitur id risus ut, pharetra tristique ligula. </p>
                        </div>
                    </div>
                    <div class="timelineitem">
                        <div class="timelineicon">
                        </div>
                        <div class="timelinecontent wow fadeInUp">
                            <div class="arrow"></div>
                            <h2>Launch</h2>
                            <p>Aliquam nulla ipsum, volutpat fringilla erat et, consequat vehicula ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ac ultricies quam, sit amet condimentum libero. Maecenas laoreet ipsum mollis, convallis massa in, finibus dui. Fusce mauris metus, venenatis at posuere consequat, iaculis vel sapien. Quisque id efficitur lorem. Nunc eu maximus nunc. In molestie libero vel tortor semper cursus. Aliquam mattis massa et ligula aliquam, a convallis nunc dictum. Sed vitae magna laoreet, bibendum metus porta, elementum leo.</p>
                        </div>
                    </div>
                    <div class="timelineitem inverted cf">
                        <div class="timelineicon">
                        </div>
                        <div class="timelinecontent right wow fadeInUp">
                            <div class="arrow"></div>
                            <h2>Update</h2>
                            <p>Morbi tincidunt nisl et ullamcorper faucibus. Mauris auctor lectus in libero aliquam blandit. Nullam aliquet tellus ac feugiat eleifend. Pellentesque tempus quam eros, vel tempor mi dignissim ac. Sed in turpis quis ligula dignissim mollis. Nullam leo diam, consectetur sed dolor eget, egestas malesuada dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once("footer.php") ?>
</body>

</html>
