<?php

$books = [
    [
        'name' => 'Moodle for Developer',
        'author' => 'Kamal Faroug',
        'releasedYear' => '2020',
        'purchaseUrl' => 'https://moodle-for-dev.com',
    ],
    [
        'name' => 'Demo the concepts',
        'author' => 'Omer Osman',
        'releasedYear' => '2018',
        'purchaseUrl' => 'https://demo-the-concepts.com',
    ],
    [
        'name' => 'To it Demo',
        'author' => 'Omsna Ali',
        'releasedYear' => '2023',
        'purchaseUrl' => 'https://to-it-demo.com',
    ],
    [
        'name' => 'The demo you',
        'author' => 'Ali Faroug',
        'releasedYear' => '2000',
        'purchaseUrl' => 'https://the-demo-you.com',
    ],
    [
        'name' => 'Demo of Minds',
        'author' => 'Kamal Faroug',
        'releasedYear' => '2015',
        'purchaseUrl' => 'https://demo-of-minds.com',
    ],
    [
        'name' => 'Develpment the Demo theroy',
        'author' => 'Kamal Faroug',
        'releasedYear' => '2024',
        'purchaseUrl' => 'https://dev-the-demo-theory.com',
    ],
    [
        'name' => 'The Theory of everyDemo',
        'author' => 'Omer Ali',
        'releasedYear' => '1992',
        'purchaseUrl' => 'https://theory-of-everydemo.com',
    ],
    [
        'name' => 'Demo this Demo that',
        'author' => 'Omer Faroug',
        'releasedYear' => '2019',
        'purchaseUrl' => 'https://d-this-d-that.com',
    ],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === "Kamal Faroug";
});

require "./index.view.php";
