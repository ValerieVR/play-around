<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Open session
session_start();

// Load you classes
require_once 'classes/GuessingGame.php';

//variables
$game; // variable to define a new instance of the class GuessingGame



function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

// Function to hide form when user submits the amount of times he/she would like to guess
function hideForm() {
    if (isset($_POST["maxGuesses-bttn"])) {
        echo "style=display:none";
    } elseif (isset($_POST["play-bttn"])) {
        echo "style=display:none";
    }
}

// Function to display guessing game once the user has sumitted the amount of guesses
function displayForm() {
    if (isset($_POST["maxGuesses-bttn"])) {
        echo "style=display:block";
    } elseif (isset($_POST["play-bttn"])) {
        echo "style=display:block";
    } else {
        echo "style=display:none";
    }
}

// Start the game
// As this game is rather simple, one class should be sufficient
// $game = new GuessingGame(3);
// $game->run();

if (isset($_POST["maxGuesses"])) {
    $_SESSION["maxGuesses"] = (int)$_POST["maxGuesses"];
}




require 'view.php';