<div class="bg-info">
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    the_content();
  endwhile;
 else:
endif;

?>
</div>
