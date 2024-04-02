<?php

$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep?",
        "author" => "Phillip K. Dick",
        "releaseYear" => 1968,
        "purchaseUrl" => "https://example.com",
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => "https://example.com",
    ],
    [
        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "https://example.com",
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$filteredBooks = filter($books, function ($book) {
    return $book["releaseYear"] < 2000;
});

$php_filteredBooks = array_filter($books, function ($book) {
    return $book["releaseYear"] >= 2000;
});

require "view.php";
