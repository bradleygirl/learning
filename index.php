<?php
//Sanitize name input from URI / form:
    $name = htmlspecialchars($_GET['name']);

//Greetings array: 
$greetings = [
    'Glad to see you again',
    'Howdy', 
    "We missed you", 
    'Hi there', 
    'Salutations',
    "It's great to have you back",
    'Bienvenuto',
    'Aloha',
    'Welcome back',
    'Guten Tag'
];

// Greeting generator for header:
$random_grt = array_rand($greetings, 1);
$greeting = $greetings[$random_grt];

// Animals array:
$animals = ['Gorilla', 'Bison', 'Leopard', $name, 'Husky', 'Yak'];

//Shopping list array:
$items = ['soap', 'toothbrush', 'eggs', 'milk', $name, 'butter'];
shuffle($items); 

//To-do list
$todo = ['Wash dishes', 'Shower', 'Get dressed', 'go to testing site', 'send jar of starter to sister\'s house', 'Download new contacts from users', 'upload to Constant Contact' ];

//Book list
$books = ['Bible', 'How To Avoid Huge Ships', 'Landscape in Sunlight', 'The Monsters and the Critics', 'Wings and Roots','Divided Allegiance'];

// Main index view:
require 'index.view.php';
