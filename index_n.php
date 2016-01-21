<?php /* Template Name: temp temp sola */ 

// Functions for short names and go page URLs

    function make_no_space($full_name) {
    	$name = strtolower($full_name);
    	$name = preg_replace('/[^a-z0-9]/i','',$name);
    	return ($name);
    }
?>

<?php

// li card classes


$twobytwo = 'twoBytwo';
$threebytwo = 'threeBytwo';

?>

<?php if (get_field('operator_name') != '')

    // OPERATOR TRACKING LINKS
    $tracking_link          = get_field('tracking_link');
    $custom_tracking_link   = get_field('custom_tracking_link');

    // STANDARD / CUSTOM LINK CHECK
    $op_cta                 = (($custom_tracking_link) ? $custom_tracking_link : '/go/'.get_the_ID());

    // OPERATOR LISTINGS
    $op_name                = get_field('operator_name');
    $namenospace            = make_no_space($op_name);
    $do_not_duplicate[]     = $post->ID;
    $top_line               = get_field('op_top_line');
    $mid_line               = get_field('op_mid_line');
    $btm_line               = get_field('op_btm_line');

    // POST COUNTING
    //$pos                    = $i + 1; // USED FOR DETERMINING POSITION OF ADS ETC
    $id_label               = 'home'; // DO NOT THINK THIS IS OF ANY USE

 ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Grid Items</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/temp/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/temp/css/grid.css" />
	</head>
<body>


<!------------------------------------------------------------ Container ------------------------------------------------------------>

<div id="container">



<!------------------------------------------------------------ Side Menu ------------------------------------------------------------>

<div id="sideMenu">

<h4>Hello</h4>
</div>


<!------------------------------------------------------------ Content ------------------------------------------------------------>

<div id="content">






<ul class="grid" id="grid">


<!-- 1st row -->

<li class="<?php echo $twobytwo;?>">
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>


<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>


<!-- 2nd row -->


<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>




<li class="<?php //echo $threebytwo;?>">
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>



<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>


<!-- 2nd row -->


<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>

<li>
		Welcome to the NEW LOCK
		<p> All your favourite free bingo deals are now easier to find and navigate. </p>
		<p> If you want to learn more about how to use the new site. <em> wait for the next page of this tile </em></p>
</li>



<!-- 3rd Row -->




<!-- 4th row -->






	<?php
	    $custom_args = array(
	        'post_type'      => 'post',
	        'cat'            => '37291',
	    );

	    $custom_query = new WP_Query($custom_args);
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
		
		$hex = get_field('hex');
	?>

	<li style='background-color: <?php echo $hex; ?>' class="<?php ?>">
		<?php the_content(); ?>
	</li>

	<?php endwhile; endif; ?>

</ul>
	
</div>



</div>

<script src="<?php bloginfo('template_directory');?>/temp/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/temp/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/temp/js/imagesloaded.js"></script>
<script src="<?php bloginfo('template_directory');?>/temp/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory');?>/temp/js/classie.js"></script>
<script src="<?php bloginfo('template_directory');?>/temp/js/AnimOnScroll.js"></script>
<script src="http://www.princesnr.com/js/parallax.js"></script>
<script>

	new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
	} );

// FIXED SIDE MENU
	
	jQuery(function($) {
	function fixDiv() {
	var $sideMenu = $('#sideMenu');
	if ($(window).scrollTop() > 1)
	$sideMenu.css({
	'position': 'fixed',
	'top': '0px'
	// 'width': '0%',
	// 'min-width': '220px'
	});
	else
	$sideMenu.css({
	'position': 'relative',
	'top': 'auto'
	});
	}
	$(window).scroll(fixDiv);
	fixDiv();
	});

// PARALLAX

	// var scene = document.getElementById('scene');
	// var parallax = new Parallax(scene);

</script>


</body>
</html>