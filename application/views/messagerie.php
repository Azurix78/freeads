<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="messagerie">
	<div id="conversation">
		<table>
			<tr><th>objet</th><th>message</th><th>date</th></tr>
			<?php
				if($messages)
				{
					foreach ($messages as $val)
					{
						?>
							<tr><td><?php echo $val->title;?></td><td class="elips"><?php echo $val->content;?></td><td><?php echo $val->date;?></td></tr>
						<?php
					}
				}
				else
				{
					?>
						<tr><td colspan="3">Vous n'avez pas de message.</td></tr>
					<?php
				}
			?>
			
		</table>
	</div>
	<div id="list_categorie">
		<h2>Boîte de réception</h2>

	</div>
</div>