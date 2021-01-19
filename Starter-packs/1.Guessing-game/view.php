<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Casino royale - guessing game</title>
</head>
<body>
<div id="maxGuesses-container" <?php hideForm(); ?>>
		<header>
			<h1>GUESSING GAME</h1>
		</header>
		<main>
			<p>How many times would you like to guess?</p>
			<form action="" method="POST">
				<input type="text" id="maxGuesses" name="maxGuesses" autocomplete="off"><br><br>
                <input type="submit" class="button" name= "maxGuesses-bttn" value="START THE GAME">
			</form>
		</main>
	</div>
	<div id="game-container" <?php displayForm(); ?>>
		<header>
			<h1>GUESSING GAME</h1>
		</header>
		<main>
			<p>Can you guess the secret number between 1 and 22?</p>
			<form action="" method="POST">
				<input type="number" id="guess" min=1 max=22 name="playerGuess" placeholder="Your gues ..." autocomplete="off"><br><br>
                <input type="submit" class="button" name="play-bttn" value="PLAY NOW"><br><br>
				<input type="submit" class="button" name="reset-bttn" value="RESET GAME"><br><br>
				<p><?php echo $game->messageToPlayer; ?></p>
			</form>
		</main>
	</div>
</body>
</html>