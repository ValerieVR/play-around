<?php

class PlayAgainBttn {
    public static function displayBttn() {
        if (isset($_POST["rock"]) || isset($_POST["paper"]) || isset($_POST["scissors"])) {
            echo "style=display:block";
        } else {
            echo "style=display:none";
        }
    }
}