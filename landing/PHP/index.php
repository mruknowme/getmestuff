<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/index_style.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8">
    <title>GetMeStuff</title>
</head>

<body>
    <?php require_once("header.php") ?>
    <main>
        <div class="mainwrapper">
            <section class="main">
                <div class="maintextwrapper">
                    <h1>GetMeStuff</h1>
                    <p>Here at GetMeStuff, you can join a community of people, who give each other monetary help, so they can pursue their dreams.</p>
                    <a href="login.php">Sign Up</a>
                </div>
            </section>
        </div>
        <section class="about content">
            <img class="howimg" src="http://placehold.it/250x250">
            <div class="secondtextwrapper how">
                <h3>How it works?</h3>
                <p>The idea behind this site is very simple. Think about what you really want (iPhone, holidays) and ask people to help raise the funds. Although, to do this, you need to help first.</p>
                <a href="about.php" class="btn">More...</a>
            </div>
        </section>
        <div class="divisionwrapper">
            <section class="who content">
                <div class="secondtextwrapper we">
                    <h3>Who are we?</h3>
                    <p>Just to firends who understood, that in the hour of need, it can be embarassing to ask others for help. Therefore, we came up with the idea of asking anonymously not only your firends, but the whole world.</p>
                    <a href="about.php" class="btn">More...</a>
                </div>
                <img class="whoimg" src="http://placehold.it/250x250">
            </section>
        </div>
        <section class="story content">
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
            <section class="contact content">
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
