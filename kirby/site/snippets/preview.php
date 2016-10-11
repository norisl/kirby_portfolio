<!-- <?php $tags = page('projects')->children()->groupBy('tags')?>
<div class="button-group">
  <button id="allButton" class="button" >All</button>
  <?php foreach($tags as $tag => $items) { ?>
    <button class="button filterButton" data-js-filter-by-tags="<?php echo $tag ?>"> 
     <?php echo $tag?>
    </button>
  <?php } ?>
</div> -->

<ul> 

  <?php foreach($projects as $project_name => $project) { ?>

  <?php $items= $pages->visible(); 
   $first = $items->first();?>

    <li class="teaser-project <?php echo $project->tags(); if($items   == $first) "is-checked"?>" >
        <h3>
             <a data-pjax data-slug="<?php echo $project->slug() ?>" class="teaser-project-link" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?>
               </a>
               <h4><?php echo $project->field()->html() ?></h4> 
       </h3>  
     </li>

  <?php } ?>
</ul>



     
