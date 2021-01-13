<?php echo head(array('title'=>'Browse Tags','bodyid'=>'items','bodyclass'=>'tags')); ?>
<div id="items-heading">
<div class="heading">  <h2> Tags</h2>
	<ul class="navigation">
		<?php echo legacy_nav(array('All Items' => url('items/browse'), 'Images' => url('items?type=6'),'Stories' => url('items?type=1'),'Oral Histories' => url('items?type=4'), 'Video' => url('items?type=3'), 'Map' => url('items/map'), 'Tags' => url('items/tags'))); ?>
	</ul> 
</div>
</div>
	<div id="primary">

		<?php 
		$tags = get_records('Tag', array('sort_field' => 'name'),null);
		echo tag_cloud($tags, 'items/browse'); 
		?>

	</div><!-- end primary -->

<?php echo foot(); ?>
