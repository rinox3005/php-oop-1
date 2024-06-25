<?php

$movies = [
    [
        "id" => $movie1->getMovieId(),
        "name" => $movie1->getTitle(),
        "year" => $movie1->getYear(),
        "genres" => $movie1->getGenres(),
        "director" => $movie1->getDirector(),
        "originalLanguage" => $movie1->getOriginalLanguage(),
        "duration" => $movie1->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie1->getActors())
    ],
    [
        "id" => $movie2->getMovieId(),
        "name" => $movie2->getTitle(),
        "year" => $movie2->getYear(),
        "genres" => $movie2->getGenres(),
        "director" => $movie2->getDirector(),
        "originalLanguage" => $movie2->getOriginalLanguage(),
        "duration" => $movie2->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie2->getActors())
    ],
    [
        "id" => $movie3->getMovieId(),
        "name" => $movie3->getTitle(),
        "year" => $movie3->getYear(),
        "genres" => $movie3->getGenres(),
        "director" => $movie3->getDirector(),
        "originalLanguage" => $movie3->getOriginalLanguage(),
        "duration" => $movie3->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie3->getActors())
    ],
    [
        "id" => $movie4->getMovieId(),
        "name" => $movie4->getTitle(),
        "year" => $movie4->getYear(),
        "genres" => $movie4->getGenres(),
        "director" => $movie4->getDirector(),
        "originalLanguage" => $movie4->getOriginalLanguage(),
        "duration" => $movie4->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie4->getActors())
    ],
    [
        "id" => $movie5->getMovieId(),
        "name" => $movie5->getTitle(),
        "year" => $movie5->getYear(),
        "genres" => $movie5->getGenres(),
        "director" => $movie5->getDirector(),
        "originalLanguage" => $movie5->getOriginalLanguage(),
        "duration" => $movie5->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie5->getActors())
    ],
    [
        "id" => $movie6->getMovieId(),
        "name" => $movie6->getTitle(),
        "year" => $movie6->getYear(),
        "genres" => $movie6->getGenres(),
        "director" => $movie6->getDirector(),
        "originalLanguage" => $movie6->getOriginalLanguage(),
        "duration" => $movie6->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie6->getActors())
    ],
    [
        "id" => $movie7->getMovieId(),
        "name" => $movie7->getTitle(),
        "year" => $movie7->getYear(),
        "genres" => $movie7->getGenres(),
        "director" => $movie7->getDirector(),
        "originalLanguage" => $movie7->getOriginalLanguage(),
        "duration" => $movie7->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie7->getActors())
    ],
    [
        "id" => $movie8->getMovieId(),
        "name" => $movie8->getTitle(),
        "year" => $movie8->getYear(),
        "genres" => $movie8->getGenres(),
        "director" => $movie8->getDirector(),
        "originalLanguage" => $movie8->getOriginalLanguage(),
        "duration" => $movie8->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie8->getActors())
    ],
    [
        "id" => $movie9->getMovieId(),
        "name" => $movie9->getTitle(),
        "year" => $movie9->getYear(),
        "genres" => $movie9->getGenres(),
        "director" => $movie9->getDirector(),
        "originalLanguage" => $movie9->getOriginalLanguage(),
        "duration" => $movie9->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie9->getActors())
    ],
    [
        "id" => $movie10->getMovieId(),
        "name" => $movie10->getTitle(),
        "year" => $movie10->getYear(),
        "genres" => $movie10->getGenres(),
        "director" => $movie10->getDirector(),
        "originalLanguage" => $movie10->getOriginalLanguage(),
        "duration" => $movie10->getDuration(),
        "actors" => array_map(function ($actor) {
            return $actor->getFullName();
        }, $movie10->getActors())
    ],
];
