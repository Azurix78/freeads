<? if ($message) : ?>
<h3 class="alert-message" id='alert'>
	<? echo $message; ?>
</h3>
<? endif; ?>
<div id="new_annonces">
	<?php foreach ($annonce as $k => $val)
	{
		?>
		<form method="POST" action="/Mesannonces/change/<?php echo $val->id; ?>" enctype='multipart/form-data'>
			<input name="title" type="text" placeholder="Titre" required value="<?php echo $val->title;?>">
			<div class="error">
				<?php echo __(Arr::get($errors, 'title')); ?>
			</div>
			<div class="photo_annonce_edit">
				<img src="/upload/<?php echo $val->id_user.'/'.$val->picture;?>" alt="photo annonce">
			</div>
			<div class="upload">
				<input type="file" name="photo">
			</div>
			<div class="error">
				<?php echo __(Arr::get($errors, 'photo')); ?>
			</div>
			<div class="select_new">
				<input name="prix" type="number" min="1" placeholder="prix" pattern="[0-9]+" value="<?php echo $val->price;?>">
				<div class="error">
					<?php echo __(Arr::get($errors, 'prix')); ?>
				</div>
				<select name="categorie">
					<option value="">«Choisissez la catégorie»</option>
					<?php
					foreach ($categorie as $cat)
					{
						?>
						<option <?php if($val->categorie == $cat->name){echo "selected";}?>><?php echo $cat->name;?></option>
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
					foreach ($dept as $dpt)
					{
						?>
						<option <?php if($val->location == $dpt->name){echo "selected";}?>><?php echo $dpt->name;?></option>
						<?
					}
					?>
				</select>
				<div class="error">
					<?php echo __(Arr::get($errors, 'location')); ?>
				</div>
			</div>
			<textarea name="content" placeholder="Votre annonce..." required><?php echo $val->content;?></textarea>
			<div class="error">
				<?php echo __(Arr::get($errors, 'content')); ?>
			</div>
			<div class="submit_box">
				<input type="submit" name="btn" value="Publier">
			</div>
		</form>
		<?php
	}
	?>
</div>