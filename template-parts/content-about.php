<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialize_css
 */
?>

<!-- SOBRE -->
<section id="sobre">
	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<?php if( get_sub_field('titulo') ): ?>
					<h1 class="title"><?php the_sub_field('titulo'); ?></h1>
				<?php endif; ?>
				<?php if( get_sub_field('descricao') ): ?>
					<?php the_sub_field('descricao'); ?>
				<?php endif; ?>
			</div>
			<div class="col s12 m4">
				<?php if( get_sub_field('imagem') ): $image = get_sub_field('imagem'); ?>
					<img class="responsive-img" src="<?php _e($image['sizes']['large']) ?>" alt="<?php _e($image['name']); ?>" />
				<?php endif; ?>
			</div>
			<div class="col s12 m8">

				<?php if( get_sub_field('sub_titulo') ): ?>
					<h4 class="title"><?php the_sub_field('sub_titulo'); ?></h4>
				<?php endif; ?>
				<?php if( get_sub_field('sub_descricao') ): ?>
					<?php the_sub_field('sub_descricao'); ?>
				<?php endif; ?>

			</div>
		</div>

		<?php if (get_sub_field('cards')): $cards = get_sub_field('cards'); ?>
		<div class="row">
			<?php foreach ($cards as $key => $value): ?>
			<div class="col s12 m4">
				<div class="card lam-color-dark">
					<div class="card-content white-text">
						<span class="card-title"><?php _e($value['titulo']); ?></span>
						<p><?php _e($value['descricao']); ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>

	</div>
</section> <!-- #sobre -->
