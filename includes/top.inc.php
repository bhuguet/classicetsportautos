<div class="logo"></div>
<div class="flag"><?php echo $flag_link ?></div>
<ul class="menu">
    <?php  
    $classCurrent = 'class="current"';
    $hAccueil = '';
    $hAtelier = '';
    $hEngagements = '';
    $hAchatsVentes = '';
    $hContact = '';
    
    switch ($highlight) {
        case 'accueil':
            $hAccueil = $classCurrent;
            break;
        case 'atelier':
            $hAtelier = $classCurrent;
            break;
        case 'engagements':
            $hEngagements = $classCurrent;
            break;
        case 'achatsventes':
            $hAchatsVentes = $classCurrent;
            break;
        case 'contact':
            $hContact = $classCurrent;
            break;        
        default :
            break;
    }
    
    
    ?>
    <li><a <?php echo $hAccueil; ?> href="<?php echo $menu_accueil_file; ?>"><?php echo $menu_accueil; ?></a></li>
    <li><a <?php echo $hAtelier; ?> href="<?php echo $menu_atelier_file; ?>"><?php echo $menu_atelier; ?></a></li>
    <li><a <?php echo $hEngagements; ?> href="<?php echo $menu_engagements_file; ?>"><?php echo $menu_nos_engagements; ?></a></li>
    <li><a <?php echo $hAchatsVentes; ?> href="<?php echo $menu_achatsventes_file; ?>"><?php echo $menu_achats_ventes; ?></a></li>
    <li><a <?php echo $hContact; ?> href="<?php echo $menu_contact_file; ?>"><?php echo $menu_contact; ?></a></li>
</ul>
<div class="clearit"></div>