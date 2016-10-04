<!--<a id="info-button" href="#overlay-info" rel="modal:open">Open Modal</a>

 <div id="overlay-info" style="display:none;">
  	<?php echo $project->text()->kirbytext() ?>
	<a href="#" rel="modal:close">Close</a> 
</div>	 -->	




<div class="project-image">

<?php if($project->content()->has('videourl')):?>
		<?php $video_url = $project->videourl();
		echo $video_url->kirbytext();
		echo $project->text()->kirbytext();?>

<?php else :?>
	<figure>
	<?php $image = $project->images()?>
	<img src="<php echo $image->url()?>">
	</figure>
	<?php echo $project->text()->kirbytext() ?>
<?php endif ?>	
	 
	<?php foreach($project->images()->offset(1)->sortBy('sort', 'asc') as $image): ?>
		<figure>
			<img src="<?php echo $image->url() ?>" 
			    alt="<?php echo $project->title()->html()?>">
		</figure>
	<?php endforeach ?>
</div>