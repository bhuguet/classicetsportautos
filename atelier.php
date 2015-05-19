<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include 'includes/metas.inc.php'; ?>

<meta name="description" content="<?php echo $atelier_description; ?>">
<meta name="keywords" content="<?php echo $atelier_keywords; ?>">

<title><?php echo $atelier_title; ?></title>
<link rel="shortcut icon" href="images/csa.ico">
<link rel="stylesheet" type="text/css" media="screen" href="../css/init.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/csa.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/ju2com.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/csa.css">

<script type="text/javascript" src="../jquery/jquery.EmbedPicasaGallery_0/jquery-1.3.2.js"></script>
<link rel="stylesheet" href="../jquery/jquery.EmbedPicasaGallery_0/css/slimbox2.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery/jquery.EmbedPicasaGallery_0/slimbox2.js"></script>
<script type="text/javascript" src="../jquery/jquery.EmbedPicasaGallery_0/jquery.EmbedPicasaGallery.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery("#mygallery").EmbedPicasaGallery('101448589802546946811',{
        loading_animation: '../jquery/jquery.EmbedPicasaGallery_0/css/loading.gif',
        matcher: /./,
        size:               '72',        // thumbnail size (32, 48, 64, 72, 144, 160)
        msg_back :          'Retour aux albums',
        msg_loading_list :  'Chargement des albums...',
        album_title_tag:    '<h1/>',
        thumb_id_prefix:    ''
        });

})
</script>

<?php include 'includes/googleAnalytics.inc.php'; ?>

</head>

<body>
	<div class="background">
	<div class="container">
		<div class="wrapper">
			<div class="head">
                                <?php $highlight = 'atelier'; ?>
                                <?php include 'includes/top.inc.php'; ?>
				<div class="espacepromo2"></div>
			</div>
			<h1><?php echo $csa_title; ?></h1>
			<div class="col560">
				<div class="espacepromo3">
					<img src="../img/bandeauGarage.jpg" width="558" height="100" alt="<?php echo $csa_bandeau_alt; ?>"/>
				</div>
			</div>

			<div class="col260_3">
				<p>
				<?php echo $csa_description; ?>
				</p>
			</div>
			<div class="clearit"></div>
			<br/>

			<div id="mygallery"></div>
			<div class="clearit"></div>

		</div>
                <?php include 'includes/bottom.inc.php'; ?>
	</div><!--fin container-->
	</div><!--fin background-->
</body>
</html>