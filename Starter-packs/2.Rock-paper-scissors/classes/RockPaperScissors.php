<?php
 class RockPaperScissors {

    public $randomNumber;
    public $score = 0;
    public $rounds = 0;

    public function __construct() {
        if (!empty(isset($_POST["rock"])) || !empty(isset($_POST["paper"])) || !empty(isset($_POST["scissors"]))) {
            $this->generateRandomNumber();
        }

        if(!empty($_SESSION)) {
            $this->rounds = $_SESSION["rounds"];
        }
    }
    
    public function generateRandomNumber() {
        $this->randomNumber = random_int(1,3);
    }

    public function run() {
        
        if (isset($_POST["rock"])){
            $this->rounds++;
            $_SESSION["rounds"] = $this->rounds;
        } elseif (isset($_POST["paper"])) {
            $this->rounds++;
            $_SESSION["rounds"] = $this->rounds;
        } elseif ((isset($_POST["scissors"]))) {
            $this->rounds++;
            $_SESSION["rounds"] = $this->rounds;
        }
        echo "<br><br><br>";
        echo $this->rounds;
    }

    public function announceWinner() {
        switch (true) {
            case (empty($_POST["rock"]) && empty($_POST["paper"]) && empty($_POST["scissors"])):
                echo "LET'S PLAY";
                break;

            case ($this->randomNumber == 1 && isset($_POST["rock"])):
                echo "IT'S A TIE!";
                break;
            
            case ($this->randomNumber == 1 && isset($_POST["paper"])):
                echo "YOU WIN!";
                break;

            case ($this->randomNumber == 1 && isset($_POST["scissors"])):
                echo "YOU LOSE!";
                break;

            case ($this->randomNumber == 2 && isset($_POST["rock"])):
                echo "YOU LOSE!";
                break;

            case ($this->randomNumber == 2 && isset($_POST["paper"])):
                echo "IT'S A TIE!";
                break;

            case ($this->randomNumber == 2 && isset($_POST["scissors"])):
                echo "YOU WIN!";
                break;

            case ($this->randomNumber == 3 && isset($_POST["rock"])):
                echo "YOU WIN!";
                break;

            case ($this->randomNumber == 3 && isset($_POST["paper"])):
                echo "YOU LOSE!";
                break;

            case ($this->randomNumber == 3 && isset($_POST["scissors"])):
                echo "IT'S A TIE!";
                break;
        }
    }

    public function explainOutcome() {
        switch (true) {
            case (empty($_POST["rock"]) && empty($_POST["paper"]) && empty($_POST["scissors"])):
                echo "BEAT YOUR OPPONENT IN 10 ROUNDS";
                break;

            case ($this->randomNumber == 1 && isset($_POST["rock"])):
                echo "";
                break;
            
            case ($this->randomNumber == 1 && isset($_POST["paper"])):
                echo "PAPER WRAPS ROCK";
                break;

            case ($this->randomNumber == 1 && isset($_POST["scissors"])):
                echo "ROCK BLUNTS SCISSORS";
                break;

            case ($this->randomNumber == 2 && isset($_POST["rock"])):
                echo "PAPER WRAPS ROCK";
                break;

            case ($this->randomNumber == 2 && isset($_POST["paper"])):
                echo "";
                break;

            case ($this->randomNumber == 2 && isset($_POST["scissors"])):
                echo "SCISSORS CUT PAPER";
                break;

            case ($this->randomNumber == 3 && isset($_POST["rock"])):
                echo "ROCK BLUNTS SCISSORS";
                break;

            case ($this->randomNumber == 3 && isset($_POST["paper"])):
                echo "SCISSORS CUT PAPER";
                break;

            case ($this->randomNumber == 3 && isset($_POST["scissors"])):
                echo "";
                break;
        }
    }

    public function displayPlayerChoice() {
        if (empty($_POST["rock"]) && empty($_POST["paper"]) && empty($_POST["scissors"])) {
            echo "../../images/start-left.PNG";
        } elseif (isset($_POST["rock"])) {
            echo "../../images/rock-left.PNG";
        } elseif (isset($_POST["paper"])) {
            echo "../../images/paper-left.PNG";
        } elseif (isset($_POST["scissors"])) {
            echo "../../images/scissors-left.PNG";
        }
    }

    public function displayOpponentChoice() {
        if (empty($_POST["rock"]) && empty($_POST["paper"]) && empty($_POST["scissors"])) {
            echo "../../images/start-right.PNG";
        } elseif ($this->randomNumber == 1) {
            echo "../../images/rock-right.PNG";
        } elseif ($this->randomNumber == 2) {
            echo "../../images/paper-right.PNG";
        } elseif ($this->randomNumber == 3) {
            echo "../../images/scissors-right.PNG";
        }
    }

    public function playAgainBttn() {
        if($this->rounds == 10) {
            echo "style=display:block";
            $this->rounds = 0;
            $_SESSION["rounds"] = 0;
        } else {
            echo "style=display:none";
        }
    }
 }