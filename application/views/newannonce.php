<? if ($message) : ?>
<h3 class="alert-message" id='alert'>
	<? echo $message; ?>
</h3>
<? endif; ?>
<div id="new_annonces">
	<form method="POST" action="/Mesannonces/post" enctype='multipart/form-data'>
		<input name="title" type="text" placeholder="Titre" required>
		<div class="error">
			<?php echo __(Arr::get($errors, 'title')); ?>
		</div>
		<div class="select_new">
			<input name="prix" type="number" min="1" placeholder="prix" pattern="[0-9]+">
			<div class="error">
				<?php echo __(Arr::get($errors, 'prix')); ?>
			</div>
			<select name="categorie">
				<option value="">«Choisissez la catégorie»</option>
				<?php
				foreach ($categorie as $val)
				{
					?>
					<option value"<?php echo $val->id;?>"><?php echo $val->name;?></option>
					<?
				}
				?>
			</select>
			<div class="error">
				<?php echo __(Arr::get($errors, 'categorie')); ?>
			</div>
			<select name="location">
				<option value="">«Choisissez un département»</option>
				<?php
				foreach ($dept as $val)
				{
					?>
					<option value"<?php echo $val->id;?>"><?php echo $val->name;?></option>
					<?
				}
				?>
			</select>
			<div class="error">
				<?php echo __(Arr::get($errors, 'location')); ?>
			</div>
		</div>
		<textarea name="content" placeholder="Votre annonce..." required></textarea>
		<div class="error">
			<?php echo __(Arr::get($errors, 'content')); ?>
		</div>
		<div class="upload">
			<input type="file" name="photo">
		</div>
		<div class="error">
			<?php echo __(Arr::get($errors, 'photo')); ?>
		</div>
		<div class="submit_box">
			<input type="submit" name="btn" value="Publier">
		</div>
	</form>
</div>