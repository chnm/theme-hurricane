<?php head(array('title'=>'Browse Collections','bodyid'=>'collections','bodyclass' => 'browse')); ?>
<div id="heading">
<div class="heading">  <h2> Collections </h2>
</div></div>
<div id="collections">

		<?php while (loop_collections()): ?>
	
	<div class="collection">
            	
	<div class="collection-meta">
		<h2><?php echo link_to_collection(); ?></h2>
            	<div class="element">
            	<div class="element-text"><p><?php echo nls2p(collection('Description', array('snippet'=>230))); ?></p></div>
	            </div>
	            

</div>
<!-- Display Items in Current Collection -->    
<div class="collection-items">
			<?php
			$items = get_items(array('collection'=>get_current_collection()->id, 'featured' => true), 5);
			set_items_for_loop($items);
			while(loop_items()):
			if (item_has_thumbnail()): 
		         echo link_to_collection_for_item(item_square_thumbnail(), array('class' => 'collection-img')); 
			endif; 
			endwhile; ?>
			
<!-- <p class="view-items-link"><?php echo link_to_browse_items('View Items', array('collection' => collection('id'))); ?></p> -->
</div>             	
            <?php echo plugin_append_to_collections_browse_each(); ?>
     	
            </div><!-- end class="collection" -->
		<?php endwhile; ?>
		</div>
		
        <?php echo plugin_append_to_collections_browse(); ?>
        
        <div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>
        
</div><!-- end primary -->
			
<?php foot(); ?>