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
	<div id="game-container">
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
                <input type="submit" id="button" value="PLAY NOW">
			</form>
		</main>
	</div>
</body>
</html>