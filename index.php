<?php
$books = [ 
        [
        'name' => 'Do Androids Dream of Electric Sheep',
        'releaseDate' => 1968,
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'http://example.com'
    ], 
    [
        'name' => 'Project Hail Mary',
        'releaseDate' => 2021,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'releaseDate' => 2014,
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com'
    ]
];

    $filteredBooks = array_filter($books, function($book){
        return $book['releaseDate'] >= 1950 && $book['releaseDate'] <= 2020;
    });

require "index.view.php";
