<div class="project-detail">
<!-- 	<?php
		if ($page->isHomePage()) {
			$project = page('projects')->children()->first();
		} else {
			$project = $page;
		}
	?> -->
	
	<div class="project-info">
	  <?php echo $project->text()->kirbytext() ?>
	</div>

	<div class="project-image">
	  <?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?>
	  <figure>
	    <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>">
	  </figure>
	  <?php endforeach ?>
	</div>
</div>