<section id="content">
	<?php Theme::plugins('pageBegin') ?>
  <h1><?php echo $Page->title() ?></h1>

  <div id="sub-header">
    <time class="published" datetime="2016-12-01"><?php echo $page->date() ?></time>
  </div>

  <div class="entry-content">
	<p><?php echo $Page->content() ?></p>
  </div>

  <div id="links">
	<?php Theme::plugins('pageEnd') ?>    
  </div>
</section>
