<? if ($message) : ?>
	<h3 class="alert-message" id='alert' onclick='closealert()'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div class="article_full">
	<div class="bar_titre">
		<h1>Gerez vos fichiers</h1>
	</div>
	<div id="share">
		<?php echo Form::open('/File/addfile/'.$dir,array('enctype' => 'multipart/form-data')); ?>
		<fieldset>
		<legend>Ajouter un fichier</legend>
		<div class='block'>
			<div class="right">
				<?php echo Form::submit('addfolder', 'Ajouter',array('class' => 'in_sub')); ?>
			</div>
			<?php echo Form::input('name', '', array('placeholder' => 'Nom du fichier...','pattern' => "[A-Za-z0-9\-\_]+")); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'name')); ?>
			</div>
			<div class="upload">
				<?php echo Form::input('file', '', array('type' => 'file')); ?>
				<div class="error">
					<?php echo __(Arr::get($errors, 'file')); ?>
				</div>
			</div>
		</div>
		</fieldset>
		<?php echo Form::close(); ?>


		<?php echo Form::open('/File/addfolder/'.$dir); ?>
		<fieldset>
		<legend>Ajouter un dossier</legend>
		<div class='block'>
			<div class="right">
				<?php echo Form::submit('addfolder', 'Ajouter',array('class' => 'in_sub')); ?>
			</div>
			<?php echo Form::input('folder', '', array('pattern' => "[A-Za-z0-9\-\_]+",'placeholder' => 'Nom du dossier...')); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'folder')); ?>
			</div>
		</div>
		</fieldset>
		<?php echo Form::close(); ?>
		<div class="file_center"><?php echo $size; ?> / 30 Mo</div>
		<?php if($dir != 0){?><a class="file_center" href='/File/index/<?php echo $current->id_parent; ?>'>Revenir <?php echo $parent->name; ?>&#8617;</a><?php } ?>
		<table>
			<tr>
				<th class="bor_d">Type</th>
				<th class="bor_d">Nom du fichier</th>
				<th class="bor_d">Date de création</th>
				<th class="bor_d">Size</th>
				<th>Action</th>
			</tr>
			<?php
			if($folder)
			{
				foreach ($folder as $value)
				{
					?>
					<tr>
						<td><img src="/media/img/folder.png" alt="dossier"></td>
						<td><?php echo $value->name; ?></td>
						<td><?php echo $value->date; ?></td>
						<td> - </td>
						<td>
							<a href='/File/index/<?php echo $value->id; ?>'>➽</a>
						</td>
					</tr>
					<?php
				}
			}
			if ($file)
			{
				foreach ($file as $value)
				{
					?>
					<tr>
						<td>
							<?php
							switch ($value->type)
							{
								case 'text':
									echo '✐';
									break;
								
								case 'video':
									echo '►';
									break;
								
								case 'audio':
									echo '♫';
									break;
								
								case 'application':
									echo '☸';
									break;
								
								default:
									echo '▨';
									break;
							}
							?>
						</td>
						<td><?php echo $value->name; ?></td>
						<td><?php echo $value->date; ?></td>
						<td><?php echo $value->size; ?></td>
						<td><a href='/File/delfile/<?php echo $value->id; ?>'>&#10006;</a>
							<a href='/File/dwl/<?php echo $value->id; ?>'>▼</a>
							<?php if ($value->ext == '.wav' OR $value->ext == '.mp3') { ?>
							<a href='/File/stream/<?php echo $value->id; ?>'>♪</a>
							<?php } ?>
						</td>
					</tr>
					<?php
				}
			}
			else
			{
				?>
					<tr><td colspan="5" style="text-align:center;">Vous n'avez pas encore de fichier uploadé.</td></tr>
				<?php
			}
			
			?>
		</table>
		<?php echo Form::open('/File/movefile'); ?>
		<fieldset>
		<legend>Deplacer un fichier</legend>
		<div class='block'>
			<?php
			if($all_file)
        	{
        	?>
			<div class="right">
				<?php echo Form::submit('movefile', 'Déplacer',array('class' => 'in_sub')); ?>
			</div>
        	<div class="block">
        		<select name="file_to_move" id="file">
        			<?php
        			foreach ($all_file as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Fichier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		<div class="error">
					<?php echo __(Arr::get($errors, 'file_to_move')); ?>
				</div>
        		<p>▲ déplacer vers ▼</p>
        		<select name="folder_direction" id="file">
        			<option value="0">Dossier : ✰ Racine </option>
        			<?php
        			foreach ($all_folder as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Dossier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		<div class="error">
					<?php echo __(Arr::get($errors, 'folder_direction')); ?>
				</div>
        	</div>
        	<?php
        	}
        	else
        	{
        		?>
        		<p>Vous n'avez pas de Dossier de destination.</p>
        		<?php
        	}
        			
        	?>
      		
		</div>
		</fieldset>
		<?php echo Form::close(); ?>
		<?php echo Form::open('/File/movefolder'); ?>
		<fieldset>
		<legend>Deplacer un Dossier</legend>
		<div class='block'>
			<?php
			if($all_folder)
        	{
        	?>
			<div class="right">
				<?php echo Form::submit('movefile', 'Déplacer',array('class' => 'in_sub')); ?>
			</div>
        	<div class="block">
        		<select name="folder_to_move" id="file">
        			<?php
        			foreach ($all_folder as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Dossier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		<div class="error">
					<?php echo __(Arr::get($errors, 'folder_to_move')); ?>
				</div>
        		<p>▲ déplacer vers ▼</p>
        		<select name="folder_folder_direction" id="file">
        			<option value="0">Dossier : ✰ Racine </option>
        			<?php
        			foreach ($all_folder as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Dossier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		<div class="error">
					<?php echo __(Arr::get($errors, 'folder_folder_direction')); ?>
				</div>
        	</div>
        	<?php
        	}
        	else
        	{
        		?>
        		<p>Vous n'avez pas de Dossier de destination.</p>
        		<?php
        	}
        			
        	?>
      		
		</div>
		</fieldset>
		<?php echo Form::close(); ?>
		<?php echo Form::open('/File/renamefolder'); ?>
		<fieldset>
		<legend>Renomer un Dossier</legend>
		<div class='block'>
			<?php
			if($all_folder)
        	{
        	?>
			<div class="right">
				<?php echo Form::submit('movefile', 'Déplacer',array('class' => 'in_sub')); ?>
			</div>
        	<div class="block">
        		<select name="rename_folder" id="file">
        			<?php
        			foreach ($all_folder as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Dossier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		
        		<input type="text" placeholder="Nouveau nom..." name="new_name_folder">
        		
        	</div>
        	<?php
        	}
        	else
        	{
        		?>
        		<p>Vous n'avez pas de Dossier.</p>
        		<?php
        	}
        			
        	?>
      		
		</div>
		</fieldset>
		<?php echo Form::close(); ?>
		<?php echo Form::open('/File/renamefile'); ?>
		<fieldset>
		<legend>Renomer un Fichier</legend>
		<div class='block'>
			<?php
			if($all_file)
        	{
        	?>
			<div class="right">
				<?php echo Form::submit('movefile', 'Déplacer',array('class' => 'in_sub')); ?>
			</div>
        	<div class="block">
        		<select name="rename_file" id="file">
        			<?php
        			foreach ($all_file as $value)
        			{
        				?>
        				<option value="<?php echo $value->id; ?>">Fichier : <?php echo $value->name; ?></option>
        				<?php
        			}
        			?>
        		</select>
        		
        		<input type="text" placeholder="Nouveau nom..." name="new_name_file">
        		
        	</div>
        	<?php
        	}
        	else
        	{
        		?>
        		<p>Vous n'avez pas de fichier Fichier.</p>
        		<?php
        	}
        			
        	?>
      		
		</div>
		</fieldset>
		<?php echo Form::close(); ?>
	</div>
</div>