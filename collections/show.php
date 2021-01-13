<?php echo head(array('title' => html_escape($collection->name),'bodyid'=>'collections','bodyclass' => 'show')); ?>
<div id="heading">
<div class="heading">  <h2> <?php echo html_escape($collection->name); ?> </h2>
	 </div></div>
<div id="primary" >
    
	<div class="collection">
	<div class="collection-show">
	
	            	<div class="element">

        <h3>Description</h3>
        <div class="element-text"><p><?php echo nl2br(metadata('collection', array('Dublin Core', 'Description'))); ?></p></div>
    </div><!-- end collection-description -->
    
    <?php if(metadata('collection', array('Dublin Core', 'Contributor'))) { ?>
    <div id="collectors" class="element">
        <h3>Collector(s)</h3> 
        <div class="element">
            <p><ul><li><?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('delimiter'=>'</li><li>')); ?></li></ul></p>
	</div>
	<?php } ?>

              <div class="collection-link">
    <?php if(metadata('collection', 'total_items')): ?> 
			<p><?php echo link_to_items_browse('View this collection',array('collection' => $collection->id)); ?></p>
			<?php endif;?>
	            </div></div><!-- end class="collection" -->
			    
    <?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>
</div>
<!-- end primary -->
</div>
</div>
<?php echo foot(); ?>
