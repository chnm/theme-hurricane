<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo option('site_title'); echo isset($title) ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta name="description" content="<?php echo option('description'); ?>">

<?php echo auto_discovery_link_tags(); ?>

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view' => $this)); ?>

<!-- Stylesheets -->
<?php
queue_css_file('style');
echo head_css(); 
?>
<!-- JavaScripts -->
<?php echo head_js(); ?>

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.rrchnm.org/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '44']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

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
			<?php echo search_form(); ?>
			<p><?php echo link_to_item_search('Advanced Search'); ?></p>
		</div>
        <p>The <a href="http://chnm.gmu.edu" rel="external">Roy Rosenzweig Center for History and New Media (<abbr title="Roy Rosenzweig Center for History and New Media">CHNM</abbr>)</a> at George Mason University and the <a href="http://www.uno.edu" rel="external">University of New Orleans</a> organized the Hurricane Digital Memory Bank (<abbr title="Hurricane Digital Memory Bank">HDMB</abbr>) in 2005 in partnership with many national and Gulf Coast area organizations and individuals. HDMB was awarded the Award of Merit for Leadership in History, and is the largest free public archive of Katrina and Rita with over 25,000 items in the collection. <a href="<?php echo url('about'); ?>">Read More.</a></p>

		</div>
    </div>
        <ul id="mainnav">
		<?php echo legacy_nav(
            array(
                'Home' => url(''),
                'About this Project' => url('about'),
                'Items' => url('items?type=6'),
                'Collections' => url('collections'),
                'Add to Memory Bank' => url('contributionphase'),
            )
        ); ?>
        </ul>
</div>
<div id="content">	
