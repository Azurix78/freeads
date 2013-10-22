<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="inscription">
	<h1>Inscription</h1>

	<p>Bienvenu sur <span class="freeADS">freeADS</span></p>
	<p>L'inscription est gratuite et vous offre la possibilité de passer vos petites annonces gratuitement ainsi que de consulter les milliers d'annonces déjà présente sur notre site.</p>

		<?php echo Form::open('Connect/create'); ?>

		<div class='block'>
			<?php echo Form::label('username', 'Username'); ?>
			<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'username')); ?>
			</div>
		</div>
		<div class='block'>
			<?php echo Form::label('email', 'Email Address'); ?>
			<?php echo Form::input('email', HTML::chars(Arr::get($_POST, 'email')),array('pattern' => "[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$")); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'email')); ?>
			</div>
		</div>
		<div class='block'>
			<?php echo Form::label('password', 'Password'); ?>
			<?php echo Form::password('password'); ?>
			<div class="error">
				<?php echo __(Arr::path($errors, '_external.password')); ?>
			</div>
		</div>
		<div class='block'>
			<?php echo Form::label('password_confirm', 'Confirm Password'); ?>
			<?php echo Form::password('password_confirm'); ?>
			<div class="error">
				<?php echo __(Arr::path($errors, '_external.password_confirm')); ?>
			</div>
		</div>
		<div class="submit_box">
			<?php echo Form::submit('create', 'SIGN IN',array('class' => "in_sub")); ?>
			<?php echo Form::close(); ?>
		</div>
		<p class="center_text"><?= HTML::anchor('/Connect/login', 'Cliquez ici si vous êtes déjà inscrit.'); ?></p>
</div>