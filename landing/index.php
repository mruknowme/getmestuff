<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/styles/main.css">

    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/jquery.pagepiling.min.js"></script>

    <script type="text/javascript"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetMeStuff</title>
    <script type="text/javascript">
        $(function() {
            $('#pp').pagepiling({
                 navigation: {
                    'textColor': '#FFF',
                    'bulletsColor': '#FFF',
                    'position': 'right',
                    'tooltips': ['Welcome', 'How it Works', 'Who are We', 'Success Stories', 'Contact Us']
                },
            });
        });
    </script>
</head>

<body class="index">
    <?php require_once("app/block/header.php") ?>
    <main id="pp">
        <section class="section">
            <div class="mw mh flex center vertical main-section">
                <h1>GetMeStuff</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item"><p class="mw">Here at GetMeStuff, you can join a community of people, who give each other monetary help, so they can pursue their dreams.</p></div>
                </div>
                <a class="btn" href="login.php">Sign Up</a>
            </div>
        </section>
        <section class="section">
            <div class="col-12 mw mh flex between m-auto s-section">
                <!-- <img class="howimg lazy" data-original="assets/img/placeholder250.png"> -->
                <img src="http://placehold.it/350x350">
                <div class="flex vertical start w5">
                    <h2>How it works?</h2>
                    <p>The idea behind this site is very simple. Think about what you really want (iPhone, holidays) and ask people to help raise the funds. Although, to do this, you need to help first.</p>
                    <a href="about.php" class="btn">More...</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="col-12 mw mh flex between m-auto s-section">
                <div class="flex vertical start w5">
                    <h2>Who are we?</h2>
                    <p>Just to firends who understood, that in the hour of need, it can be embarassing to ask others for help. Therefore, we came up with the idea of asking anonymously not only your firends, but the whole world.</p>
                    <a href="about.php" class="btn">More...</a>
                </div>
                <img src="http://placehold.it/350x350">
                <!-- <img class="whoimg lazy" data-original="assets/img/placeholder250.png"> -->
            </div>
        </section>
        <section class="section">
            <div class="col-12 mw mh flex vertical m-auto s-section center">
                <h2>Success stories</h2>
                <div class="flex between mw">
                    <div class="t-align">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                    <div class="t-align">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                    <div class="t-align">
                        <h4>Farid Muradly</h4>
                        <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                        <p>Raised: 100 000</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="col-12 mw mh flex vertical center m-auto s-section">
                <h2 class="self-start">Contact Us</h2>
                <div class="mw flex s-between contact-form">
                    <p class="w4">We would like to here from you about any suggestions or problems.</p>
                    <form class="vertical center w5">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Your Message..."></textarea>
                        <button class="self-start" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once("app/block/footer.php") ?>
</body>

</html>
