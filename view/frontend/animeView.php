<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>

    <div class="content grid-2-1">
        <div>
            <h2><?= $anime['libelle'] . " - Episode " . $anime['last_episode'] ?></h2>
            <iframe class="mb" width="100%" src="https://www.youtube.com/embed/eqVJNOI8m1g" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="grid-1-2 mb">
                <img class="release-picture"
                    src="<?= $anime['image_url'] ?>" alt=""
                    style="width:100%;">
                <div>
                    <strong>Type :</strong>
                    <p><?= $anime['type'] ?></p>
                    <strong>Status :</strong>
                    <p><?= $anime['status'] ?></p>
                    <strong>Studios :</strong>
                    <p><?= $anime['studios'] ?></p>
                    <strong>Duration :</strong>
                    <p><?= $anime['duration'] ?></p>
                    <strong>Genres :</strong>
                    <p><?= $anime['genres'] ?></p>
                </div>
            </div>
        </div>
        <div>
            <h2>Popular anime</h2>
            <div class="grid-1-1">
                <?php 
                    $i = 0;
                    $animeList = array($anime['id']);
                    if(count($animes) >= 6) 
                        $max = 6;
                    else 
                        $max = count($animes)-1;
                    while($i<$max) {
                        $rand = rand(0, count($animes)-1);
                        if(!in_array($animes[$rand]['id'], $animeList )) {
                            array_push($animeList, $animes[$rand]['id']);
                            $i++;
                            ?>
                            <a class="clickable" href="?action=animeDetails&idAnime=<?= $animes[$rand]['id'] ?>"><img class="release-picture" src="<?= $animes[$rand]['image_url'] ?>" style="width:100%;"></a>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>