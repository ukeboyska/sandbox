<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Sandbox
 */
get_header(); ?>

<h1>Home</h1>

<hr />

<?php include(get_template_directory().'/loops/loop.php'); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>