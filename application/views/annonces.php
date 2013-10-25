<? if ($message) : ?>
<h3 class="alert-message" id='alert'>
	<? echo $message; ?>
</h3>
<? endif; ?>
<div id="pagination">
<?php
if ($pages AND $pages > 1)
{
	while($pages >= $iterator)
	{
		if($page == $iterator){ ?><a class="current_page" href="/Annonces/index/<?php echo $iterator; ?>"><?php echo $iterator; ?></a><?php }
		else{ ?><a href="/Annonces/index/<?php echo $iterator; ?>"><?php echo $iterator; ?></a><?php }
		$iterator++;
	}
}
?>
</div>
<div id="annonces">
	<h1>Annonces</h1>

	<div id="recherche">
		<form action="/Annonces/advanced" method="POST">
			<input type="text" name="recherche" placeholder="Votre recherche...">
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
			<input type="submit" name="btn_recherhce" value="rechercher">
		</form>
	</div>
	<div id="list_annonce">
		<?php
		if($annonces)
		{
			foreach ($annonces as $val)
			{
				?>
				<div class="annonce" onclick="show_annonce(<?php echo $val->id;?>)">
					<h2><?php echo $val->title;?></h2>
					<div class="photo_annonce">
						<img src="/upload/<?php echo $val->id_user.'/'.$val->picture;?>" alt="photo annonce">
					</div>

					<div class="annonce_desc">
						<p><span class='attribut'>prix :</span> <?php echo $val->price;?> €</p>
						<p><span class='attribut'>catégorie :</span> <?php echo $val->categorie;?></p>
						<p><span class='attribut'>région :</span> <?php echo $val->location;?></p>
						<br>
						<p><span class="attribut">Description :</span></p>
						<p><?php echo $val->content;?></p>
					</div>
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="annonce">
				<p class="center_text">Aucune annonce n'a été trouvée.</p>
			</div>
			<?php
		}
		?>
		<div class="separation"></div>
	</div>

	<div id="list_categorie">
		<h2>catégorie</h2>
		<?php 
		foreach ($categorie as $val)
		{
			?>
			<a href="/Annonces/category/<?php echo $val->name;?>"><?php echo $val->name;?></a>
			<?php
		}
		?>
	</div>
</div>