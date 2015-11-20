<?php
$ok = -1;

require "lib/ResponsiveCaptcha.php";
use theodorejb\ResponsiveCaptcha;
$captcha = new ResponsiveCaptcha();

$answer = filter_input(INPUT_POST, "captcha");

if ($answer !== null) {
    if ($captcha->checkAnswer($answer)) {
        $ok = 1;
        mail ("kryzaal@gmail.com", filter_input(INPUT_POST, "type"), 
        	"Message de : " 
        	. filter_input(INPUT_POST, "nom") 
        	. ' ' 
        	. filter_input(INPUT_POST, "mail")
        	. '\n'
        	. filter_input(INPUT_POST, "text")
    	);
    } else {
        $ok = 0;
    }
}
?>

<!DOCTYPE html>
<html>
<?php include("head.html"); ?>
<body>
	<?php include("header.php"); ?>
	<section>
		<form method="POST" action="rapporter.php">
			<h2>Rapporter un fait</h2>

			<label>Nom ou pseudo<br/><input type="text" name="nom" /></label><br/>

			<label>Adresse email<br/>(Non obligatoire)<br/><input type="text" name="mail" /></label><br/>

			<label>Type de message<br/>
			<select name="type">
				<option value="fait">Nouveau fait ou nouvelle source</option>
				<option value="erreur">Correction d'une erreur</option>
				<option value="message">Message autre</option>
			</select></label><br/>

			<label>Message<br/><textarea name="text"></textarea></label>
			<p>Merci de sourcer au maximum toute information. Notre équipe effectuera les recoupements nécessaires.</p>

			<label>
				<?= $captcha->getNewQuestion() ?><br/>
				<input type="text" name="captcha" />
			</label>

			<input type="submit" name="envoyer" value="Envoyer"/>
		</form>
	</section>
	<script>
		var ok = <?= $ok ?>;
		switch(ok) {
			case 0:
				alert("Mauvaise réponse au captcha.");
			break;
			case 1:
				alert("Votre message a bien été envoyé, nous le traiterons dans les meilleurs délais !");
			break;
		}
	</script>
</body>
</html>