<!-- <?php $tags = page('projects')->children()->groupBy('tags')?>
<div class="button-group">
  <button id="allButton" class="button" >All</button>
  <?php foreach($tags as $tag => $items) { ?>
    <button class="button filterButton" data-js-filter-by-tags="<?php echo $tag ?>"> 
     <?php echo $tag?>
    </button>
  <?php } ?>
</div> -->


<!-- reload js button 
<button class="fuerdichknopf">RELOAD</button>
 -->

 
<ul class="teaser">
  <?php foreach($projects as $project_name => $project) { ?>
   
    <li class="teaser-project <?php e($project->isOpen(),' is-checked') ?> <?php echo $project->tags(); ?>"  >
        
        <h3>
             <a data-pjax data-slug="<?php echo $project->slug() ?>" class="teaser-project-link" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
        <h4><?php echo $project->field()->html() ?></h4>
       </h3>
        
     </li>

  <?php } ?>
</ul>



     
