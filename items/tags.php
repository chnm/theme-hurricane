<?php head(array('title'=>'Browse Items','bodyid'=>'items','bodyclass'=>'tags')); ?>
<div id="items-heading">
<div class="heading">  <h2> Items (<?php echo total_results(); ?> total) </h2>
	<ul class="navigation">
		<li>Browse -></li>		<?php echo public_nav(array('All' => uri('items/browse'), 'Images' => uri('items?type=1'),'Stories' => uri('items?type=4'), 'Other files?' => uri('items?type=4'), 'Map' => uri('items/map'), 'By Tag' => uri('items/tags'))); ?>
	</ul> 
</div>
</div>
	<div id="primary">

		<?php 
		$tags = get_tags(array('sort' => 'alpha'),null);
		echo tag_cloud($tags,uri('items/browse')); 
		?>

	</div><!-- end primary -->

	<?php foot(); ?>