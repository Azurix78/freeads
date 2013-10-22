<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="author" content="rubio_n">
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="/media/img/favicon.ico" />
		<link rel="stylesheet" href="/media/css/style.css" />
	</head>
	<body>
		<nav>
			<div id="logo">
				<img src="/media/img/logo.png" alt="logo"><a href="/">freeADS</a>
			</div>
			<? if ($user = Auth::instance()->get_user()) : ?>
			<div id="logout">
				<p>Bienvenue <?php echo $user->username;?> | <a href='/Connect/logout'>logout</a>
			</div>
			<? endif; ?>
		</nav>
		<? if ($user): ?>
		<div id="navigation">
			<ul>
				<li><a href="/Annonces/">annonces</a></li> |
				<li><a href="/Profil/">profil</a></li> |
				<li><a href="/Mesannonces/">mes annonces</a></li> |
				<li><a href="/Messagerie/">messagerie</a></li>
			</ul>
		</div>
		<? endif; ?>
		<div class="container">
			<?php
			if(Session::instance()->get('success'))
			{
				?>
				<h3 class="alert-success" id="alert">
					<?php 
						echo Session::instance()->get('success');
						Session::instance()->delete('success');
					?>
				</h3>
				<?php
			}
				echo $content;
			?>
		</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="/media/js/js.js"></script>
	</body>
</html>