


<a id="info-button" href="#overlay-info" rel="modal:open">Open Modal</a>

<div id="overlay-info" style="display:none;">
  	<?php echo $project->text()->kirbytext() ?>
	<a href="#" rel="modal:close">Close</a> 
</div>
 

<div class="project-image">
  <?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?>
  <figure>
    <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>">
  </figure>
  <?php endforeach ?>
</div>
