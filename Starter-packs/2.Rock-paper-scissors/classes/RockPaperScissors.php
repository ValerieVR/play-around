<?php
 class RockPaperScissors {

    public $randomNumber;

    public function __construct() {
        if (!empty(isset($_POST["rock"])) || !empty(isset($_POST["paper"])) || !empty(isset($_POST["scissors"]))) {
            $this->generateRandomNumber();
        }
    }

    public function run() {
        if ($this->randomNumber == 1) {
            echo "Rock image";
            echo "<br>";
            echo $this->randomNumber;
        } elseif ($this->randomNumber == 2) {
            echo "Paper image";
            echo "<br>";
            echo $this->randomNumber;
        } elseif ($this->randomNumber == 3) {
            echo "Scissors image";
            echo "<br>";
            echo $this->randomNumber;
        }
    }

    public function generateRandomNumber() {
        $this->randomNumber = random_int(1,3);
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

 }