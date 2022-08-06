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
		<div class="col m1 l1"></div>
		<div class="col s12 m8 l8">

			<?php 
			$page_id = get_the_ID();
			if( have_rows('sobre', 'option') ):
				while( have_rows('sobre', 'option') ) : the_row(); 
					if (get_sub_field('habilitar')): 
						$page_data = get_sub_field('pagina');
						foreach( $page_data as $value):
							if ($value->ID == $page_id) :
								print_r(get_sub_field('titulo'));
								print_r(get_sub_field('descricao'));
								$image = get_sub_field('imagem'); ?>
								<pre>
								<?php print_r($image['sizes']['large']);
								foreach ($image as $key => $value):
									print_r($value['sizes']['large']);
								endforeach; 
								
								?> </pre><?php
								print_r(get_sub_field('sub_titulo')); 
								print_r(get_sub_field('sub_descricao')); 
								$cards = get_sub_field('cards');
								foreach ($cards as $key => $value):
									print_r($value['titulo']);
									print_r($value['descricao']);
								endforeach;
							endif; 
						endforeach;
					endif; 
				endwhile; 
			endif; ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div class="col m1 l1"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
