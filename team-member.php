<?php
/**
 * Template Name: Team Member
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="entry">

<?php 
// Set Location && Specialty Fields
		$location = get_field('location', $p->ID);
		$specialty = get_field('specialty', $p->ID); ?>
	
<div class="wrapper">
	<div class="container_left">
		<img src="<?php the_field('bio_picture'); ?>" />
		<div class="filter_container">
		<h3>Location</h3>
			<ul>
			<?php foreach( $location as $j) : ?>
				<li><?php echo (get_the_title($j->ID)); ?> </li>
				<?php endforeach; ?>
			</ul>
			<h3>Department</h3>
			<ul>
				<?php foreach( $specialty as $d) : ?>
					<li><?php echo (get_the_title($d->ID)); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="container_right">
		<div class="quote_container">
			<blockquote class="quote"><?php the_field('quote'); ?>
				<footer><?php the_title(); ?></footer>
			</blockquote>
		</div>
		<p class="bio"><?php the_field('bio'); ?></p>
	</div>
</div>	
</div>

<?php get_footer(); ?>
