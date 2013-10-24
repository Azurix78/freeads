<div id="annonces">
	<h1>Annonces</h1>
	<div id="list_annonce">
		<?php
		if($annonce)
		{
			foreach ($annonce as $val)
			{
				?>
				<div class="annonce">
					<h2><?php echo $val->title;?></h2>
					<div class="photo_annonce_solo">
						<img src="/upload/<?php echo $val->id_user.'/'.$val->picture;?>" alt="photo annonce">
					</div>

					<div class="annonce_desc_solo">
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
				<p class="center_text">Vous n'avez pas encore créé d'annonce.</p>
			</div>
			<?php
		}
		?>
		<div class="separation"></div>
	</div>

	<div id="list_categorie">
		<h2>Annonce de <?php foreach($annonce as $val){ echo $val->username; }?></h2>
		<?php
		foreach ($annonce as $val)
		{
			if($val->id_user != $user->id)
			{
				?>
					<a href="/Messagerie/new/<?php echo $val->id;?>">Envoyer un message</a>
					<a href="/Messagerie/">Envoyer un mail</a>
				<?php
			}
		}
		?>
	</div>


</div>