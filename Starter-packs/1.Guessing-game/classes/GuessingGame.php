<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $messageToPlayer;
    public $playerGuesses = 0;

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
        if(empty($this->secretNumber)) {
            $this->generateSecretNumber();
        } 
            
        

        // TODO: check if the player has submitted a guess
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game

        
    }

    public function generateSecretNumber() 
    {
        $this->secretNumber = random_int(1,22);
        $_SESSION["secretNumber"] = $this->secretNumber;
    }

  
    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
    }

    public function playerGuessHigher() {
        //TODO: message if player's guess is higher
    }

    public function playerGuessLower() {
        //TODO: message if player's guess is lower
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
    }

}