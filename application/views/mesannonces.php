<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="mesannonces">
	<h1>Mes Annonces</h1>
	<div id="list_annonce">
		<?php
		if($mesannonces)
		{
			foreach ($mesannonces as $val)
			{
				?>
				<div class="annonce">
					<h2><?php echo $val->title;?></h2>
					<div class="photo_annonce">
						<img src="/upload/<?php echo $user->id.'/'.$val->picture;?>" alt="photo annonce">
					</div>

					<div class="annonce_desc">
						<p><span class='attribut'>prix :</span> <?php echo $val->price;?> €</p>
						<p><span class='attribut'>catégorie :</span> <?php echo $val->categorie;?></p>
						<p><span class='attribut'>région :</span> <?php echo $val->location;?></p>
						<br>
						<p><span class="attribut">Description :</span></p>
						<p><?php echo $val->content;?></p>
					</div>
					<div class="menu_mesannonces">
						<a href="/Mesannonces/edit/<?php echo $val->id;?>">✐ Modifier</a> | <a href="/Mesannonces/del/<?php echo $val->id;?>">✖ Supprimer</a>
					</div>
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="annonce">
				<p class="center_text">Vous n'avez pas encore créé d'annonce.</p>
			</div>
			<?php
		}
		?>
		<div class="separation"></div>
	</div>

	<div id="list_categorie">
		<a href="/Mesannonces/new/">Ajouter une annonce</a>
	</div>
</div>