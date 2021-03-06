<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Casino royale - rock, paper, scissors</title>
</head>
<body>
	<header>
		<h1>ROCK PAPER SCISSORS</h1>
	</header>
	<main>
		<div class="result-container">
			<div class="player">
				<p>YOU</p>
				<img src=<?php $game->displayPlayerChoice(); ?> alt="rock">
				<p><?php $game->displayPlayerScore(); ?></p>
			</div>
			<div class="result">
				<p id="result-message"><?php $game->announceWinner(); ?></p>
				<p><?php $game->explainOutcome(); ?></p>
				<p><?php $game->displayRounds(); ?></p>
			</div>
			<div class="opponent">
				<p>OPPONENT</p>
				<img src=<?php $game->displayOpponentChoice();?> alt="rock">
				<p><?php $game->displayOpponentScore(); ?></p>
			</div>
		</div>
		<form action="" method="post">
			<div class="RPS-container">
				<input id="rock" type="submit" name="rock" value="ROCK"> 
				<input id="paper" type="submit" name="paper" value="PAPER">
				<input id="scissors" type="submit" name="scissors" value="SCISSORS">
			</div>
			<div class="reset-container">
				<button id="reset" type="submit" name="reset" <?php $game->playAgainBttn(); ?>>PLAY AGAIN</button>
			</div>
		</form>
	</main>
</body>
</html>