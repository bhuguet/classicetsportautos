<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include 'includes/metas.inc.php'; ?>

<meta name="description" content="<?php echo $index_description; ?>">
<meta name="keywords" content="<?php echo $index_keywords; ?>">

<title><?php echo $index_title; ?></title>
<link rel="shortcut icon" href="images/csa.ico">
<link rel="stylesheet" type="text/css" media="screen" href="../css/init.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/csa.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/ju2com.css">
<link rel="stylesheet" type="text/css" media="print" href="../css/csa.css">

<?php include 'includes/index_head.inc.php'; ?>
</head>

<body>
	<div class="background">
	<div class="container">
		<div class="wrapper">
			<div class="head">
                                <?php $highlight = 'accueil'; ?>
                                <?php include 'includes/top.inc.php'; ?>

                            <div class="espacepromo">

				<ul class="slideshow">
                                    <li class="show"><a href="#"><img src="../img/panoramaNewYear2012_2.jpg" width="858" height="250" title="<?php echo $img_title_panorama_new_year_2012; ?>" alt=""/></a></li>
                                    <li><a href="#"><img src="../img/PanoramaCSAanniv_1.jpg" width="858" height="250" title="<?php echo $img_title_panorama_first_birthday; ?>" alt=""/></a></li>
                                    <li><a href="#"><img src="../img/bandeauDevantGarage.jpg" width="858" height="250" title="" alt=""/></a></li>
				</ul>

				</div>
			</div>

			<div class="col260">
				<h1><?php echo $nos_prestations_title; ?></h1>
				<p>
                                    <?php echo $nos_prestations_paragraphe_1; ?>
				</p>
				<p>
                                    <?php echo $nos_prestations_paragraphe_2; ?>
				</p>
				<a class="plus" href="<?php echo $menu_engagements_file; ?>"><?php echo $lire_la_suite; ?></a>                            
    <br/><br/>
                        <?php include 'includes/atelierWidget.inc.php'; ?>
                        </div>
                                
			<div>
                            <div id="fb-root"></div>
                            <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                            <fb:like-box href="https://www.facebook.com/pages/Classic-Sport-Autos/124036417669507" width="560" show_faces="false" stream="true" header="false"></fb:like-box>
			</div>

			<div class="clearit"></div>
		</div>
                <?php include 'includes/bottom.inc.php'; ?>
	</div><!--fin container-->
	</div><!--fin background-->
</body>
</html>