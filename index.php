<?php define("VAL_YES", 1); ?>
<?php include('_b_conf.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>SA:MP Tools</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link rel="stylesheet" href="/i/css/pagina.css?v=1.2.0">
		<link rel="stylesheet" href="/i/css/style.css?v0.0.1">
		<link rel="stylesheet" href="/i/css/animate.css">
		<link rel="stylesheet" href="/i/css/dropit.css">

  		<script src="/i/js/jquery.js"></script>
  		<script src="/i/js/short.js"></script>

		<script src="/i/js/c.js?v0.1.1.2"></script>	
		<script src="/i/js/dropit.js"></script>
		<script> var siteOriginal = 'http://pawntools.ml'; </script>
		<script>
		var hash = urlParam('hash');
		if(hash != 'undefined' && hash.length > 0)
		{
			jQuery.urlShortener({
				shortUrl: 'http://goo.gl/' + hash,
				success: function (longUrl) 
				{	
					window.location = longUrl;
				}
			});
		}
		</script>
		<script src="/i/js/jscolor.min.js"></script>
		<style>
		.jq-dropdown-menu li{
			display: block;
		}
		</style>
	</head>	
	<body style="background-color: #f6f9fa;">
	  	<div class="nav">
	  		<div class="nav-body">
	  			<ul>
					<li><a href="index.php?lang=<?php echo $_GET['lang'] ?>"><?php echo _langArray("HOME"); ?></a></li>
					<li><a href="?lang=<?php echo $_GET['lang'] ?>&q=dialogs"><?php echo _langArray("Dialog_Creator"); ?></a></li>
					<li><a href="?lang=<?php echo $_GET['lang'] ?>&q=label"><?php echo _langArray("Text_Label_Creator"); ?></a></li>
			  		<li class="right-nav white-button" style="float: right;">
			  			<a href="#" data-jq-dropdown="#jq-dropdown-1">
			  				<img src="/i/img/flags/<?php echo $_GET['lang']; ?>.png" alt="">
			  			</a>
			  			<div id="jq-dropdown-1" class="jq-dropdown jq-dropdown-tip">
						    <ul class="jq-dropdown-menu">
						        <li><a class="lang" value="en"><img src="/i/img/flags/en.png" alt=""> English</a></li>
						        <li><a class="lang" value="ru"><img src="/i/img/flags/ru.png" alt=""> Pусский</a></li>
						        <li><a class="lang" value="es"><img src="/i/img/flags/es.png" alt=""> Español</a></li>
						    </ul>
						</div>
			  		</li>
		  		</ul>
	  		</div>
	  	</div>
		<div class="contenedor">
			<div class="paleton">
				<?php require('_load.php'); ?>
			</div>	
			<div class="footer">
				Page created by <a href="http://forum.sa-mp.com/member.php?u=146395" target="_blank">_Zume</a> & <a href="#">Romzes</a> - Visited <img src="http://simplehitcounter.com/hit.php?uid=2147091&f=16777215&b=0" border="0" height="18" width="83" alt="carpet cleaning in broward"> times
			</div>
		</div>
	</body>
	<script>
	var title_example = <?php echo printInComillas(_langArray('TITLE_EXAMPLE')); ?>;
	var accept_example =  <?php echo printInComillas(_langArray('ACCEPT_EXAMPLE')); ?>;
	var cancel_example = <?php echo printInComillas(_langArray('CANCEL_EXAMPLE')); ?>;
	</script>
	<script src="/i/js/index.js"></script>

</html>