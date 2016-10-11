<!--<a id="info-button" href="#overlay-info" rel="modal:open">Open Modal</a>

 <div id="overlay-info" style="display:none;">
  	<?php echo $project->text()->kirbytext() ?>
	<a href="#" rel="modal:close">Close</a> 
</div>	 -->	


<button class="arrow"><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 92.3 66.7" style="enable-background:new 0 0 92.3 66.7;" xml:space="preserve">

<line class="st0" x1="2.6" y1="33.3" x2="92" y2="33.3"/>
<polyline class="st0" points="34,65.2 2.1,33.3 34.1,1.4 "/>
<image style="overflow:visible;enable-background:new    ;" width="52" height="8" xlink:href="D82DEF0258C0350.png"  transform="matrix(1 0 0 1 0 78.5271)">
</image>
<image style="overflow:visible;enable-background:new    ;" width="53" height="8" xlink:href="D82DEF0258C0351.png"  transform="matrix(1 0 0 1 0 83.5271)">
</image>
</svg>
</button>

<div class="project-image">

	<?php if($project->hasVideos()):?>
		<?php foreach($project->videos() as $video): ?>
			<video class="video" controls>
			  <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>">
			</video>
		<?php endforeach ?>
		<?php echo $project->text()->kirbytext();?>
		<?php foreach($project->images()->sortBy('sort', 'asc') as $image): ?>
			<figure>
				<img src="<?php echo $image->url() ?>" 
				    alt="<?php echo $project->title()->html()?>">
			</figure>
		<?php endforeach ?>
	<?php else :?>

		<img src="<?php echo $project->images()->first()->url() ?>">
		</figure>
		<?php echo $project->text()->kirbytext() ?>
		<?php foreach($project->images()->offset(1)->sortBy('sort', 'asc') as $image): ?>
			<figure>
				<img src="<?php echo $image->url() ?>" 
				    alt="<?php echo $project->title()->html()?>">
			</figure>
		<?php endforeach ?>
		<figure>
	
	<?php endif ?>

</div>
	 
	