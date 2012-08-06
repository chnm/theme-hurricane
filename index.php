<?php head(array('bodyid'=>'home', 'bodyclass' =>'three-col')); ?>

	<div id="home" class="primary">
			
				<h2>Featured Image</h2>
				<div id="featured-item">
			        <?php

					$item = random_featured_item(true);
					set_current_item($item);
					echo link_to_item(item_fullsize());
		
				
					  echo '<h4>'.item('Dublin Core', 'Title').'</h4>';
			
				

					?>
			    </div><!--end featured-item-->
				
				
	<!-- closes primary div -->


			
			
				<div id="explanation">
				
						<p>We welcome contributions form survivors, first responders, relief workers, family, friends, and anyone with reflections
							 on the hurricanes and their aftermath</p>
						<a href="<?php echo uri('contribute'); ?>">Add to the Archive</a>
				
			</div>
		</div> <!-- closes secondary div -->
	
	
		<div id="home" class="secondary">
				<h2>Featured Stories</h2>
		<div class="story">
				<p>&#8220;My family and I evacuated the Sunday before Katrina. We intended on staying and riding out the storm, but when we saw how much strength it had gained during the previous days of tracking it, we had no choice but to pack a couple of days&#8217; worth of clothes and food, and head out on a journey that we never would have expected.&#8221; <a href="http://hurricanearchive.org/items/show/12106">More...</a></p>
				</div>
			<div class="story">	
				<p>&#8220;I evacuated to Baton Rouge for Hurricane Katrina. It was the most horrible experiences of my life. We were living in an apartment with fifteen other people. It was air matresses lined up from door to door. My parents and my...  <a href="http://hurricanearchive.org/items/show/12106">More..</a></p>
				</div>
				</div>	
				<div id="home" class="tertiary">
			<h2>Browse</h2>
			<div class="browse-links">
				<ul>
					<?php echo public_nav(array('Images' => uri('items?type=6'),'Stories' => uri('items?type=1'),'Oral Histories' => uri('items?type=4'), 'Video' => uri('items?type=3'))); ?>
					</ul>
			 </div>
			<h2>Map</h2>
			<div class="map">
					<a href="<?php echo uri('geolocation/map/browse'); ?>"><img src="<?php echo img('map.jpg')?>" alt="Map"/></a>
			</div>
			<h2>Tags</h2>
			<div class="tags">
				<?php
				$tags = get_tags(array('sort' => 'most'), 8); 
				echo tag_string($tags,uri('items/browse'));
				?>
				</div>
			</div>

<?php foot(); ?>
