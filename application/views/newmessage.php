<? if ($message) : ?>
<h3 class="alert-message" id='alert'>
	<? echo $message; ?>
</h3>
<? endif; ?>
<div id="new_annonces">
	<form method="POST" action="/Messagerie/send/<?php echo $annonce->id;?>" enctype='multipart/form-data'>
		<input name="title" type="text" placeholder="Titre" required>
		<div class="error">
			<?php echo __(Arr::get($errors, 'title')); ?>
		</div>
		<textarea name="content" placeholder="Votre annonce..." required></textarea>
		<div class="error">
			<?php echo __(Arr::get($errors, 'content')); ?>
		</div>
		<div class="submit_box">
			<input type="submit" name="btn" value="Publier">
		</div>
	</form>
</div>