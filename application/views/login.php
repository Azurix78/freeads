<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="inscription">
	<h1>Login - freeADS</h1>
		<?php echo Form::open('Connect/login'); ?>
		<div class='block'>
			<?php echo Form::label('username', 'Username'); ?>
			<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
		</div>
		<div class='block'>
			<?php echo Form::label('password', 'Password'); ?>
			<?php echo Form::password('password'); ?>
		</div>
		<div class='submit_box'>
			<?php echo Form::submit('login', 'Login',array('class' => 'in_sub')); ?>
		</div>
		<?php echo Form::close(); ?>
	<p class="center_text"><?= HTML::anchor('/Connect/create', 'Revenir à l\'inscription'); ?></p>
</div>