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
				<h1><?php echo $annonces_title; ?></h1>
				<p>
                                    <?php echo $annonces_description; ?>
				</p>
				<br/><br/>
				<div class="col560">
					<h1><?php echo $vente_title; ?></h1>
                                        <?php include_once 'classes/Car.php'; ?>
					<hr/>                                        
                                        <?php
                                        $pieces = array();
                                        for ($index = 1; $index < 25; $index++) {
                                            $pieces[] = "piecesHeraldSpitfire$index.jpg";
                                        }
                                            $piecesHeraldSpitfire = new Car("piecesHeraldSpitfire1.jpg", "Pièces Herald/ Spitfire");
                                            $piecesHeraldSpitfire->setOtherPictures($pieces);
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="pieces_herald_spitfire" href="<?php echo $piecesHeraldSpitfire->getImage("/img/ventes/PiecesHeraldSpitfire/"); ?>" title="<?php echo $piecesHeraldSpitfire->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $piecesHeraldSpitfire->getResizedImage("/img/ventes/PiecesHeraldSpitfire/",78); ?>"/></a>
                                                    <h2>Pièces Herald/ Spitfire</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>1 200&euro;</strong></p>
						</div>
						<div class="vente-col1">
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($piecesHeraldSpitfire->getOtherPictures() as $picture) { ?>
                                                        <a rel="pieces_herald_spitfire" href="/img/ventes/PiecesHeraldSpitfire/<?php echo $picture; ?>" title="<?php echo $piecesHeraldSpitfire->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $piecesHeraldSpitfire->getResizedImageForPicture("/img/ventes/PiecesHeraldSpitfire/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $piecesHeraldSpitfire_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 27 Janvier 2013.</p>
						</div>
						<div class="clearit"></div>                                          
					<hr/>                                        
                                        <?php
                                            $mercedes230CE = new Car("mercedes230ce_AVD.JPG", "Mercedes 230 CE 1986");
                                            $mercedes230CE->setOtherPictures(array("mercedes230ce_AVG.JPG", "mercedes230ce_G.JPG", "mercedes230ce_AR.JPG", "mercedes230ce_int.JPG",
                                                "mercedes230ce_int2.JPG", "mercedes230ce_int3.JPG", "mercedes230ce_moteur.JPG", "mercedes230ce_moteur2.JPG", "mercedes230ce_dessous1.JPG",
                                                "mercedes230ce_dessous2.JPG", "mercedes230ce_dessous3.JPG", "mercedes230ce_dessous4.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="mercedes230ce" href="<?php echo $mercedes230CE->getImage("/img/ventes/Mercedes_230CE/"); ?>" title="<?php echo $mercedes230CE->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $mercedes230CE->getResizedImage("/img/ventes/Mercedes_230CE/",78); ?>"/></a>
                                                    <h2>Mercedes 230 CE</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>3 900&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1986</strong></p>
                                                        <p><?php echo $kilometrage; ?> <strong>278 000 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($mercedes230CE->getOtherPictures() as $picture) { ?>
                                                        <a rel="mercedes230ce" href="/img/ventes/Mercedes_230CE/<?php echo $picture; ?>" title="<?php echo $mercedes230CE->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $mercedes230CE->getResizedImageForPicture("/img/ventes/Mercedes_230CE/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $mercedes230CE_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 14 Octobre 2012.</p>
						</div>
						<div class="clearit"></div>                                        
					<hr/>
                                        <?php
                                            $daimlerV8 = new Car("daimlerV8_AV.JPG", "Daimler Super V8");
                                            $daimlerV8->setOtherPictures(array("daimlerV8_D.JPG", "daimlerV8_G.JPG", "daimlerV8_int.JPG", "daimlerV8_intAR.JPG", "daimlerV8_intAV.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="daimler_v8" href="<?php echo $daimlerV8->getImage("/img/ventes/DaimlerV8/"); ?>" title="<?php echo $daimlerV8->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $daimlerV8->getResizedImage("/img/ventes/DaimlerV8/",78); ?>"/></a>
                                                    <h2>Daimler Super V8</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>16 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1998</strong></p>
                                                        <p><?php echo $kilometrage; ?> <strong>113 000 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($daimlerV8->getOtherPictures() as $picture) { ?>
                                                        <a rel="daimler_v8" href="/img/ventes/DaimlerV8/<?php echo $picture; ?>" title="<?php echo $daimlerV8->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $daimlerV8->getResizedImageForPicture("/img/ventes/DaimlerV8/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $daimlerV8_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 24 Septembre 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>
                                        <?php
                                            $ferrariMondialT = new Car("mondial_extg.JPG", "Ferrari Mondial T");
                                            $ferrariMondialT->setOtherPictures(array("mondial_int.jpg", "mondial_int2.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="fmondial" href="<?php echo $ferrariMondialT->getImage("/img/ventes/FerrariMondialT/"); ?>" title="<?php echo $ferrariMondialT->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $ferrariMondialT->getResizedImage("/img/ventes/FerrariMondialT/",78); ?>"/></a>
                                                    <h2>Ferrari Mondial T</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>38 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1990</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($ferrariMondialT->getOtherPictures() as $picture) { ?>
                                                        <a rel="fmondial" href="/img/ventes/FerrariMondialT/<?php echo $picture; ?>" title="<?php echo $daimlerV8->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $daimlerV8->getResizedImageForPicture("/img/ventes/FerrariMondialT/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $ferrariMondialT_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 2 Septembre 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>                                        
                                        <?php
                                            $xjsLeMans = new Car("jagxjs_ext.JPG", "Jaguar XJS V12 Le Mans");
                                            $xjsLeMans->setOtherPictures(array("jagxjs_int.JPG", "jagxjs_moteur.JPG", "jagxjs_plaque.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="xjs_lemans" href="<?php echo $xjsLeMans->getImage("/img/ventes/xjs_LeMans/"); ?>" title="<?php echo $xjsLeMans->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $xjsLeMans->getResizedImage("/img/ventes/xjs_LeMans/",78); ?>"/></a>
                                                    <h2>Jaguar XJS V12 Le Mans</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>20 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1991</strong></p>
                                                        <p><?php echo $kilometrage; ?> <strong>88 000 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($xjsLeMans->getOtherPictures() as $picture) { ?>
                                                        <a rel="xjs_lemans" href="/img/ventes/xjs_LeMans/<?php echo $picture; ?>" title="<?php echo $xjsLeMans->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $xjsLeMans->getResizedImageForPicture("/img/ventes/xjs_LeMans/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $xjsLeMans_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 2 Septembre 2012.</p>
						</div>
						<div class="clearit"></div>                                        
                                        <hr/>   
                                        <?php
                                            $tr5 = new Car("TR5_left.JPG", "Triumph TR5 1968");
                                            $tr5->setOtherPictures(array("TR5_arriere.jpg", "TR5_ciel.JPG", "TR5_droite.jpg", "TR5_interieur.jpg", "TR5_moteur.jpg", "TR5_portiere.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="tr5" href="<?php echo $tr5->getImage("/img/ventes/TR5_1968/"); ?>" title="<?php echo $tr5->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $tr5->getResizedImage("/img/ventes/TR5_1968/",78); ?>"/></a>
                                                    <h2>Triumph TR5 1968</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>36 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1968</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($tr5->getOtherPictures() as $picture) { ?>
                                                        <a rel="tr5" href="/img/ventes/TR5_1968/<?php echo $picture; ?>" title="<?php echo $tr5->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $tr5->getResizedImageForPicture("/img/ventes/TR5_1968/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $tr5_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 25 Mars 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>
                                        <?php
                                            $corvette = new Car("Corvette_AVD.jpg", "Chevrolet Corvette 1958");
                                            $corvette->setOtherPictures(array("Corvette_avant.jpg", "Corvette_droite.JPG", "Corvette_gauche.JPG"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="corvette" href="<?php echo $corvette->getImage("/img/ventes/Corvette_1958/"); ?>" title="<?php echo $corvette->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $corvette->getResizedImage("/img/ventes/Corvette_1958/",78); ?>"/></a>
                                                    <h2>Chevrolet Corvette 1958</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>59 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1958</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($corvette->getOtherPictures() as $picture) { ?>
                                                        <a rel="corvette" href="/img/ventes/Corvette_1958/<?php echo $picture; ?>" title="<?php echo $corvette->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $corvette->getResizedImageForPicture("/img/ventes/Corvette_1958/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $corvette_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 25 Mars 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>                                        
                                        <?php
                                            $xk120Roadster = new Car("xk120_roadster.jpg", "Jaguar XK 120 Roadster");
                                            $xk120Roadster->setOtherPictures(array("jaguarXK120_3.JPG", "jaguarXK120_2.JPG", "xk120_roadster_int.jpg"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="xk120" href="<?php echo $xk120Roadster->getImage("/img/ventes/xk120/"); ?>" title="<?php echo $xk120Roadster->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $xk120Roadster->getResizedImage("/img/ventes/xk120/",78); ?>"/></a>
                                                    <h2>Jaguar XK 120 Roadster</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>72 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1953</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($xk120Roadster->getOtherPictures() as $picture) { ?>
                                                        <a rel="xk120" href="/img/ventes/xk120/<?php echo $picture; ?>" title="<?php echo $xk120Roadster->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $xk120Roadster->getResizedImageForPicture("/img/ventes/xk120/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $xk120Roadster_description_1; ?>
                                                </p>
                                                <p>
                                                    <?php echo $xk120Roadster_description_2; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 5 Juillet 2011.</p>
						<!--a class="plus" href="javascript:OuvrirPopup('popup.html', '', 'resizable=no, location=no, width=260, height=300, menubar=no, status=no, scrollbars=no, menubar=no','top=200,left=200')">D&eacute;tails >></a-->
						</div>
						<div class="clearit"></div>       
					<hr/>
                                        <?php
                                            $daimler = new Car("daimler1.JPG", "Daimler Sovereign");
                                            $daimler->setOtherPictures(array("daimler2.JPG", "daimler3.JPG", "daimler4.JPG", "daimler5.JPG", "daimler6.JPG"));
                                        ?>                                        
                                                <div class="vente-titre">
                                                    <a rel="daimler" href="<?php echo $daimler->getImage("/img/ventes/daimler/"); ?>" title="<?php echo $daimler->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $daimler->getResizedImage("/img/ventes/daimler/",78); ?>"/></a>                                                    
                                                    <h2>Daimler Sovereign 4,2l</h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>6 500&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1980</strong></p>
							<p><?php echo $kilometrage; ?> <strong>93 000 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($daimler->getOtherPictures() as $picture) { ?>
                                                        <a rel="daimler" href="/img/ventes/daimler/<?php echo $picture; ?>" title="<?php echo $daimler->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $daimler->getResizedImageForPicture("/img/ventes/daimler/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $daimler_description_1; ?>
                                                </p>
                                                <p>
                                                    <?php echo $daimler_description_2; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 30 Juin 2011.</p>
						<!--a class="plus" href="javascript:OuvrirPopup('popup.html', '', 'resizable=no, location=no, width=260, height=300, menubar=no, status=no, scrollbars=no, menubar=no','top=200,left=200')">D&eacute;tails >></a-->
						</div>
						<div class="clearit"></div>                                        
					<hr/>
                                        <?php
                                            $triumph_herald = new Car("triumph_herald_2.jpg", "Triumph Herald 13/60 Cabriolet 1969");
                                            $triumph_herald->setOtherPictures(array("triumph_herald_1.jpg", "triumph_herald_3.jpg", "triumph_herald_4.jpg", "triumph_herald_5.jpg", 
                                                                                   "triumph_herald_6.jpg", "triumph_herald_7.jpg", "triumph_herald_8.jpg", "triumph_herald_9.jpg"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="triumph_herald" href="<?php echo $triumph_herald->getImage("/img/ventes/Triumph_Herald/"); ?>" title="<?php echo $triumph_herald->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $triumph_herald->getResizedImage("/img/ventes/Triumph_Herald/",78); ?>"/></a>
                                                    <h2>Triumph Herald 13/60 Cabriolet <span style="padding-left: 15px; color:red; font-weight:bold;"><?php echo $vendue; ?></span></h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>8 650&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1969</strong></p>
                                                        <p><?php echo $kilometrage; ?> <strong>84 520 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($triumph_herald->getOtherPictures() as $picture) { ?>
                                                        <a rel="triumph_herald" href="/img/ventes/Triumph_Herald/<?php echo $picture; ?>" title="<?php echo $triumph_herald->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $triumph_herald->getResizedImageForPicture("/img/ventes/Triumph_Herald/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $triumphHerald_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 20 Juin 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>                                        
                                        <?php
                                            $frogeye = new Car("Frog_AVD.jpg", "Austin Healey Sprite 1960 'Frogeye/Bugeye'");
                                            $frogeye->setOtherPictures(array("Frog_AVG.jpg", "Frog_ARD.jpg", "Frog_interieur.jpg", "Frog_moteur.jpg"));
                                        ?>
                                                <div class="vente-titre">
                                                    <a rel="frogeye" href="<?php echo $frogeye->getImage("/img/ventes/Frogeye_1960/"); ?>" title="<?php echo $frogeye->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $frogeye->getResizedImage("/img/ventes/Frogeye_1960/",78); ?>"/></a>
                                                    <h2>Austin Healey Sprite <span style="padding-left: 15px; color:red; font-weight:bold;"><?php echo $vendue; ?></span></h2>                                                        
                                                    <p><?php echo $prix; ?> <strong>18 000&euro;</strong></p>
                                                    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
                                                        <p><?php echo $annee_modele; ?> <strong>1960</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($frogeye->getOtherPictures() as $picture) { ?>
                                                        <a rel="frogeye" href="/img/ventes/Frogeye_1960/<?php echo $picture; ?>" title="<?php echo $frogeye->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $frogeye->getResizedImageForPicture("/img/ventes/Frogeye_1960/",20,$picture); ?>"/></a>
                                                      <?php } ?>
						<p>
                                                    <?php echo $frogeye_description; ?>
                                                </p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 25 Mars 2012.</p>
						</div>
						<div class="clearit"></div>       
					<hr/>                                        
                                        <?php
                                            $sl190 = new Car("190sl3.JPG", "Mercedes 190 sl");
                                            $sl190->setOtherPictures(array("190sl.JPG", "190sl2.JPG", "190sl4.JPG", "190sl5.JPG", "190sl6.JPG"
                                                        , "190slpont.JPG", "190slpont2.JPG", "190slARD.JPG", "190slARG.JPG", "190slAVD.JPG"
                                                        , "190slcarter.JPG", "190sldessous1.JPG", "190sldessous2.JPG", "190sldessous3.JPG", "190sldessous4.JPG"
                                                        , "190sldessous5.JPG", "190sldessous6.JPG", "190slinterieur.JPG", "190slinterieur2.JPG", "190slinterieur3.JPG"
                                                        , "190slinterieur4.JPG"));
                                        ?>                                        
                                                <div class="vente-titre">
                                                    <a rel="190sl" href="<?php echo $sl190->getImage("/img/ventes/"); ?>" title="<?php echo $sl190->getLabel(); ?>">
                                                    <img class="pict" src="<?php echo $sl190->getResizedImage("/img/ventes/",78); ?>"/></a>                                                      
                                                    <h2>Mercedes 190 SL <span style="padding-left: 15px; color:red; font-weight:bold;"><?php echo $vendue; ?></span></h2>
						    <p><?php echo $prix; ?> <strong>59 000&euro;</strong></p>
						    <p><?php echo $ville; ?> <strong>38400 Saint Martin d'Hères</strong></p>
						</div>
						<div class="vente-col1">
							<p><?php echo $annee_modele; ?> <strong>1961</strong></p>
							<p><?php echo $kilometrage; ?> <strong>109 567 KM</strong></p>
						</div>
						<div class="vente-col2">
                                                    <?php
                                                      foreach ($sl190->getOtherPictures() as $picture) { ?>
                                                        <a rel="190sl" href="/img/ventes/<?php echo $picture; ?>" title="<?php echo $sl190->getLabel(); ?>">
                                                        <img class="icone" src="<?php echo $sl190->getResizedImageForPicture("/img/ventes/",20,$picture); ?>"/></a>
                                                      <?php } ?>                                                    
						<p>
                                                    <?php echo $sl190_description; ?>
						</p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 8 Mai 2011.</p>
						</div>
						<div class="clearit"></div>
					<hr/>                                        
						<div class="vente-titre">
							<a rel="dynolite_apg_30" href="/img/ventes/dynolite_apg30.jpg" title="Dynolite APG 30">
							<img class="pict" src="/img/ventes/dynolite_apg30_s.jpg" alt="" /></a>
							<h2>Dynolite APG 30</h2>
							<p>Gamme <strong>"APG" 1950 - 1975</strong></p>
							<p>(Multigrade D&eacute;tergente & Dispersante)</p>
						</div>
						<div class="vente-col1">
							<p>Multigrade <strong>25w/70</strong></p>
							<p><?php echo $prix; ?> <strong>7.15&euro; / litre</strong></p>
						</div>
						<div class="vente-col2">
							<a rel="dynolite_apg_30" href="/img/ventes/dynolite_apg30_img.jpg" title="Dynolite APG 30">
							<img class="icone" src="/img/ventes/dynolite_apg30_img_s.jpg" alt="" /></a>
						<p>
                                                    <?php echo $dynolite_apg_30_desc; ?>
						</p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 4 Mars 2011.</p>
						</div>
						<div class="clearit"></div>
					<hr/>
						<div class="vente-titre">
							<a rel="dynolite_hypoid" href="/img/ventes/dynolite_hypoid.jpg" title="Dynolite Hypo&iuml;d 85W/140">
							<img class="pict" src="/img/ventes/dynolite_hypoid_s.jpg" alt="" /></a>
							<h2>Dynolite Hypo&iuml;d 85W/140</h2>
							<p>Gamme <strong>TRANSMISSION</strong></p>
						</div>
						<div class="vente-col1">
							<p><?php echo $prix; ?> <strong>7.15&euro; / litre</strong></p>
						</div>
						<div class="vente-col2">
							<a rel="dynolite_hypoid" href="/img/ventes/dynolite_hypoid_img.jpg" title="Dynolite Hypo&iuml;d 85W/140">
							<img class="icone" src="/img/ventes/dynolite_hypoid_img_s.jpg" alt="" /></a>
						<p>
                                                    <?php echo $dynolite_hypoid_desc; ?>
						</p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 4 Mars 2011.</p>
						</div>
						<div class="clearit"></div>
					<hr/>
						<div class="vente-titre">
							<a rel="dynolite_gearoil_40" href="/img/ventes/dynolite_gearoil40.jpg" title="Dynolite GearOil 40">
							<img class="pict" src="/img/ventes/dynolite_gearoil40_s.jpg" alt="" /></a>
							<h2>Dynolite GearOil 40</h2>
							<p>Gamme <strong>TRANSMISSION</strong></p>
							<p><strong>Huile de boîte</strong></p>
						</div>
						<div class="vente-col1">
							<p>Multigrade <strong>25w/70</strong></p>
							<p><?php echo $prix; ?> <strong>7.15&euro; / litre</strong></p>
						</div>
						<div class="vente-col2">
							<a rel="dynolite_gearoil_40" href="/img/ventes/dynolite_gearoil40_img.jpg" title="Dynolite GearOil 40">
							<img class="icone" src="/img/ventes/dynolite_gearoil40_img_s.jpg" alt="" /></a>
						<p>
                                                    <?php echo $dynolite_gearoil_40_desc; ?>
						</p>
						<p style="font-size:x-small; font-style:italic;"><?php echo $date_publication; ?> 4 Mars 2011.</p>
						</div>
						<div class="clearit"></div>
				</div>
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