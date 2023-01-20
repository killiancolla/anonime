<?php

function getAnime($id)
{
    $datas = apiConnect($id);
    return $datas; 
}

function getAllAnime()
{
    $datas = apiConnect();
    return $datas['data'];
}

function apiConnect($id = '')
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $id ? "https://anime-db.p.rapidapi.com/anime/by-id/" . $id : "https://anime-db.p.rapidapi.com/anime?page=1&size=10&sortBy=ranking&sortOrder=asc",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: anime-db.p.rapidapi.com",
            "X-RapidAPI-Key: 2f665684dbmsh47ecaad328a1962p16fc67jsnb18cbc32e591"
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return (array)json_decode($response, true);
    }
}