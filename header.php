<header>
	<script src="jquery.min.js"></script>
	<div>
		<img src="logo.png"/>
		<div><h1>Observatoire de l'intégrisme</h1></div>
	</div>
	<nav>
		<a href="index.php"><div>Carte</div></a>
		<a href="liste.php"><div>Liste des sources</div></a>
		<a href="rapporter.php"><div>Rapporter un fait</div></a>
		<a href="qui-sommes-nous.php"><div>Qui sommes-nous ?</div></a>
	</nav>
	<script>
		$(function(){
		    var urlRegExp = new RegExp(window.location.pathname.replace(/\/$/,'') + "$");
		        $('nav a').each(function(){
		            if(urlRegExp.test(this.href.replace(/\/$/,''))){
		                $(this).addClass('current');
		            }
		        });
		});
	</script>
</header>