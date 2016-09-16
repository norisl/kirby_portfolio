<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <header class="header cf" role="banner">
    <div class="menu">
      <ul>
      <li><a href="#overlay-about" rel="modal:open">About</a></li>
      <li><a href="<?php echo url() ?>">Nora</li>
      <li><a href="mailto:hello@noragailer.ch"> Hello <3 </a></li>
     </ul>
   </div>
  </header>