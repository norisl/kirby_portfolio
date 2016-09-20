<!-- <?php $tags = page('projects')->children()->groupBy('tags')?>
<div class="button-group">
  <button id="allButton" class="button" >All</button>
  <?php foreach($tags as $tag => $items) { ?>
    <button class="button filterButton" data-js-filter-by-tags="<?php echo $tag ?>"> 
     <?php echo $tag?>
    </button>
  <?php } ?>
</div> -->


<button class="fuerdichknopf">RELOAD</button>

<ul class="teaser">
  <?php foreach($projects as $project_name => $project) { ?>
   
    <li class="teaser-project<?php e($project->isOpen(),'-is-checked') ?> <?php echo $project->tags(); ?>" >
        
        <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
        <h4><a href="<?php echo $project->url() ?>"><?php echo $project->field()->html() ?></a></h4>
         <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
            <a  href="<?php echo $project->url() ?>">
              <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
            </a>
        <?php endif ?>
        </li>

  <?php } ?>
</ul>



     
