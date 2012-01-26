<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<html>
<head>
	<title>
		<?php echo $TITLE; ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="application-name" content="<?php echo $SITEKEYWORDS;
	 ?>" />
	<meta name="description" content="<?php echo $SITEDESCRIPTION?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/favicon.ico"></link>
	<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/files/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/files/pascal/pascal.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/files/index.css" media="screen"></link>
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/jquery.cycle.lite.js" type="text/javascript"></script>
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/index.js" type="text/javascript"></script>
	<script type="text/javascript">
	<?php echo $STARTSCRIPTS?>
	</script>
</head>
<body>
	<div id="navigation">
		<div id="page-nav">
			<?php echo $ACTIONBARMODULE; ?></span>
			<?php echo $ACTIONBARPAGE; ?></span>
		</div>
	</div>
	
	<div id="cover">
	<div id="header">
	<!-- slider -->
	<div id="NivoSliderWrapper">
	<div class="slider-wrapper theme-pascal">
		<div class="ribbon"></div>
		<div id="slider" class="nivoSlider">
    	<img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/art_events.jpg" alt="" />
    	<a href="http://dev7studios.com"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/culturals.jpg"/></a>
    	<a href="http://dev7studios.com"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/design_events.jpg" alt=""/></a>
    	<a href="http://dev7studios.com"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/english_lits.jpg" alt="" /></a>
    	<a href="http://dev7studios.com"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/hindi_lits.jpg" alt="" /></a>
		</div>
		<div id="htmlcaption" class="nivo-html-caption">
    	<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
		</div>
	</div></div>
	<div id="headerLogo">
		<a href="http://www.nittfest.org/"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/banner.jpg" alt="NITTFEST" /></a>
	</div>
	<div id="headerSponsor">
		<span>Sponsors</span>
		<div id="headerSponsorSlideshow">
		<div class="sponsorSlideshow">
			<a href="http://www.google.com" target="blank"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/culturals.jpg" /></a>
			<a href="http://www.google.com" target="blank"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/files/design_events.jpg" /></a>
		</div></div>
	</div>
	</div>

	<div id="body">
	<div id="cat-nav">
		<?php echo $MENUBAR ?>
	</div>
	
<?php
$fields=array('Error'=>$ERRORSTRING,'Info'=>$INFOSTRING,'Warning'=>$WARNINGSTRING,'Debug'=>$DEBUGINFO);
foreach($fields as $var=>$tag)
	if($tag)
		echo "<div class=\"alert $var\"><img src=\"$TEMPLATEBROWSERPATH/files/$var.png\"/>$tag</div><div class=\"filler\"></div>";
?>
	
	<div id="content">
		<?php echo $CONTENT; ?>
	</div>
	<div id="breadcrumb">
		<div id="breadbox">
		<?php echo $BREADCRUMB?>
	</div></div>
	</div>
	<div id="footer">
	<?php echo $FOOTER; ?>
	</div>
	</div>
</body>
</html>
