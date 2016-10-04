 <div id="overlay-about" style="display:none;">
 <a class="close-modal"><img class="close-cross" src="<?php echo url('assets/images/cross.svg') ?>" alt=""></a>
	<div class="about">
	<?php echo $site->page('about')->text()->kirbytext() ?>
	</div>
	<div class="cv">
	<?php echo $site->page('about')->Education()->kirbytext() ?>
	</div>
	<div class="cv">
	<?php echo $site->page('about')->Experience()->kirbytext() ?>
	</div>
	<div class="cv">
	<?php echo $site->page('about')->Exhibition()->kirbytext() ?>
	</div>

</div>