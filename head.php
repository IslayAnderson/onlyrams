<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="<?php echo $host ?>/css/style.css" rel="stylesheet"> <!-- Custom Styles -->
<link href="<?php echo $host ?>/css/bulma.min.css" rel="stylesheet"> <!-- Bulma Styles -->
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<script href="<?php echo $host ?>/scripts/jquery.min.js"></script>
<script>
	/* $(document).ready(function($) {
		var Body = $('body');
		Body.addClass('preloader-site');
	}); dont copy paste code from old projects */
	$(window).on('load', function() {
		$('#preloader').fadeOut();
		$('body').removeClass('preloader-site');
	});
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-');</script>
<!-- End Google Tag Manager -->	
</head>
<body>
<div class="loader-back" id="preloader">
	<img src="<?php echo $host; ?>/images/logo-tb.png" alt="">
</div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<nav class="level">
  <p class="level-item has-text-centered">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Menu</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="<?php echo $host; ?>/images/logo-tb-X-90.png" alt="" style="height: 30px;">
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Reservations</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Contact</a>
  </p>
</nav>