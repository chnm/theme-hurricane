<?php head(array('title' => item('Dublin Core', 'Title'), 'bodyclass' => 'item')); ?>
  
   <?php 
   	if(!preg_match("/Untitled/",item('Dublin Core','Title'))){
		echo "<h1>".item('Dublin Core','Title')."</h1>";
	}
   ?>

<div id="show">
	<?php if (item_has_thumbnail()): ?>
	 	<class="element">
	    	<div class="element-text">
		<div id="main-image">
		<?php $files = $item->Files;
	              $firstFile = $files[0];
		      if ($firstFile){  
		         echo display_file($firstFile, $options = array('imageSize' => 'fullsize'));
                      }
		?>
</div>
	



<?php endif; ?>
	<!--  The following function prints all the the metadata associated with an item: Dublin Core, extra element sets, etc. See http://omeka.org/codex or the examples on items/browse for information on how to print only select metadata fields. -->
	<div id="metadata">
		<?php if (item_belongs_to_collection()): ?>
			<h2>Collection</h2>
		    <div><?php echo link_to_collection_for_item(); ?></div>
		<?php endif; ?>   	
                <?php echo "<p>".item('Dublin Core','Description')."</p>";
		  echo "<p>".item(null,'Text')."</p>"; ?>
	<!-- If the item belongs to a collection, the following creates a link to that collection. -->

		<!-- The following prints a list of all tags associated with the item -->
		<?php if(count($item->Tags)): ?>
		<div class="tags" class="element">
			
	<div class="element-text">		<h4>Keywords:</h4>
		   <?php echo item_tags_as_string(); ?></div>	

</div>
		<?php endif;?>
	<!-- The following returns all of the files associated with an item. -->	
<?php if (item_has_files()): ?>
	<?php if (item_has_thumbnail()): ?>
		<?php $files = $item->Files;
			$secondFile = $files[1];
			if ($secondFile) { 
	         ?> 
		    <div class="files" class="element">
		    <div class="element-text"> 
		    <h4>Files:</h4> 
		    <?php echo display_file($secondFile, $options = array('imageSize' => 'thumbnail'));
		}
	?>		
	<?php $files = $item->Files;
              $thirdFile = $files[2];
	      if ($thirdFile)
	      { 
	        echo display_file($thirdFile, $options = array('imageSize' => 'thumbnail'));
              }
	?>
	<?php $files = $item->Files;
	$fourthFile = $files[3];
	if ($fourthFile)
	{ echo 
		display_file($fourthFile, $options = array('imageSize' => 'thumbnail'));
	}
	?>
		</div>
	<?php else: ?>	
	<div class="files" class="element">
		<div class="element-text">		<h4>Files:</h4>			
<?php echo display_files_for_item(); ?></div>
</div>

		<?php endif; ?>
		<?php endif; ?>

<div id="item-citation" class="element">
     <h3><?php echo __('Citation'); ?></h3>
     <div class="element-text"><?php echo item_citation(); ?></div>
</div> <br />
<?php echo plugin_append_to_items_show(); ?>
	
	
</div>
	<div id="pagination-bottom" class="pagination">

	<?php if (link_to_previous_item()):?>		
	<li id="previous-item" class="previous">
			<?php echo link_to_previous_item('Previous Item'); ?>
	</li>
	<?php endif; ?>
	<?php if (link_to_next_item()):?>	
	<li id="next-item" class="next">
		<?php echo link_to_next_item('Next Item'); ?>
	</li>
	<?php endif; ?>

</div><!-- end primary -->
</div>
<?php foot(); ?>
