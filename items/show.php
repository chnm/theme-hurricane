<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass' => 'item')); ?>
  
   <?php 
   	if(!preg_match("/Untitled/",metadata('item', array('Dublin Core','Title')))){
		echo "<h1>".metadata('item', array('Dublin Core','Title'))."</h1>";
	}
   ?>

<div id="show">
	<?php if (metadata('item', 'has_thumbnail')): ?>
	 	<class="element">
	    	<div class="element-text">
		<div id="main-image">
		<?php $files = $item->Files;
	              $firstFile = $files[0];
		      if ($firstFile){  
		         echo file_markup($firstFile, $options = array('imageSize' => 'fullsize'));
                      }
		?>
</div>
	



<?php endif; ?>
	<!--  The following function prints all the the metadata associated with an item: Dublin Core, extra element sets, etc. See http://omeka.org/codex or the examples on items/browse for information on how to print only select metadata fields. -->
	<div id="metadata">
		<?php if (metadata('item', 'collection_name')): ?>
			<h2>Collection</h2>
		    <div><?php echo link_to_collection_for_item(); ?></div>
		<?php endif; ?>   	
        <?php echo "<p>".metadata('item', array('Dublin Core','Description'))."</p>";
		      echo "<p>".metadata('item', array('Item Type Metadata', 'Text'))."</p>"; ?>
	<!-- If the item belongs to a collection, the following creates a link to that collection. -->

		<!-- The following prints a list of all tags associated with the item -->
		<?php if(count($item->Tags)): ?>
		<div class="tags" class="element">
			
	<div class="element-text">		<h4>Keywords:</h4>
		   <?php echo tag_string('item'); ?></div>	

</div>
		<?php endif;?>
	<!-- The following returns all of the files associated with an item. -->	
<?php $files = $item->Files; ?>
<?php if ($files): ?>
    <?php if (metadata('item', 'has_thumbnail')): ?>
        <?php if (count($files) > 1): ?>
		<div class="files" class="element">
		    <div class="element-text"> 
            <h4>Files:</h4>
            <?php
            array_shift($files);
            foreach ($files as $file):
                echo file_markup($file, $options = array('imageSize' => 'thumbnail'));
            endforeach;
	        ?>
            </div>
        </div>
        <?php endif; ?>
	<?php else: ?>	
	<div class="files" class="element">
        <div class="element-text">
            <h4>Files:</h4>			
            <?php echo files_for_item(); ?>
        </div>
    </div>

	<?php endif; ?>
<?php endif; ?>

<div id="item-citation" class="element">
     <h3><?php echo __('Citation'); ?></h3>
     <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div> <br />
<?php echo fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
	
	
</div>
	<div id="pagination-bottom" class="pagination">

	<?php if (link_to_previous_item_show()):?>		
	<li id="previous-item" class="previous">
			<?php echo link_to_previous_item_show('Previous Item'); ?>
	</li>
	<?php endif; ?>
	<?php if (link_to_next_item_show()):?>	
	<li id="next-item" class="next">
		<?php echo link_to_next_item_show('Next Item'); ?>
	</li>
	<?php endif; ?>

</div><!-- end primary -->
</div>
<?php echo foot(); ?>
