<?php
 class RockPaperScissors {

    public $randomNumber;

    public function __construct() {
        if (!empty(isset($_POST["rock"])) || !empty(isset($_POST["paper"])) || !empty(isset($_POST["scissors"]))) {
            $this->generateRandomNumber();
        }
    }

    public function run() {
        echo $this->randomNumber;
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

 }