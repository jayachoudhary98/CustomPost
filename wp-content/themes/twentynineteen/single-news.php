<?php
get_header();
while (have_posts()) : the_post();
   get_template_part('template-parts/content/content', get_post_format());
endwhile; // End of the loop.
get_footer();