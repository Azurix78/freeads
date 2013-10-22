<? if ($message) : ?>
	<h3 class="alert-message" id='alert'>
		<? echo $message; ?>
	</h3>
<? endif; ?>
<div id="gestion">
	<div class="article_full">
		<div class="bar_titre">
			<h1>Gestion de votre profil</h1>
		</div>

		<?php echo Form::open('/Profil/edit'); ?>
		<fieldset>
		<div class="block">
			<?php echo Form::label('username', 'Username'); ?>
			<?php echo Form::input('username', $user->username); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'username')); ?>
			</div>
		</div>
		<div class="block">
			<?php echo Form::label('email', 'Email Address'); ?>
			<?php echo Form::input('email', $user->email ,array('pattern' => "[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$")); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'email')); ?>
			</div>
		</div>
		<div class="submit_box">
			<?php echo Form::submit('edit', 'Modifier',array('class' => 'in_sub')); ?>
			<?php echo Form::close(); ?>
		</div>
		</fieldset>

		<?php echo Form::open('/Profil/password'); ?>
		<fieldset>
		<div class="block">
			<?php echo Form::label('password', 'Nouveau Password'); ?>
			<?php echo Form::password('password'); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'password')) ?>
			</div>
		</div>
		<div class="block">
			<?php echo Form::label('old', 'Ancien Password'); ?>
			<?php echo Form::password('old'); ?>
			<div class="error">
				<?php echo __(Arr::get($errors, 'old')) ?>
			</div>
		</div>
		<div class="submit_box">
			<?php echo Form::submit('edit', 'Modifier',array('class' => 'in_sub')); ?>
			<?php echo Form::close(); ?>
		</div>
		</fieldset>


	</div>
</div>