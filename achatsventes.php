<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include 'includes/metas.inc.php'; ?>

<meta name="description" content="<?php echo $achats_ventes_description; ?>">
<meta name="keywords" content="<?php echo $achats_ventes_keywords; ?>">

<title><?php echo $achats_ventes_title; ?></title>
<link rel="shortcut icon" href="images/csa.ico">
<link rel="stylesheet" type="text/css" media="screen" href="../css/init.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/csa.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/ju2com.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/csa.css">

<SCRIPT language=javascript>
	function OuvrirPopup(page,nom,option) {
	   window.open(page,nom,option);
	}
</SCRIPT>

<script type="text/javascript" src="../jquery/js/jquery-1.3.1.min.js"></script>

<?php include 'includes/carsToSell.inc.php'; ?>
<?php include 'includes/googleAnalytics.inc.php'; ?>

</head>

<body>
	<div class="background">
	<div class="container">
		<div class="wrapper">
			<div class="head">
                                <?php $highlight = 'achatsventes'; ?>
                                <?php include 'includes/top.inc.php'; ?>                            
				<div class="espacepromo2"></div>
			</div>
			<div class="vente">
			</div>
			<div class="achats">
				<!--div class="col260_3">
					<h1><?php //echo $achat_title; ?></h1>
					<hr/>
						<img class="pict" src="../img/ventes/tr3Epave.jpg" alt="" />
						<h2>Triumph TR3</h2>
						<p>
                                                    <?php //echo $cherche_tr3; ?>
						</p>
						<div class="clearit"></div>
					<!--hr/>
						<img class="pict" src="img/pictdefault.gif" alt="" />
						<h2>ICI VOTRE ANNONCE !</h2>
						<p>
							Pour d&eacute;posez votre annonce, contactez-nous !
						</p>
						<a class="plus" href="default.htm">D&eacute;tails >></a>
				</div-->
				<div class="clearit"></div>
			</div>
		</div>
                <?php include 'includes/bottom.inc.php'; ?>
	</div><!--fin container-->
	</div><!--fin background-->
</body>
</html>
