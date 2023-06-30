<!DOCTYPE html>
<html>
        <meta charset="utf-8" />
        <title>Anonime - <?= $pagetitle ?></title>
        <link href="public/css/style.css" rel="stylesheet" />
        <link href="public/css/fonts.css" rel="stylesheet" />
        <link rel="icon" href="public/img/favicon.ico" />
    <body>
        <nav>
            <a href="index.php"><h2 class="logo">
                <img style="width: 20%; aspect-ratio: 1;" src="public/img/1.png" alt="">
            </h2></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">List anime</a></li>
            </ul>
            <input type="text" placeholder="Search anime of movies">
        </nav>
        <?= $content ?>
    </body>
</html>