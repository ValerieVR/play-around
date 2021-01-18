<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
</head>
<body>
<div id="maxGuess-container" <?php hideForm(); ?>>
		<header>
			<h1>GUESSING GAME</h1>
		</header>
		<main>
			<p>How many times would you like to guess?</p>
			<form action="" method="POST">
				<input type="text" id="maxGuess" name="maxGuess" required autocomplete="off"
                oninvalid="this.setCustomValidity('Please, this is required to start the game!')" 
                oninput="setCustomValidity('')"><br><br>
                <input type="submit" class="button" name= "maxGuess-bttn" value="START THE GAME">
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
				<input type="number" id="guess" min=1 max=22 name="guess" placeholder="Your guess:" 
                required autocomplete="off"
                oninvalid="this.setCustomValidity('Fill in a number between 1 and 22!')" 
                oninput="setCustomValidity('')"><br><br>
                <input type="submit" class="button" name="play-bttn" value="PLAY NOW"><br><br>
				<input type="submit" class="button" name="reset-bttn" value="RESET GAME">
			</form>
		</main>
	</div>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
		* {
			box-sizing: border-box;
		}

		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			margin-top: 150px;
			background-color: #bbbfca;
		}

		#game-container, #maxGuess-container {
			background-color: #525d6d;
			border-style: solid;
			padding: 40px;
			width: 450px;
		}

		#maxGuess-container {
			background-color: #eb596e;
		}

		h1 {
			margin-bottom: 0px;
			margin-top: 0px;
			font-family: Secular One, 'Times New Roman', Times, serif;
		}

		p {
			margin-top: 0px;
		}

		#maxGuess {
			width: 50px;
		}

		#guess {
			width: 100px;
		}

		p, #guess, .button {
			font-family: Roboto;
		}
	</style>
</body>
</html>