<?php //Template Name: Home?>
<?php get_header(); ?>

<!--Content-->
<div class="menu-main">
	<div class="content-menu">
	 <?php // Start the loop ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
	</div>
</div>
<!--end of content-->



<?php get_footer(); ?>