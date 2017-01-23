<!DOCTYPE html>
<html>
<head>
	<title>Daftar Curhat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/materialize/css/materialize.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/materialize/js/materialize.js"); ?>"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	
</head>
<body>
	<nav>
		<div class="nav-wrapper deep-purple lighten-1">
			<a href="<?php echo base_url(); ?>" id="brand-logo" class="brand-logo white-text">Konselingsebaya</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<!-- <li>
					<a href="<?php echo base_url('sejarah'); ?>">Sejarah</a>
				</li> -->
				<li>
					<a href="<?php echo base_url('siapa'); ?>">Siapa Kami</a>
				</li>
				<li>
					<a href="<?php echo base_url('artikel'); ?>">Artikel</a>
				</li>
				<li>
					<a href="<?php echo base_url('tanya'); ?>">Tanya Profesional</a>
				</li>
				<li>
					<a href="<?php echo base_url('faq'); ?>">FAQ</a>
				</li>
				<li>
					<?php if ($username === NULL || $username === '' ){ ?>
                            <a href="<?php echo base_url('login'); ?>">Login</a></li>
                          <?php }else{ ?>
                            <a href="<?php echo base_url('dashboard'); ?>">Panel</a>
                          <?php } ?>
				</li>
			</ul>
		</div>
	</nav>