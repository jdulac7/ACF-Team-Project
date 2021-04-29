<?php
/**
 * The template for displaying the doctor pillar page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage glacial
 * @since 1.0
 * @version 1.0
 * Template Name: Doctor Pillar Page
 */
get_header(); ?>
    <div id="Down" class="section secondary-content-section">
      <div class="container w-container">
        <div class="top-wrapper-margin lasik-margin">
          <div class="top-wrapper secondary-top-wraper" data-ix="new-interaction-2">
            <div>
              <h1 class="top-title"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
        <div class="blog-columns" data-ix="new-interaction">
          <div class="div-block-7">
            <div class="features-wrapper secondarrry">
			<form class="controls" id="Filters">
	  <!-- We can add an unlimited number of "filter groups" using the following format: -->
	  
	<div class="search-field-div">
	  <fieldset>
	    <h2>Search by <br />Location</h2><br />
	    <select>
		  <option value="">Select</option>
	      <option value=".all">All</option>
		  <option value=".andover">Andover, MA</option>
				<option value=".brookline">Brookline, MA</option>
				<option value=".milford">Milford, MA</option>
				<option value=".lawrence">Lawrence, MA</option>
	      <option value=".wellesley">Wellesley, MA</option>
	      <option value=".medford">Medford, MA</option>

	    </select>
	  </fieldset>

	  <fieldset>
	    <h2>Search by Specialty</h2><br />

	    <select>
	      <option value="">Select</option>
	      <option value=".lasik-surgery">LASIK</option>
	      <option value=".medical-eye">Medical Eye Conditions</option>
	    </select>
	  </fieldset>
	</div>

	  <button id="Reset" class="dr-clear-btn">Clear Filters</button>
	</form>
	<div class="mix-holder">
	  <div id="Container" class="container">
	  
	    <div class="mix all brookline wellesley milford andover lasik-surgery medical-eye">
		<img data-src="<?php bloginfo("stylesheet_directory"); ?>/images/dr-melki.jpg" alt="Samir Melki, MD, PHD" class="lazyload">
		<a href="<?php echo get_page_link(59); ?>" class="ui-button" title="Click Here to Learn More About Samir Melki, MD, PHD">Samir Melki, MD, PHD, Founder</a>
		</div>
		
	    <div class="mix all brookline wellesley milford medford lasik-surgery medical-eye">
		<img data-src="<?php bloginfo("stylesheet_directory"); ?>/images/dr-brenner.jpg" alt="Jason Brenner, MD" class="lazyload">
		<a href="<?php echo get_page_link(67); ?>" class="ui-button" title="Click Here to Learn More About Jason Brenner, MD">Jason Brenner, MD</a>
		</div>

		<div class="mix all brookline medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/FINKELSTEIN.jpg" alt="Macie Finkelstein MD" class="lazyload">
		<a href="<?php echo get_page_link(877); ?>" class="ui-button" title="Click Here to Learn More About Macie Finkelstein MD">Macie Finkelstein, MD</a>
		</div>

		
		<div class="mix all lawrence medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/Kellan.jpg" alt="Robert Kellan, MD" class="lazyload">
		<a href="<?php echo get_page_link(884); ?>" class="ui-button" title="Click Here to Learn More About Robert Kellan, MD">Robert Kellan, MD</a>
		</div>
		
		<div class="mix all lawrence brookline medford wellesley medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/Lee.jpg" alt="John Lee, MD" class="lazyload">
		<a href="<?php echo get_page_link(887); ?>" class="ui-button" title="Click Here to Learn More About John Lee, MD">John Lee, MD</a>
		</div>
		
		<div class="mix all brookline lawrence wellesley milford medical-eye">
		<img data-src="<?php bloginfo("stylesheet_directory"); ?>/images/mehdi.jpg" alt="Mehdi Najafi MD PhD" class="lazyload">
		<a href="<?php echo get_page_link(999); ?>" class="ui-button" title="Click Here to Learn More About Mehdi Najafi MD PhD">Mehdi Najafi, MD, PhD</a>
		</div>

		<div class="mix all andover lawrence medical-eye">
		<img data-src="<?php bloginfo("stylesheet_directory"); ?>/images/alex-martin.jpg" alt="Alexander Martin, OD" class="lazyload">
		<a href="<?php echo get_page_link(1294); ?>" class="ui-button" title="Click Here to Learn More About Alexander Martin, OD">Alexander Martin, OD</a>
		</div>

		<div class="mix all andover brookline wellesley medford lasik-surgery medical-eye">
		<img data-src="<?php bloginfo("stylesheet_directory"); ?>/images/dr-nangle.jpg" alt="Emily Nangle, OD" class="lazyload">
		<a href="<?php echo get_page_link(73); ?>" class="ui-button" title="Click Here to Learn More About Emily Nangle, OD">Emily Nangle, OD</a>
		</div>
		
		<div class="mix all milford medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/Patel.jpg" alt="Nirali Patel, OD" class="lazyload">
		<a href="<?php echo get_page_link(891); ?>" class="ui-button" title="Click Here to Learn More About Nirali Patel, OD">Nirali Patel, OD</a>
		</div>

		<div class="mix all milford medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/Sutula.jpg" alt="Frank Sutula, MD" class="lazyload">
		<a href="<?php echo get_page_link(894); ?>" class="ui-button" title="Click Here to Learn More About Frank Sutula, MD">Frank Sutula, MD</a>
		</div>
		
	    <div class="mix all wellesley lasik-surgery medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/dr-vikomir.jpg" alt="Viktoriya Vilkomir, OD" class="lazyload">
		<a href="<?php echo get_page_link(73); ?>" class="ui-button" title="Click Here to Learn More About Viktoriya Vilkomir, OD">Viktoriya Vilkomir, OD</a>
		</div>

		<div class="mix all brookline medical-eye">
		<img data-src="https://www.bostonlaser.com/wp-content/uploads/Yao.jpg" alt="Vivian Yao, OD" class="lazyload">
		<a href="<?php echo get_page_link(1068); ?>" class="ui-button" title="Click Here to Learn More About Vivian Yao, OD">Vivian Yao, OD</a>
		</div>
		
	  </div>
	</div>
				
            </div>
           
		  </div>
        </div>

		</div>
    </div>
<?php get_footer(); ?>