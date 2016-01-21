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

$onebyone = 'oneByone';
$twobyone = 'twoByone';
$twobytwo = 'twoBytwo';
$threebyone = 'threeByone';
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

<ul id="scene" class="scene">
			<li class="layer" data-depth="1.40"><img src="<?php bloginfo('template_directory');?>/temp/images/bingo1.png" class="layer1"></li>
			<li class="layer" data-depth="1.00"><img src="<?php bloginfo('template_directory');?>/temp/images/bingo2.png" class="layer2"></li>
			<li class="layer" data-depth="0.60"><img src="<?php bloginfo('template_directory');?>/temp/images/bingo3.png" class="layer3"></li>
</ul>


<!------------------------------------------------------------ Container ------------------------------------------------------------>

<div id="container">


<!------------------------------------------------------------ Side Menu ------------------------------------------------------------>

<div id="sideMenu">

<h1>Side Menu</h1>

</div>


<!------------------------------------------------------------ Content ------------------------------------------------------------>

<div id="content">

<!------------------------------------------------------------ Grid ------------------------------------------------------------>


<ul class="grid">


<!------------------------------------------------------------ 1st Row ------------------------------------------------------------>


<li data-x="3">
<h1>01</h1>
<img src="<?php //bloginfo('template_directory');?>/temp/images/em.png">
</li>

     

<li>
<h1>02</h1>
</li>


<li>
<h1>03</h1>       
</li>


<li>
<h1>04</h1>
</li>



<!------------------------------------------------------------ 2st Row ------------------------------------------------------------>


<li>
<h1>05</h1>
</li>


<li>
<h1>06</h1>
</li>


<li>
<h1>07</h1>
</li>


<li data-x="2">
<h1>08</h1>
</li>

<li>
<h1>09</h1>
</li>


<li data-x="2">
<h1>10</h1>
</li>


<!------------------------------------------------------------ 3rd Row ------------------------------------------------------------>


<li data-x="3">
<h1>11</h1>
</li>


<li>
<h1>12</h1>
</li>


<li>
<h1>13</h1>
</li>

<li>
<h1>14</h1>
</li>



<!------------------------------------------------------------ 4th Row ------------------------------------------------------------>

<li data-x="2">
<h1>15</h1>
</li>


<li>
<h1>16</h1>
</li>

<li>
<h1>17</h1>
</li>


<li>
<h1>18</h1>
</li>

<li>
<h1>19</h1>
</li>


<li data-x="3">
<h1>20</h1>
</li>

</ul>



<!------------------------------------------------------------ Lazy footer ------------------------------------------------------------>


<div id="lazyFooter"> 
<h1>LAZY Footer</h1>
</div>

<div id="bingoNews">
<h1>BINGO News</h1>
</div>

<div id="bingoHelp">
<h1>BINGO Help</h1>
</div>

<div id="footer">
<h1>Footer</h1>
</div>

<!-- 1st row -->

	<?php
	/*
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

	<?php endwhile; endif; 
*/
	?>





</div>

</div>


		<script src="<?php bloginfo('template_directory');?>/temp/js/jquery-1.11.3.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/temp/js/awesome-grid.min.js"></script>
		<script src="http://www.princesnr.com/js/parallax.js"></script>

		<script>

		// GRID LAYOUT

		$(window).load(function(){
			$('ul.grid').AwesomeGrid({
		    rowSpacing  : 5,
		    colSpacing  : 5,
		    columns     : {
		    'defaults' : 6,
		    '800' : 6
		    }
		    });
		});


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

		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);

		</script>

		<!-- Scripts -->


</body>
</html>