<?php head(array('title'=>'Browse Items','bodyid'=>'items','bodyclass' => 'browse')); ?>
<!-- end content-->
<div id="items-heading">
	<div class="heading">  <h2> Items (<?php echo total_results(); ?> total) </h2>
		<ul class="navigation">
			<?php echo public_nav(array('All Items' => uri('items/browse'), 'Images' => uri('items?type=6'),'Stories' => uri('items?type=1'),'Oral Histories' => uri('items?type=4'), 'Video' => uri('items?type=3'), 'Map' => uri('items/map'), 'By Tag' => uri('items/tags'))); ?>
		</ul> 
	</div>
</div>

<div id="items-primary">	
	
	<?php while (loop_items()): ?>

			<div class="item hentry">
				
				<div class="item-meta">
					<?php if (item_has_thumbnail()): ?>
						<div class="item-img">			
								<?php 
								$desc = item('Dublin Core', 'Description', array('snippet'=>200));
								echo  link_to_item(item_square_thumbnail(array('title'=>$desc)));?>	
								<?php if (item('Dublin Core','Title')!="[Untitled]"): ?>
								<p><?php echo link_to_item(item('Dublin Core', 'Title', array('snippet'=>20))); ?></p>
								<?php endif; ?>
						</div>
					<?php else: ?>
						<div class="browse-item-description">
							<h5><?php echo link_to_item(item('Dublin Core', 'Description', array('snippet'=>220))); ?></h5>
						</div>
						<p><?php echo link_to_item(item('Dublin Core', 'Title', array('snippet'=>20))); ?></p>

					<?php endif; ?>
		
		
<?php echo plugin_append_to_items_browse_each(); ?>					

				</div><!-- end class="item-meta" -->
			</div><!-- end class="item hentry" -->	
	<?php endwhile; ?>				
		<div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>
		
		<?php echo plugin_append_to_items_browse(); ?>
			
</div>	<!-- end primary -->
	

<?php foot(); ?>

