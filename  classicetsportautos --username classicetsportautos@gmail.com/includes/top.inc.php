<div class="logo"></div>
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
    <li><a <?php echo $hAccueil; ?> href="index.html">Accueil</a></li>
    <li><a <?php echo $hAtelier; ?> href="atelier.html">Atelier</a></li>
    <li><a <?php echo $hEngagements; ?> href="engagements.html">Nos engagements</a></li>
    <li><a <?php echo $hAchatsVentes; ?> href="achatsventes.html">Achats/Ventes</a></li>
    <li><a <?php echo $hContact; ?> href="contact.html">Contact</a></li>
</ul>
<div class="clearit"></div>