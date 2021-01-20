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
				<img src="../../images/start-left.PNG" alt="rock">
				<p>0</p>
			</div>
			<div class="result">
				<p id="result-message">YOU WON!!</p>
				<p>PAPER WRAPS ROCK</p>
			</div>
			<div class="opponent">
				<p>OPPONENT</p>
				<img src="../../images/start-right.PNG" alt="rock">
				<p>0</p>
			</div>
		</div>
		<form action="" method="post">
			<div class="RPS-container">
				<button id="rock" type="submit" name="rock">ROCK</button>
				<button id="paper" type="submit" name="paper">PAPER</button>
				<button id="scissors" type="submit" name="scissors">SCISSORS</button>
			</div>
			<div class="reset-container">
				<button id="reset" type="submit" name="reset">PLAY AGAIN</button>
			</div>
		</form>
	</main>
</body>
</html>