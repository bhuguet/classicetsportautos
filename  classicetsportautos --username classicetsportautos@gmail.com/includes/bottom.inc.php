<div class="car"></div>
<div class="pieddepage">
    <div class="col560">
        <h2><?php echo $evenements_title; ?></h2>
        <p>
        <?php if (isset($evenements_first_bullet)) echo '<li>'.$evenements_first_bullet.'</li>'; ?>
        <?php if (isset($evenements_second_bullet)) echo '<li>'.$evenements_second_bullet.'</li>'; ?>
        <?php if (isset($evenements_third_bullet)) echo '<li>'.$evenements_third_bullet.'</li>'; ?>
        <?php if (isset($evenements_fourth_bullet)) echo '<li>'.$evenements_fourth_bullet.'</li>'; ?>
        <?php if (isset($evenements_fifth_bullet)) echo '<li>'.$evenements_fifth_bullet.'</li>'; ?>
        <?php if (isset($evenements_sixth_bullet)) echo '<li>'.$evenements_sixth_bullet.'</li>'; ?>
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