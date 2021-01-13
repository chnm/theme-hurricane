<?php echo head(array('title'=>'Browse Collections','bodyid'=>'collections','bodyclass' => 'browse')); ?>
<div id="heading">
<div class="heading">  <h2> Collections </h2>
</div></div>
<div id="collections">

<?php foreach (loop('collections') as $collection): ?>
	
	<div class="collection">
            	
	<div class="collection-meta">
		<h2><?php echo link_to_collection(); ?></h2>
            	<div class="element">
            	<div class="element-text"><p><?php echo nl2br(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>230))); ?></p></div>
	            </div>
	            

</div>
<!-- Display Items in Current Collection -->    
<div class="collection-items">
			<?php
			$items = get_records('Item', array('collection'=>$collection->id, 'featured' => true), 5);
			set_loop_records('items', $items);
			foreach(loop('items') as $item):
			if (metadata('item', 'has_thumbnail')): 
		         echo link_to_collection_for_item(item_image('square_thumbnail', array('class' => 'collection-img'))); 
			endif; 
			endforeach; ?>
			
<!-- <p class="view-items-link"><?php echo link_to_items_browse('View Items', array('collection' => $collection->id)); ?></p> -->
</div>             	
            <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>
     	
            </div><!-- end class="collection" -->
<?php endforeach; ?>
		</div>
		
        <?php fire_plugin_hook('public_collections_browse', array('view' => $this, 'collections' => $collections)); ?>
        
        <div id="pagination-bottom" class="pagination"><?php echo pagination_links(); ?></div>
        
</div><!-- end primary -->
			
<?php echo foot(); ?>
