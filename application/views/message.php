<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="messagerie">
	<div id="conversation">
		<h2>Objet : salut </h2>
		<div id="info_msg">
			<li>De author</li>
			<li>Annonce : titre</li>
			<li>le 0000/00/00</li>
		</div>
		<textarea readonly id="message">
Bonjour,
Je suis intéressé par votre cabane et souhaiterais en apprendre d'avantage à son sujet :
Combien de pièce
Taille de la cabane
Hauteur au plafond

Merci
		</textarea>
	</div>
	<div id="list_categorie">
		<h2>Boîte de réception</h2>

	</div>
</div>