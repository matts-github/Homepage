<?php
/**
 * The template for displaying all pages.
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

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>


<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
<style>
/* Home page styles */
.entry-content.clear {
    background: #1e293b; 
}


.home .wp-block-buttons>.wp-block-button {
    margin-bottom: 10px;
    margin-top: -27px;
    margin-left: 31px;
}

.wp-block-button.aligncenter.get-in-touch {
    margin-top: 7px;
    margin-bottom: 31px;
}

.ast-container, .ast-container-fluid {
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
}

.entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
}

.wp-block-contact-form-7-contact-form-selector {
    color: #fff;
}

.wpcf7 textarea {
    width: 90%;
    padding: 0.75em;
    margin-left: auto;
    margin-right: auto;
    display: flex;
}

.wpcf7 input:not([type=submit]), .wpcf7 select, .wpcf7 textarea {
    width: 90%;
    padding: 0.75em;
    margin-left: auto;
    margin-right: auto;
    display: flex;
}

label {
    margin-left: 5%;
}


@media screen and (min-width: 1200px) {
    
    /* .thing {
    display: flex;
    flex-direction: row;
}

.writing {
    width: 50%;
    flex-direction: row;
}

figure.wp-block-image.size-large {
    position: relative;
    top: -510px;
    display: flex;
    margin-right: -13px;
}

img.wp-image-30 {
    position: absolute;
    right: -461px;
    width: 368px;
    top: -63px;
}

.wp-block-buttons:not(.is-content-justification-space-between,.is-content-justification-right,.is-content-justification-left,.is-content-justification-center) .wp-block-button.aligncenter {
    margin-right: -316px;
}
*/
} 
</style>

<?php get_footer(); ?>
