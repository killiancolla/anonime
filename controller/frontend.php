<?php

require('model/frontend.php');

function home()
{
    $pagetitle = "Home";
    $animes = getAllAnime();
    require('view/frontend/homeView.php');
}

function animeDetails() {
    $anime = getAnime($_GET['idAnime']);
    $pagetitle = $anime['title'];
    $animes = getAllAnime();
    require('view/frontend/animeView.php');
}