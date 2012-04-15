<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include 'includes/metas.inc.php'; ?>

<meta name="description" content="<?php echo $engagements_description; ?>">
<meta name="keywords" content="<?php echo $engagements_keywords; ?>">

<title><?php echo $engagements_title; ?></title>
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
                                <?php $highlight = 'engagements'; ?>
                                <?php include 'includes/top.inc.php'; ?>                            
				<div class="espacepromo2"></div>
			</div>
			<h1><?php echo $histoire_dune_passion_title; ?></h1>
			<div class="col260">
                                <img src="../img/atelier/JfhJeuneDevantMGA_b.jpg" alt="" />
				<p>
                                    <?php echo $histoire_dune_passion_paragraphe_1; ?>
				</p>
			</div>
			<div class="col260">
				<p>
                                    <?php echo $histoire_dune_passion_paragraphe_2; ?>
                                    <br/>
				</p>
				<br/>
				<h1><?php echo $nos_prestations_title; ?></h1>
				<p>
                                    <?php echo $nos_prestations_paragraphe_1; ?>
				</p>
			</div>
			<div class="col260_3">
				<p>
                                    <?php echo $nos_prestations_paragraphe_2; ?>
                                    <br/>
					<div class="citation">
                                            <?php echo '"'.$engagements_citation.'"'; ?>
                                            <cite>Jean-Fran&ccedil;ois Huguet</cite>
					</div>
				</p>
			</div>
			<div class="clearit"></div>
		</div>
                <?php include 'includes/bottom.inc.php'; ?>
	</div><!--fin container-->
	</div><!--fin background-->
</body>
</html>