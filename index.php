<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'three-col')); ?>

	<div id="home" class="primary">
			
				<h2>Featured Image</h2>
				<div id="featured-item">
			        <?php
					$item = get_random_featured_items(1, true)[0];
					set_current_record('item', $item);
					echo link_to_item(item_image('fullsize'));
                    echo '<h4>' . metadata('item', array('Dublin Core', 'Title')) . '</h4>';
					?>
			    </div><!--end featured-item-->
				
				
	<!-- closes primary div -->


			
			
				<div id="explanation">
				
						<p>We welcome contributions from survivors, first responders, relief workers, family, friends, and anyone with reflections
							 on the hurricanes and their aftermath</p>
						<a href="<?php echo url('contributionphase'); ?>">Add to the Archive</a>
				
			</div>
		</div> <!-- closes secondary div -->
	
	
		<div id="home" class="secondary">
				<h2>Featured Stories</h2>
		<div class="story">
				<p>&#8220;My family and I evacuated the Sunday before Katrina. We intended on staying and riding out the storm, but when we saw how much strength it had gained during the previous days of tracking it, we had no choice but to pack a couple of days&#8217; worth of clothes and food, and head out on a journey that we never would have expected.&#8221; <a href="http://hurricanearchive.org/items/show/12106">More...</a></p>
				</div>
			<div class="story">	
				<p>&#8220;I evacuated to Baton Rouge for Hurricane Katrina. It was the most horrible experiences of my life. We were living in an apartment with fifteen other people. It was air matresses lined up from door to door. My parents and my...  <a href="http://hurricanearchive.org/items/show/44481">More..</a></p>
				</div>
				</div>	
				<div id="home" class="tertiary">
			<h2>Browse</h2>
			<div class="browse-links">
				<ul>
					<?php echo legacy_nav(array('Images' => url('items?type=6'),'Stories' => url('items?type=1'),'Oral Histories' => url('items?type=4'), 'Video' => url('items?type=3'))); ?>
					</ul>
			 </div>
			<h2>Map</h2>
			<div class="map">
					<a href="<?php echo url('geolocation/map/browse'); ?>"><img src="<?php echo img('map.jpg')?>" alt="Map"/></a>
			</div>
			<h2>Tags</h2>
			<div class="tags">
				<?php
				$tags = get_records('Tag', array('sort_field' => 'count', 'sort_dir' => 'd'), 8); 
				echo tag_string($tags, 'items/browse');
				?>
				</div>
			</div>

<?php echo foot(); ?>
