 <div id="overlay-about" style="display:none;">
	<div class="about"></div>
	<?php echo $site->page('about')->text()->kirbytext() ?>
	<div class="cv">
	<?php echo $site->page('about')->Education()->kirbytext() ?>
	</div>
	<div class="cv">
	<?php echo $site->page('about')->Experience()->kirbytext() ?>
	</div>
	<div class="cv">
	<?php echo $site->page('about')->Exhibition()->kirbytext() ?>
	</div>
	<a href="#" rel="modal:close">Close</a> 
</div>