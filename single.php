<?php
get_header();

?>

<div id="wrapper">
<main>
<!-- if we have posts...
show me the post!!!
If not...
we do not have posts! -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post() ; ?>
<article class="posts">
<h1> <?php the_title() ;?></h1>
<div class="meta">
<span><b>Posted By:</b> <?php the_author() ;?></span>
<span><b>Posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
</div>
</article>
<!-- +++end meta div +++ -->
<?php the_content() ; ?>
<?php endwhile; ?>

<?php else : ?>
    <?php echo
'<h2>Search Results:</h2>
<p>Sorry, but nothing matched your search terms. <br>
Would you like to search again with different keywords?</p>';
?>
<?php get_search_form(); ?>
<?php endif; ?>

<?php comments_template(); ?>
</main>


<aside>
This is my SINGLE page
</aside>



</div>
<!-- ++++ end wrapper +++++ -->
<?php
get_footer();

?>
