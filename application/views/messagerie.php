<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="messagerie">
	<div id="conversation">
		<table>
			<tr><th>objet</th><th>message</th><th>date</th><th>action</th></tr>
			<?php
				if($messages)
				{
					foreach ($messages as $val)
					{
						?>
							<tr class="<?php if($val->etat_rec == 1 OR $val->etat_rec == 9 OR $val->etat_rec == 2){echo 'lu';}?>" onclick="show_message(<?php echo $val->id; ?>)">
								<td class="elips_obj"><?php echo $val->title;?></td>
								<td class="elips"><?php echo $val->message;?></td>
								<td class="center_text"><?php echo $val->date;?></td>
								<td class="center_text"><a href="/Messagerie/<?php if($val->id_sender == $user->id){ echo 'delsended'; }else{ echo "del";}?>/<?php echo $val->id;?>">✖</a>
								<?php if($val->etat_rec == 2){ ?> <a href="/Messagerie/restore/<?php echo $val->id;?>">↩</a> <?php } ?></td>
							</tr>
						<?php
					}
				}
				if($send_messages)
				{
					foreach ($send_messages as $val)
					{
						?>
							<tr class="<?php if($val->etat_rec == 1 OR $val->etat_rec == 9 OR $val->etat_rec == 2){echo 'lu';}?>" onclick="show_message(<?php echo $val->id; ?>)">
								<td class="elips_obj"><?php echo $val->title;?></td>
								<td class="elips"><?php echo $val->message;?></td>
								<td class="center_text"><?php echo $val->date;?></td>
								<td class="center_text"><a href="/Messagerie/<?php if($val->id_sender == $user->id){ echo 'delsended'; }else{ echo "del";}?>/<?php echo $val->id;?>">✖</a></td>
							</tr>
						<?php
					}
				}
				if ( ! $messages AND ! $send_messages)
				{
					?>
						<tr><td class="center_text" colspan="4"><?php echo $errors; ?></td></tr>
					<?php
				}
			?>
			
		</table>
	</div>
	<div id="list_categorie">
		<a href="/Messagerie">Boîte de reception</a>
		<a href="/Messagerie/sended">envoyés</a>
		<a href="/Messagerie/deleted">Corbeille</a>
	</div>
</div>