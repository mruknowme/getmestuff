<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather:700|Open+Sans" rel="stylesheet">
    <link href="../CSS/login_style.css" type="text/css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <?php require_once("header.php") ?>
    <main>
        <section class="main">
            <h1>Some heading</h1>
        </section>
        <section class="login">
            <form action="" method="post">
                <input name="login" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
    <?php require_once("footer.php") ?>
</body>

</html>
