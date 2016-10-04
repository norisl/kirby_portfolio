<?php snippet('header') ?> 
<!-- <?php snippet('line') ?> -->
	<main class="main" role="main">
	<?php snippet('menu') ?>
		<div id="container" class="nano">
			<div class="project-overview">
			    <?php snippet('preview') ?>
			</div>
			<div class="project-detail" id="pjax-container">
				<?php snippet('project') ?>
				<button class="arrow"><img  src="<?php echo url('assets/images/arrow.svg')?>"></button>
			</div>
		</div>
	</main>
<?php snippet('modal_about') ?>
<?php snippet('footer') ?> 