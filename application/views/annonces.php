<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="annonces">
	<h1>Annonces</h1>

	<div id="recherche">
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
	</div>

	<div id="list_annonce">
		<?php
		if($annonces)
		{
			foreach ($annonces as $val)
			{
				?>
				<div class="annonce">
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
				<p class="center_text">Vous n'avez pas encore créé d'annonce.</p>
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


<!-- 
<select>
			<option value="0">«Choisissez la catégorie»</option>
			<option value="1" style="background-color:#dcdcc3" disabled="" id="cat1"> VEHICULES </option>
			<option value="2" id="cat2">Voitures</option>
			<option value="3" id="cat3">Motos</option>
			<option value="4" id="cat4">Caravaning</option>
			<option value="5" id="cat5">Utilitaires</option>
			<option value="6" id="cat6">Equipement Auto</option>
			<option value="44" id="cat44">Equipement Moto</option>
			<option value="50" id="cat50">Equipement Caravaning</option>
			<option value="7" id="cat7">Nautisme</option>
			<option value="51" id="cat51">Equipement Nautisme</option>
			<option value="8" style="background-color:#dcdcc3" disabled="" id="cat8"> IMMOBILIER </option>
			<option value="9" id="cat9">Ventes immobilières</option>
			<option value="10" id="cat10">Locations</option>
			<option value="11" id="cat11">Colocations</option>
			<option value="12" id="cat12">Locations de vacances</option>
			<option value="13" id="cat13">Bureaux &amp; Commerces</option>
			<option value="14" style="background-color:#dcdcc3" disabled="" id="cat14"> MULTIMEDIA </option>
			<option value="15" id="cat15">Informatique</option>
			<option value="43" id="cat43">Consoles &amp; Jeux vidéo</option>
			<option value="16" id="cat16">Image &amp; Son</option>
			<option value="17" id="cat17">Téléphonie</option>
			<option value="18" style="background-color:#dcdcc3" disabled="" id="cat18"> MAISON </option>
			<option value="19" id="cat19">Ameublement</option>
			<option value="20" id="cat20">Electroménager</option>
			<option value="45" id="cat45">Arts de la table</option>
			<option value="39" id="cat39">Décoration</option>
			<option value="46" id="cat46">Linge de maison</option>
			<option value="21" id="cat21">Bricolage</option>
			<option value="52" id="cat52">Jardinage</option>
			<option value="22" id="cat22">Vêtements</option>
			<option value="53" id="cat53">Chaussures</option>
			<option value="47" id="cat47">Accessoires &amp; Bagagerie</option>
			<option value="42" id="cat42">Montres &amp; Bijoux</option>
			<option value="23" id="cat23">Equipement bébé</option>
			<option value="54" id="cat54">Vêtements bébé</option>
			<option value="24" style="background-color:#dcdcc3" disabled="" id="cat24"> LOISIRS </option>
			<option value="25" id="cat25">DVD / Films</option>
			<option value="26" id="cat26">CD / Musique</option>
			<option value="27" id="cat27">Livres</option>
			<option value="28" id="cat28">Animaux</option>
			<option value="55" id="cat55">Vélos</option>
			<option value="29" id="cat29">Sports &amp; Hobbies</option>
			<option value="30" id="cat30">Instruments de musique</option>
			<option value="40" id="cat40">Collection</option>
			<option value="41" id="cat41">Jeux &amp; Jouets</option>
			<option value="48" id="cat48">Vins &amp; Gastronomie</option>
			<option value="56" style="background-color:#dcdcc3" disabled="" id="cat56"> MATERIEL PROFESSIONNEL </option>
			<option value="57" id="cat57">Matériel Agricole</option>
			<option value="58" id="cat58">Transport - Manutention</option>
			<option value="59" id="cat59">BTP - Chantier Gros-oeuvre</option>
			<option value="60" id="cat60">Outillage - Matériaux 2nd-oeuvre</option>
			<option value="32" id="cat32">Équipements Industriels</option>
			<option value="61" id="cat61">Restauration - Hôtellerie</option>
			<option value="62" id="cat62">Fournitures de Bureau</option>
			<option value="63" id="cat63">Commerces &amp; Marchés</option>
			<option value="64" id="cat64">Matériel Médical</option>
			<option value="31" style="background-color:#dcdcc3" disabled="" id="cat31"> EMPLOI &amp; SERVICES </option>
			<option value="33" id="cat33">Emploi</option>
			<option value="34" id="cat34">Services</option>
			<option value="35" id="cat35">Billetterie</option>
			<option value="49" id="cat49">Evénements</option>
			<option value="36" id="cat36">Cours particuliers</option>
			<option value="37" style="background-color:#dcdcc3" disabled="" id="cat37">  </option>
			<option value="38" id="cat38">Autres</option>
		</select> -->