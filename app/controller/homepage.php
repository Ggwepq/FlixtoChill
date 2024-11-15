<?php

use Tmdb\Helper\ImageHelper;
use Tmdb\Repository\ConfigurationRepository;
use Tmdb\Repository\MovieRepository;
use Tmdb\Repository\TvRepository;

require_once '../../vendor/autoload.php';
require_once '../apiconfig.php';
require_once '../functions.php';

/** @var Tmdb\Client $client */
$client = require_once ('../tmdb-setup.php');
$configRepository = new ConfigurationRepository($client);
$config = $configRepository->load();

// New classes
$repository = new MovieRepository($client);
$imageHelper = new ImageHelper($config);
$tv = new TvRepository($client);

// Movie Data
$collection = $repository->getPopular();
$topRated = $repository->getTopRated();
$nowPlaying = $repository->getNowPlaying();

// TV Shows
$latestShows = $tv->getTopRated();

function getTranslations($movie_id, $type = 0)
{
    global $repository, $tv;
    $translation = $type == 0 ? $repository->getTranslations($movie_id)->filterLanguage() : $tv->getTranslations($movie_id)->filterLanguage();
    return $translation;
}

function getDescription($movie_id, $type = 0): string
{
    $translations = getTranslations($movie_id, $type);
    foreach ($translations as $translation) {
        return $translation->getData()['overview'];
    }
}

function getRuntime($movie_id, $type = 0): int
{
    $translations = getTranslations($movie_id, $type);
    foreach ($translations as $translation) {
        return $translation->getData()['runtime'];
    }
}

function getImageUrl($movie_id, $imageType = 0, $type = 0): string
{
    global $repository, $imageHelper, $tv;
    $movie = $type == 0 ? $repository->getImages($movie_id) : $tv->getImages($movie_id);

    // 0 - poster, 1 - backdrop
    $backdrop = $imageType == 0 ? $movie->filterPosters()->filterBestVotedImage() : $movie->filterBackdrops()->filterBestVotedImage();

    return $imageHelper->getUrl($backdrop);
}

// dd(getImageUrl(73586, 0, 1));

require '../views/home.php';
