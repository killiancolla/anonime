<!DOCTYPE html>
<html>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <link href="public/css/fonts.css" rel="stylesheet" /> 
        
    <body>
        <nav>
            <a href="index.php"><h2 class="logo">Anonime</h2></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">List anime</a></li>
            </ul>
            <input type="text" placeholder="Search anime of movies">
        </nav>
        <?= $content ?>
    </body>
</html>