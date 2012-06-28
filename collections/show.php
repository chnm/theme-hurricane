<?php head(array('title' => html_escape($collection->name),'bodyid'=>'collections','bodyclass' => 'show')); ?>
<div id="heading">
<div class="heading">  <h2> <?php echo html_escape($collection->name); ?> </h2>
	 </div></div>
<div id="primary" >
    
	<div class="collection">
	<div class="collection-show">
	
	            	<div class="element">

        <h3>Description</h3>
        <div class="element-text"><p><?php echo nls2p(collection('Description')); ?></p></div>
    </div><!-- end collection-description -->
    
    <?php if(collection('Collectors')!=null) { ?>
    <div id="collectors" class="element">
        <h3>Collector(s)</h3> 
        <div class="element">
            <p><?php echo collection('Collectors', array('delimiter'=>'</li><li>')); ?></p>
	</div>
	<?php } ?>

              <div class="collection-link">
	            	<p> View items in:<?php echo link_to_browse_items( collection('Name'), array('collection' => collection('id'))); ?></p>      	
	            </div></div><!-- end class="collection" -->
			    
    <?php echo plugin_append_to_collections_show(); ?>
</div>
<!-- end primary -->
</div>
</div>
<?php foot(); ?>