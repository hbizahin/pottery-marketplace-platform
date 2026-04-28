<?php

require_once 'models/Artist.php';

class ArtistController
{
    public function index()
    {
        $model = new Artist();
        $artists = $model->getArtists();

        include 'views/artists.php';
    }
}