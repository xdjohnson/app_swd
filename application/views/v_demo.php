<?php if ( ! defined('BASEPATH')) exit('?');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Safe Web Design - A Web Application and Design Company</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Semi-Custom websites that are ready to use.  Pick from among thousands of sites for your business.">
	<meta name="keywords" content="Web Design, websites, commerce, shopping cart">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="<?=site_url('application/libraries/assets/mainImage_largeLetters_ico.ico')?>">

	<script type="text/javascript">
		window.onload = function(){
			document.body.style.margin = 0 + 'px'
			document.body.style.padding = 0 + 'px'
			document.body.style.overflow = 'hidden'
			var stub = document.getElementById( 'stub' )
			stub.style.display = 'block'
			var bodyHeight = document.documentElement.clientHeight
			document.getElementById( 'webpage_window' ).style.height = bodyHeight - stub.clientHeight + 'px'
		}
		window.onresize = function(){
			var resizeTimer
			if ( resizeTimer )
				clearTimeout( resizeTimer )

			resizeTimer = setTimeout( function(){
				var bodyHeight = document.documentElement.clientHeight
				document.getElementById( 'webpage_window' ).style.height = bodyHeight - stub.clientHeight + 'px'
			}, 250)
		}
	</script>
	<style type="text/css">
		#stub {
			width:100%; background-color:black; color:white; font-size:15px; padding:5px; display:none; font-family:verdana;
		}
	</style>
</head>
<body>
	<div id="stub">
		Safe Web Design - 1-602-730-5401<br/>
		ID#<?=@$demo_number?> - $<?=@$retail_price?><br/>
		Additional charges may apply.
	</div>
	<iframe id="webpage_window" src="<?=@$iframe_src?>" style="width:100%; border:none;"></iframe>
	<div id="footer">&copy; <?=date('Y')?></div>
</body>
</html>