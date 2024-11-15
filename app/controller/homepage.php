<?php

use Tmdb\Helper\ImageHelper;
use Tmdb\Repository\ConfigurationRepository;
use Tmdb\Repository\MovieRepository;

require_once 'vendor/autoload.php';
require_once 'app/apiconfig.php';
require_once 'app/functions.php';

/** @var Tmdb\Client $client */
$client = require_once ('app/tmdb-setup.php');
$configRepository = new ConfigurationRepository($client);
$config = $configRepository->load();

$repository = new MovieRepository($client);
$imageHelper = new ImageHelper($config);

$collection = $repository->getPopular();
$topRated = $repository->getTopRated();

function getTranslations($movie_id)
{
    global $repository;
    return $repository->getTranslations($movie_id)->filterLanguage();
}

function getDescription($movie_id): string
{
    $translations = getTranslations($movie_id);
    foreach ($translations as $translation) {
        return $translation->getData()['overview'];
    }
}

function getRuntime($movie_id): int
{
    $translations = getTranslations($movie_id);
    foreach ($translations as $translation) {
        return $translation->getData()['runtime'];
    }
}

function getImageUrl($movie_id, $type = 0): string
{
    global $repository, $imageHelper;
    $movie = $repository->getImages($movie_id);

    // 0 - poster, 1 - backdrop
    $backdrop = $type == 0 ? $movie->filterPosters()->filterBestVotedImage() : $movie->filterBackdrops()->filterBestVotedImage();

    return $imageHelper->getUrl($backdrop);
}

require 'app/views/home.php';
