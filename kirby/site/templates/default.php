<?php snippet('header') ?> 
	<main class="main" role="main">
		<div class="header">
			<?php snippet('menu') ?>
		</div>
			<div class="container" >
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