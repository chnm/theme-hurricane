<?php
queue_css_file('geolocation-items-map');
echo head(array('title' => 'Browse Map','bodyid'=>'map','bodyclass' => 'browse'));
?>

<div id="items-heading">
	<div class="heading"><h2>Browse Items on the Map (<?php echo $totalItems; ?> total)</h2>
		<ul class="navigation">
			<?php echo legacy_nav(array('All Items' => url('items/browse'), 'Images' => url('items?type=6'),'Stories' => url('items?type=1'),'Oral Histories' => url('items?type=4'), 'Video' => url('items?type=3'), 'Map' => url('items/map'), 'Tags' => url('items/tags'))); ?>
		</ul> 
	</div>
</div>

<div id="map-primary">

<div class="pagination">
    <?php echo pagination_links(); ?>
</div><!-- end pagination -->

<div id="map-block">
    <?php echo $this->geolocationMapBrowse('map_browse', array(/*'list'=>'map-links',*/ 'params' => $params));?>
</div><!-- end map_block -->

<?php /* link block is hidden in existing HDMB, so hide it here
<div id="link_block">
    <h3>Find An Item on the Map</h3>
    <div id="map-links"></div><!-- Used by JavaScript -->
</div><!-- end link_block -->
*/ ?>

</div><!-- end primary -->

<?php echo foot(); ?>
