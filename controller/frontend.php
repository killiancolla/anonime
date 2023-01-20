<?php

require('model/frontend.php');

function home()
{
    
    $animes = getAllAnime();
    require('view/frontend/homeView.php');
    
}

function animeDetails() {
    $anime = getAnime($_GET['idAnime']);
    $animes = getAllAnime();
    require('view/frontend/animeView.php');
}