<div class="car"></div>
<div class="pieddepage">
    <div class="col560">
        <h2><?php if (isset($evenements_title)) echo $evenements_title; ?></h2>
        <p>
            <?php if (isset($evenements_1)) echo '<li>'.$evenements_1.'</li>'; ?>
            <?php if (isset($evenements_2)) echo '<li>'.$evenements_2.'</li>'; ?>
            <?php if (isset($evenements_3)) echo '<li>'.$evenements_3.'</li>'; ?>
            <?php if (isset($evenements_4)) echo '<li>'.$evenements_4.'</li>'; ?>
            <?php if (isset($evenements_5)) echo '<li>'.$evenements_5.'</li>'; ?>
            <?php if (isset($evenements_6)) echo '<li>'.$evenements_6.'</li>'; ?>
            <?php if (isset($evenements_7)) echo '<li>'.$evenements_7.'</li>'; ?>
            <?php if (isset($evenements_8)) echo '<li>'.$evenements_8.'</li>'; ?>
            <?php if (isset($evenements_9)) echo '<li>'.$evenements_9.'</li>'; ?>
            <?php if (isset($evenements_10)) echo '<li>'.$evenements_10.'</li>'; ?>
        </p>
    </div>
    <div class="col260_3">
        <h2><?php echo $horaires_ouverture_title; ?></h2>
        <ul>
            <li><?php echo $horaires_ouverture_jours; ?></li>
            <li><?php echo $horaires_ouverture_matin; ?></li>
            <li><?php echo $horaires_ouverture_apreme; ?></li>
        </ul>
        <br/>
    </div>
    <div class="clearit"></div>
    <div class ="mentions">
        <?php echo $adresse_ligne_1; ?>
        <br/>
        <?php echo $adresse_ligne_2; ?>
        <br/>
	<?php echo $adresse_ligne_3; ?>
        <br/>
        <?php echo $adresse_ligne_4; ?>
    </div>
    <script type="text/javascript" src="http://www.ju2com.fr/js/signatureFdNr.js"></script>
</div>