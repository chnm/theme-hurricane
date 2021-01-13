<?php echo head(array('title'=>'Browse Items','bodyid'=>'items','bodyclass' => 'browse')); ?>
<!-- end content-->
<div id="items-heading">
	<div class="heading">  <h2> Items (<?php echo $total_results; ?> total) </h2>
		<ul class="navigation">
			<?php echo legacy_nav(array('All Items' => url('items/browse'), 'Images' => url('items?type=6'),'Stories' => url('items?type=1'),'Oral Histories' => url('items?type=4'), 'Video' => url('items?type=3'), 'Map' => url('items/map'), 'Tags' => url('items/tags'))); ?>
		</ul> 
	</div>
</div>

<div id="items-primary">	
	
	<?php foreach(loop('items') as $item): ?>

			<div class="item hentry">
				
				<div class="item-meta">
					<?php if (metadata('item', 'has_thumbnail')): ?>
						<div class="item-img">			
								<?php 
								$desc = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>200));
								echo  link_to_item(item_image('square_thumbnail'), array('title'=>$desc));?>	
								<?php if (metadata('item', array('Dublin Core','Title')) != "[Untitled]"): ?>
								<p><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title'), array('snippet'=>20))); ?></p>
								<?php endif; ?>
						</div>
					<?php else: ?>
						<div class="browse-item-description">
							<h5><?php echo link_to_item(metadata('item', array('Dublin Core', 'Description'), array('snippet'=>220))); ?></h5>
						</div>
						<p><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title'), array('snippet'=>20))); ?></p>

					<?php endif; ?>
		
                    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' => $item)); ?>

				</div><!-- end class="item-meta" -->
			</div><!-- end class="item hentry" -->	
	<?php endforeach; ?>				
		<div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>
		
		<?php fire_plugin_hook('public_items_browse', array('view' => $this, 'items' => $items)); ?>
			
</div>	<!-- end primary -->
	

<?php echo foot(); ?>

