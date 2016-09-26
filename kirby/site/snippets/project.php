<!--<a id="info-button" href="#overlay-info" rel="modal:open">Open Modal</a>

 <div id="overlay-info" style="display:none;">
  	<?php echo $project->text()->kirbytext() ?>
	<a href="#" rel="modal:close">Close</a> 
</div>	 -->	




<div class="project-image">
<?php if($project->content()->has('video')):?>
	<?php foreach($project->read('video') as $video):?>
	 <?php echo vimeo('$project')?>
	<?php endforeach ?>	
<?php endif ?>

	<?php echo $project->text()->kirbytext() ?>
	 
	<?php foreach($project->images()->offset(1)->sortBy('sort', 'asc') as $image): ?>
		<figure>
			<img src="<?php echo $image->url() ?>" 
			    alt="<?php echo $project->title()->html()?>">
		</figure>
	<?php endforeach ?>
</div>