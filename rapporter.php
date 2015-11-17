<!DOCTYPE html>
<html>
<?php include("head.html"); ?>
<body>
	<?php include("header.php"); ?>
	<section>
		<form>
			<h2>Rapporter un fait</h2>

			<label>Nom ou pseudo<br/><input type="text" name="nom" /></label><br/>

			<label>Adresse email<br/>(Non obligatoire)<br/><input type="text" name="mail" /></label><br/>

			<label>Type de message<br/>
			<select>
				<option value="fait">Nouveau fait ou nouvelle source</option>
				<option value="erreur">Correction d'une erreur</option>
				<option value="message">Message autre</option>
			</select></label><br/>

			<label>Message<br/><textarea></textarea></label>
			<p>Merci de sourcer au maximum toute information. Notre équipe effectuera les recoupements nécessaires.</p>

			{CAPTCHA}<br/>

			<input type="submit" name="envoyer" value="Envoyer"/>
		</form>
	</section>
</body>
</html>