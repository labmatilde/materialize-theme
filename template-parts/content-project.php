<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialize_css
 */
?>

<!-- PROJETOS -->
<section id="projetos" class="dark">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="title"><?php the_sub_field('titulo'); ?></h2>
            </div>


            <?php 
			if (get_sub_field('projetos')):
			$projects = get_sub_field('projetos'); 
            foreach($projects as $key => $value): ?>


            <div class="col s12 m4">
                <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php get_template_directory_uri(); ?>/assets/images/cartaz-familia-lam.png">
                    </div> <!-- card-image -->
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php $value->post_title; ?><i
                                class="material-icons right">more_vert</i></span>
                        <!--<p><a href="<#?= $value->guid; ?>">Acessar projeto</a></p> #Button link-->
                    </div> <!-- card-content -->
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?php $value->post_title; ?><i
                                class="material-icons right">close</i></span>
                        <p> <?= $value->post_excerpt; ?>
                        </p>
                        <p class="card-pix"><i class="material-icons">account_balance</i><span
                                class="content-card-pix"><?php _e('CHAVE PIX: '); ?> <?php the_field('pix_do_projeto', $value->ID); ?></span></p>
                    </div> <!-- card-reveal -->
                </div> <!-- card -->
            </div> <!-- col -->

            <?php endforeach; endif; ?>
        
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- #projetos -->
