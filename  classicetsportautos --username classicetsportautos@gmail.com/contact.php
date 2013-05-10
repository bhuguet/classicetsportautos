<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include 'includes/metas.inc.php'; ?>

<meta name="description" content="<?php echo $contact_description; ?>">
<meta name="keywords" content="<?php echo $contact_keywords; ?>">

<title><?php echo $contact_title; ?></title>
<link rel="shortcut icon" href="images/csa.ico">
<link rel="stylesheet" type="text/css" media="screen" href="../css/init.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/csa.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/ju2com.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/csa.css">

<?php include 'includes/googleAnalytics.inc.php'; ?>

</head>

<body>
	<div class="background">
	<div class="container">
		<div class="wrapper">
			<div class="head">
                                <?php $highlight = 'contact'; ?>
                                <?php include 'includes/top.inc.php'; ?>                            
				<div class="espacepromo2"></div>
			</div>

			<div class="col560">
				<h1><?php echo $plan_title; ?></h1>
                                <iframe width="558" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?hl=fr&amp;q=10+rue+du+Pr%C3%A9+Blanchet,+saint+martin+d'h%C3%A8res&amp;ie=UTF8&amp;hq=&amp;hnear=10+Rue+du+Pr%C3%A9+Blanchet,+38400+Saint-Martin-d'H%C3%A8res,+Is%C3%A8re,+Rh%C3%B4ne-Alpes&amp;gl=fr&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=45.163182,5.758303&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?hl=fr&amp;q=10+rue+du+Pr%C3%A9+Blanchet,+saint+martin+d'h%C3%A8res&amp;ie=UTF8&amp;hq=&amp;hnear=10+Rue+du+Pr%C3%A9+Blanchet,+38400+Saint-Martin-d'H%C3%A8res,+Is%C3%A8re,+Rh%C3%B4ne-Alpes&amp;gl=fr&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=45.163182,5.758303&amp;source=embed" style="color:#0000FF;text-align:left"><?php echo $agrandir_le_plan; ?></a></small>
			</div>
			<div class="col260_3">
				<h1><?php echo $contact_title; ?></h1>
				<ul>
					<li><?php echo $contact_email; ?></li>
					<li><?php echo $contact_phone; ?></li>
				</ul>
				<br/>
				<h1><?php echo $horaires_ouverture_title; ?></h1>
				<ul>
					<li><?php echo $horaires_ouverture_jours; ?></li>
					<li><?php echo $horaires_ouverture_matin; ?></li>
					<li><?php echo $horaires_ouverture_apreme; ?></li>
				</ul>
				<br/>
				<h1><?php echo $adresse_title; ?></h1>
				<ul>
					<li><?php echo $adresse_nom; ?></li>
					<li><?php echo $adresse_rue; ?></li>
					<li><?php echo $adresse_ville; ?></li>
                                        <li><?php echo $adresse_pays; ?></li>
				</ul>
			</div>
			<div class="clearit"></div>
			<br/><br/>
<a href="http://www.auto-pedia.fr/"><img src="http://img.auto-pedia.fr/uploads/autopedia.jpg" width="284" height="31" border="0"></img></a>      
<div style="text-align: left"><a href="http://www.auto-collection.org" target="_blank"><img src="http://www.auto-collection.org/images_fx/logoACnw.gif" border="0" width="120" height="40" alt="L'annuaire auto-collection.org"></a></div>
<SCRIPT LANGUAGE="JavaScript" SRC="http://www.anciennesdefrance.com/pub/ban88x31_1.htm"></SCRIPT>
<br/><a href="http://www.gtliens.com/" target="_blank"><img src="http://www.gtliens.com/images/gtliens_annuaire-auto.gif" alt="Annuaire et moteur de recherche automobile" width="88" height="31" border="0"></a>
<br/><a href="http://gazoline.net"><img src="http://gazoline.net/annuaire/images/gazolineref.gif" width="88" height="31" border="0"></a>
<br/><a href="http://www.automobile-sportive.com"><img src="http://www.automobile-sportive.com/images/logo240.png" width="88" height="31" border="0"></img></a>

                </div>
                <?php include 'includes/bottom.inc.php'; ?>
	</div><!--fin container-->
	</div><!--fin background-->
</body>
</html>