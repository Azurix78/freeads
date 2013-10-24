<? if ($message) : ?>
<h3 class="alert-message" id='alert'>
	<? echo $message; ?>
</h3>
<? endif; ?>
<div id="messagerie">
	<div id="conversation">
		<h2>Objet : <?php echo $messages->title;?></h2>
		<div id="info_msg">
			<li>De <?php echo $users->username;?></li>
			<li>Annonce : <a target="_blank" href="/Annonces/lire/<?php echo $annonce->id; ?>"><?php echo $annonce->title;?></a></li>
			<li>le <?php echo $messages->date;?></li>
		</div>
		<textarea readonly id="message">
<?php echo $messages->message; ?>
		</textarea>
	</div>
	<div id="list_categorie">
		<a href="/Messagerie">&#8617; Revenir </a>
	</div>
	<?php
	if($messages->id_sender != $user->id)
	{
		?>
		<div id="rep_msg">
			<h2>Répondre : </h2>
			<form action="/Messagerie/reply/<?php echo $messages->id;?>" method="POST">
				<textarea name="reply" id="rep_txt"></textarea>
				<div class="error">
					<?php echo __(Arr::get($errors, 'reply')); ?>
				</div>
				<div class="submit_box">
					<input type="submit" value="Répondre">
				</div>
			</form>
		</div>
		<?php
	}
	?>
</div>