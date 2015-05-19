<script>
        !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
</script>
<script type="text/javascript" src="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript">
    $(document).ready(function() {
        <?php
        $itemsToSell = array('pieces_herald_spitfire', 'mercedes230ce', 'triumph_herald','frogeye', 'xk120', 'daimler', '190sl', 'mga_mk1_1960', 'fiat500', 'tr3A');
        foreach ($itemsToSell as $item) {
        ?>
                    $("a[rel=<?php echo $item; ?>]").fancybox({
                            'transitionIn'		: 'none',
                            'transitionOut'		: 'none',
                            'titlePosition' 	: 'over',
                            'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                                return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                            }
                        });                            
        <?php } ?>
    });
</script>