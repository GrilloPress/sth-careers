<?php 
/*
 * Partial that on posts injects previous and next bootstrap links
 * 
 */
?>

<nav>
   <ul class="pager">
    <?php previous_post_link( "<li class='previous'>%link</li>", " <span aria-hidden='true'>&larr;</span> Previous", TRUE); ?>
    <?php next_post_link( "<li class='next'>%link</li>", "Next <span aria-hidden='true'>&rarr;</span>", TRUE); ?>
   </ul>
</nav>