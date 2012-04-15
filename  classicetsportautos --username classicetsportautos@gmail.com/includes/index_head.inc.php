<script type="text/javascript" src="../jquery/js/jquery-1.3.1.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	//Execute the slideShow, set 4 seconds for each images
	slideShow(6000);

});

function slideShow(speed) {


	//append a LI item to the UL list for displaying caption
	$('ul.slideshow').append('<li id="slideshow-caption" class="caption"><div class="slideshow-caption-container"><h3></h3><p></p></div></li>');

	//Set the opacity of all images to 0
	$('ul.slideshow li').css({opacity: 0.0});

	//Get the first image and display it (set it to full opacity)
	$('ul.slideshow li:first').css({opacity: 1.0});

	//Get the caption of the first image from REL attribute and display it
	$('#slideshow-caption h3').html($('ul.slideshow a:first').find('img').attr('title'));
	$('#slideshow-caption p').html($('ul.slideshow a:first').find('img').attr('alt'));

	//Display the caption
	$('#slideshow-caption').css({opacity: 0.7, bottom:0});

	//Call the gallery function to run the slideshow
	var timer = setInterval('gallery()',speed);

	//pause the slideshow on mouse over
	$('ul.slideshow').hover(
		function () {
			clearInterval(timer);
		},
		function () {
			timer = setInterval('gallery()',speed);
		}
	);

}

function gallery() {


	//if no IMGs have the show class, grab the first image
	var current = ($('ul.slideshow li.show')?  $('ul.slideshow li.show') : $('#ul.slideshow li:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().attr('id') == 'slideshow-caption')? $('ul.slideshow li:first') :current.next()) : $('ul.slideshow li:first'));

	//Get next image caption
	var title = next.find('img').attr('title');
	var desc = next.find('img').attr('alt');

	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);

	//Hide the caption first, and then set and display the caption
	$('#slideshow-caption').slideToggle(300, function () {
		$('#slideshow-caption h3').html(title);
		$('#slideshow-caption p').html(desc);
		$('#slideshow-caption').slideToggle(500);
	});

	//Hide the current image
	current.animate({opacity: 0.0}, 1000).removeClass('show');

}
</script>


<link rel="stylesheet" type="text/css" media="screen" href="../jquery/css/slideshow.css">

	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../jquery/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			$("a[rel=example_group2]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'
			});

		});
	</script>

<?php include 'includes/googleAnalytics.inc.php'; ?>