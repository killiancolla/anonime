<?php ob_start(); ?>

    <div class="content">
        <h2>Explorer</h2>
        <h3>What are you gonna watch today ?</h3>
        <div class="suggestion clickable" style="background-image:url(<?= $animes[0]["image"] ?>">
            <a href="?action=animeDetails&idAnime=<?= $animes[0]['_id'] ?>"></a>
            <div class="filter"></div>
            <div class="absolute-text">
                <h2><?= $animes[0]["title"] ?></h2>
                <p><?= $animes[0]["synopsis"] ?></p>
            </div>
        </div>
        <h2>New Release</h2>
        <div class="release">
            <?php
            $isfirst = true;
            foreach($animes as $anime){
                if($isfirst) {
                    $isfirst = false;
                } else {
?>
            <div class="clickable">
                <a href="?action=animeDetails&idAnime=<?= $anime['_id'] ?>"></a>
                <div class="release-picture" style="background-image:url(<?= $anime["image"] ?>)">
                    <div class="filter"></div>
                    <p class="absolute-text">Episodes : <?= $anime["episodes"] ?></p>
                </div>
                <h4><?= $anime["title"] ?></h4>
            </div>
<?php
                }
            }
            ?>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>