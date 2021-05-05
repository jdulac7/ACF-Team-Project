<?php
/**
 * Template Name: FullWidth
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


get_header(); ?>

<h1><?php the_title(); ?></h1>

<form class="controls" id="Filters">	  
	<div class="search_container">
	<fieldset>
	    <h4>Search by Department</h4>
<p>test add</p>

	    <select>
		  <option value="">Select</option>
		  <option value="all">All</option>
			<option value=".accounting">Accounting</option>
			<option value=".customerservice">Customer Service</option>
			<option value=".hr">Human Resources</option>
			<option value=".management">Management</option>
			<option value=".reception">Reception</option>
			<option value=".sales">Sales</option>
			<option value=".supplierrelations">Supplier Relations</option>
			<option value=".temp">Temp</option>
			<option value=".qualityassurance">"Quality Assurance"</option>
	    </select>
	  </fieldset>
	  <fieldset>
	    <h4>Search by Location</h4>
	    <select>
		  <option value="">Select</option>
		  <option value="all">All</option>
		  <option value=".newyork">New York</option>
		  <option value=".scranton">Scranton</option>
		<option value=".stamford">Stamford</option>

	    </select>
	  </fieldset>
	</div>
	<div class="button-container"><button id="Reset" class="ui-button">Clear Filters</button></div>
	</form>
<hr />

<?php
$team_relationship = get_field('team_relationship');
if( $team_relationship ): ?>
<div class="mix-holder">
	  <div id="Container" class="container flex-container">
	<?php foreach( $team_relationship as $post ): 
	
		// Set Location && Specialty Fields
		$location = get_field('location', $p->ID);
		$specialty = get_field('specialty', $p->ID);

        // Setup this post for WP functions (variable must be named $post).
		setup_postdata($post); ?>

		<!-- Add Location Fields & Specialty Fields as classnames-->
		<div class="all team-member mix <?php foreach( $location as $j) : ?><?php echo strtolower(str_replace(' ', '', get_the_title($j->ID))); ?> <?php endforeach; ?> <?php foreach( $specialty as $d) : ?><?php echo strtolower(str_replace(' ', '', get_the_title($d->ID))); ?> <?php endforeach; ?>">
			<img src="<?php get_site_url();?><?php the_field('bio_picture', $post->ID); ?>" />
			<a href="<?php the_permalink(); ?>"class="ui-button"><?php the_title(); ?></a>
		</div>
    <?php endforeach; ?>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
