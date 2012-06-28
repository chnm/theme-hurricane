<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo isset($title) ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

<!-- Stylesheets -->
<?php
queue_css('style');
display_css(); 
?>
<!-- JavaScripts -->
<?php echo display_js(); ?>

</head>
<div id="header">
	<div class="hdmb-subtitle"><h1>-</h1></div>
	<div class="hdmb-logo"><?php echo link_to_home_page("Hurricane Archive",""); ?></div>
	<div class="blurb">
		<div class="blurb-wrap">
		<h1>Collecting and Preserving the Stories of Katrina and Rita</h1>
		
				<!-- end search -->
		<div class="search-clear"></div>
		<div class="search">
			<?php echo simple_search(); ?>
			<p><?php echo link_to_advanced_search(); ?></p>
		</div>
		<p>The <a href="http://chnm.gmu.edu" rel="external">Roy Rosenzweig Center for History and New Media (<abbr title="Roy Rosenzweig Center for History and New Media">CHNM</abbr>)</a> at George Mason University and the <a href="http://www.uno.edu" rel="external">University of New Orleans</a> organized the Hurricane Digital Memory Bank (<abbr title="Hurricane Digital Memory Bank">HDMB</abbr>) in 2005 in partnership with many national and Gulf Coast area organizations and individuals. HDMB was awarded the Award of Merit for Leadership in History, and is the largest free public archive of Katrina and Rita with over 25,000 items in the collection. <a href="about">Read More.</a></p>

					</div>
					</div>
<ul id="mainnav">	
	    
		<?php echo nav(
		             array( 
		               'Home' => uri(''),
						'About this Project' => uri('about'),
		               'Items' => uri('items?type=6'),
						'Collections' => uri('collections'),
						'Add to Memory Bank' => uri('contribution')
		             )
		           ); 
		?>


</ul>
</div>
<div id ="content">	