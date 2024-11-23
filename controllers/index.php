<?php

$books = [
  [
    "name" => "one",
    "author" => "one A",
    "purchase_url" => "https://example.com",
    "release_year" => "2000",
  ],
  [
    "name" => "two",
    "author" => "two A",
    "purchase_url" => "https://example.com",
    "release_year" => "1000",
  ]
];

$filteredBooks = array_filter($books, function ($book) {
  return $book['release_year'] >= 1000;
});

// Variables declared here will be available in the "required"
$heading = 'Home';

// echo $_SERVER['REQUEST_URI'];

// var_dump($_SERVER);
// The view will have access to all of the data in this file
require "views/index.view.php";


