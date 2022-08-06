<?php
/**
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<?php get_header();?>

<!-- PROJETO -->
<section id="projeto">
	<div class="container">
		<div class="row">
			<div class="col s12 m8">
				<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<!-- PROJETOS -->
<?php if(get_field('mostar_projetos', 10)): ?>

<section id="projetos" class="dark">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="title"><?php _e('Projetos'); ?></h2>
            </div>

            <?php $values = get_field('selecionar_projetos_apresentados', 10); 
            if($values) : foreach($values as $value): ?>

            <div class="col s12 m4">
                <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-familia-lam.png">
                    </div> <!-- card-image -->
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $value->post_title; ?><i
                                class="material-icons right">more_vert</i></span>
                        <p><a href="<?= $value->guid; ?>">Acessar projeto</a></p>
                    </div> <!-- card-content -->
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Projeto Familias<i
                                class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.
                        </p>
                        <p class="card-pix"><i class="material-icons">account_balance</i><span
                                class="content-card-pix">CHAVE
                                PIX: 40.416.297/0001-95</span></p>
                    </div> <!-- card-reveal -->
                </div> <!-- card -->
            </div> <!-- col -->

            <?php endforeach; endif; ?>
        
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- #projetos -->

<?php endif; 

get_footer();