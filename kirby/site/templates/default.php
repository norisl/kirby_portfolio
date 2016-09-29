<?php snippet('header') ?> 
<!-- <?php snippet('line') ?> -->
	<main class="main" role="main">
	<?php snippet('menu') ?>
		<div id="about" class="nano">
			<div class="project-overview">
			    <?php snippet('preview') ?>
			</div>
			<div class="project-detail" id="pjax-container">
				<?php snippet('project') ?>
			</div>
		</div>
	</main>
<?php snippet('modal_about') ?>
<?php snippet('footer') ?> 