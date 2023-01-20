<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

    <div class="content grid-2-1">
        <div>
            <h2><?= $anime['title'] ?></h2>
            <iframe class="mb" width="100%" src="https://www.youtube.com/embed/eqVJNOI8m1g" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="grid-1-2 mb">
                <img class="release-picture"
                    src="<?= $anime['image'] ?>" alt=""
                    style="width:100%;">
                <div>
                    <strong>Type :</strong>
                    <p><?= $anime['type'] ?></p>
                    <strong>Status :</strong>
                    <p><?= $anime['status'] ?></p>
                    <strong>Rang :</strong>
                    <p><?= $anime['ranking'] ?></p>
                    <strong>Genres :</strong>
                    <ul>
                        <?php
                        foreach($anime['genres'] as $genre) {
                            echo "<li>" . $genre . "</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <h2>Popular anime</h2>
            <div class="grid-1-1">
                <?php 
                    $i = 0;
                    $animeList = array($anime['_id']);
                    if(count($animes) >= 6) 
                        $max = 6;
                    else 
                        $max = count($animes)-1;
                    while($i<$max) {
                        $rand = rand(0, count($animes)-1);
                        if(!in_array($animes[$rand]['_id'], $animeList )) {
                            array_push($animeList, $animes[$rand]['_id']);
                            $i++;
                            ?>
                            <a class="clickable" href="?action=animeDetails&idAnime=<?= $animes[$rand]['_id'] ?>"><img class="release-picture" src="<?= $animes[$rand]['image'] ?>" style="width:100%;"></a>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>