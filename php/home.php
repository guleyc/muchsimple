<section id="content">
<?php foreach ($pages as $page): ?>
  <ul class="posts_listing">
	
      <li>
        <h2><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h2>
        <div id="date">
          <time class="published" datetime="2016-12-01"><?php echo $page->date() ?></time>
        </div>
      </li>
	  
  </ul>
  <?php endforeach; ?>
</section>
<ul class="pagination">
<?php
	if( Paginator::get('showPrev') ) {
		echo '<li><a href="'.Paginator::prevPageUrl().'" class="previous" title="previous-page">'.$Language->get('Previous').'</a></li>';
	}

	if( Paginator::get('showNext') ) {
		echo '<li><a href="'.Paginator::nextPageUrl().'" class="next" title="next-page">'.$Language->get('Next').'</a></li>';
	}
?>
</ul>