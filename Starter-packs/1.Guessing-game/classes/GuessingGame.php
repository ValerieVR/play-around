<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $messageToPlayer;
    public $numberOfGuesses = 0;

    public function __construct(int $maxGuesses = 3)
    {   
        $this->maxGuesses = $maxGuesses;

        if(!empty($_SESSION["secretNumber"])) {
            $this->secretNumber = $_SESSION["secretNumber"];
        }

        if (!empty($_SESSION["numberOfGuesses"])) {
            $this->numberOfGuesses = $_SESSION["numberOfGuesses"];
        }
    }

    public function run()
    {   
        if(empty($this->secretNumber)) {
            $this->generateSecretNumber();
        } 
            
        if (!empty($_POST["playerGuess"])) {
            $this->numberOfGuesses++;
            $_SESSION["numberOfGuesses"] = $this->numberOfGuesses;
            if ($_POST["playerGuess"] == $this->secretNumber) {
                $this->playerWins();
            } 
            if ($_POST["playerGuess"] > $this->secretNumber) {
                $this->playerGuessHigher();
            } 
            if ($_POST["playerGuess"] < $this->secretNumber) {
                $this->playerGuessLower();
            }
            
            if ($this->maxGuesses == $this->numberOfGuesses) {
                $this->playerLoses();
            }
        }
        
        if (!empty($_POST["reset-bttn"])) {
            $this->reset();
        }
        
    }

    public function generateSecretNumber() 
    {
        $this->secretNumber = random_int(1,22);
        $_SESSION["secretNumber"] = $this->secretNumber;
    }

  
    public function playerWins()
    {
        $this->messageToPlayer = "<strong>You won! You needed {$this->numberOfGuesses} guesses to find the secret number.</strong>";
        $this->reset();
    }

    public function playerLoses()
    {
        $this->messageToPlayer = "<strong>You lost! The secret number is {$this->secretNumber}.</strong>";
        $this->reset();
    }

    public function playerGuessHigher() 
    {
        $this->messageToPlayer = "<strong>Your guess is higher than the secret number.</strong>";
    }

    public function playerGuessLower() 
    {
        $this->messageToPlayer = "<strong>Your guess is lower than the secret number.</strong>";
    }

    public function reset()
    {
        $this->generateSecretnumber();
        $this->numberOfGuesses = 0;
        $_SESSION["numberOfGuesses"] = 0;

    }
}