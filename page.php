<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialize_css
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="col s12 m12 l12">
			<?php
			$page_id = get_the_ID();
			while ( have_posts() ) : the_post();

				if (get_the_content()):
					get_template_part( 'template-parts/content', 'page' );
				endif;
				if( have_rows('sobre', 'option') ):
					while( have_rows('sobre', 'option') ) : the_row(); 
						if (get_sub_field('habilitar')): 
							$page_data = get_sub_field('pagina');
							foreach( $page_data as $value):
								if ($value->ID == $page_id):
									get_template_part( 'template-parts/content', 'about' );
								endif;
							endforeach;
						endif;
					endwhile;
				endif;

				if( have_rows('projetos', 'option') ):
					while( have_rows('projetos', 'option') ) : the_row(); 
						if (get_sub_field('habilitar')): 
							$page_data = get_sub_field('pagina');
							foreach( $page_data as $value):
								if ($value->ID == $page_id):
									get_template_part( 'template-parts/content', 'project' );
								endif;
							endforeach;
						endif;
					endwhile;
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
