<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $playerGuess;

    // TODO: set a default amount of max guesses
    public function __construct(int $maxGuesses = 3)
    {   
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;

        if(!empty($_SESSION["secretNumber"])) {
            $this->secretNumber = $_SESSION["secretNumber"];
        }
    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: check if a secret number has been generated yet
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        if (empty($_SESSION["secretNumber"])) {
            $this->generateSecretNumber();
            $_SESSION["secretNumber"] = $this->secretNumber;
        }
        // TODO: check if the player has submitted a guess
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
        
        
        
    }

    public function generateSecretNumber() 
    {
        $this->secretNumber = random_int(1,22);
    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        echo "You guessed the secret number after ... guesses."
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        echo "You lose! The secret number is {$this->secretNumber}.";
    }

    public function playerGuessHigher() {
        //TODO: message if player's guess is higher
        echo "Your guess is higher than the secret number.";
    }

    public function playerGuessLower() {
        //TODO: message if player's guess is lower
        echo "Your guess is lower than the secret number.";
    }

    public function messageToPlayer() {
        
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
    }

}