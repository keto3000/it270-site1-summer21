<?php
get_header();

/* Template Name: Front Page */

?>

<div id="wrapper">

<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<h1> <?php the_title() ;?></h1>
<?php the_content() ; ?>
<?php endwhile; ?>
<?php else : ?>
<?php echo wp_autop('Sorry, no posts were found!'); ?>
<?php endif; ?>

<p>Here is my content</p>





</div>
<!-- ++++ end wrapper +++++ -->
<?php
get_footer();

?>
