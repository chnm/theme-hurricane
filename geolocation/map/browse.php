<?php head(array('title' => 'Browse Map','bodyid'=>'map','bodyclass' => 'browse')); ?>

<div id="items-heading">
	<div class="heading"><h2>Browse Items on the Map (<?php echo $totalItems; ?> total)</h2>
		<ul class="navigation">
			<?php echo public_nav(array('All Items' => uri('items/browse'), 'Images' => uri('items?type=6'),'Stories' => uri('items?type=1'),'Oral Histories' => uri('items?type=4'), 'Video' => uri('items?type=3'), 'Map' => uri('items/map'), 'By Tag' => uri('items/tags'))); ?>
		</ul> 
	</div>
</div>

<div id="primary">

<div class="pagination">
    <?php echo pagination_links(); ?>
</div><!-- end pagination -->

<div id="map-block">
    <?php echo geolocation_google_map('map-display', array('loadKml'=>true, 'list'=>'map-links'));?>
</div><!-- end map_block -->

<div id="link_block">
    <h3>Find An Item on the Map</h3>
    <div id="map-links"></div><!-- Used by JavaScript -->
</div><!-- end link_block -->

</div><!-- end primary -->

<?php foot(); ?>