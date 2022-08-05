<?php
/**
* Template Name: Home Lam
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<?php get_header(); ?>

<!-- SOBRE -->
<?php if(get_field('mostrar_sobre')): ?>
    
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <?php if( get_field('titulo') ): ?>
                    <h1 class="title"><?php the_field('titulo'); ?></h1>
                <?php endif; ?>
                <?php if( get_field('descricao') ): ?>
                    <?php the_field('descricao'); ?>
                <?php endif; ?>
            </div>
            <div class="col s12 m4">
                <?php if( get_field('foto_apresentacao') ): ?>
                    <img class="responsive-img" src="<?php the_field('foto_apresentacao'); ?>" alt="" />
                <?php endif; ?>
            </div>
            <div class="col s12 m8">

                <?php if( get_field('titulo_desc') ): ?>
                    <h4 class="title"><?php the_field('titulo_desc'); ?></h4>
                <?php endif; ?>
                <?php if( get_field('descricao_da_foto') ): ?>
                    <?php the_field('descricao_da_foto'); ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Missão'); ?></span>
                        <p><?php the_field('card_missao'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Visão'); ?></span>
                        <p><?php the_field('card_visao'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Valores'); ?></span>
                        <p><?php the_field('card_valores'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- #sobre -->

<?php endif; ?>


<!-- PROJETOS -->
<?php if(get_field('mostar_projetos')): ?>

<section id="projetos" class="dark">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="title"><?php _e('Projetos'); ?></h2>
            </div>


            <?php $values = get_field('selecionar_projetos_apresentados'); 
            if($values) : foreach($values as $value): ?>


            <div class="col s12 m4">
                <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-familia-lam.png">
                    </div> <!-- card-image -->
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $value->post_title; ?><i
                                class="material-icons right">more_vert</i></span>
                        <!--<p><a href="<#?= $value->guid; ?>">Acessar projeto</a></p>-->
                    </div> <!-- card-content -->
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?= $value->post_title; ?><i
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

<?php endif; ?>


<!-- VOLUNTARIOS -->
<?php if(get_field('motrar_voluntarios')): ?>

<section id="voluntario" class="no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <?php if( get_field('foto_destaque') ): ?>
                    <img class="responsive-img banner-no-title" src="<?php the_field('foto_destaque'); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col s12 m6">
                <h3 class="title"><?php _e('Seja um Voluntario'); ?></h3>
                <?php if( get_field('pagina_do_formulario') ): ?>
                    <a class="waves-effect waves-light btn-large" href="<?php the_field('pagina_do_formulario'); ?>" target="_blank" rel="noopener noreferrer">
                    <i class="material-icons left">card_membership</i><?php _e('Acessar
                    Formulário'); ?></a>
                <?php endif; ?>
                <?php if( get_field('descricao_secao_de_voluntarios') ): ?>
                    <?php the_field('descricao_secao_de_voluntarios'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php if(get_field('mostrar_bazar')): ?>

<!-- BAZAR -->
<section id="bazar" class="dark no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <?php if( get_field('titulo_da_bazar') ): ?>
                <h3 class="title"><?php the_field('titulo_da_bazar'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('descricao_para_bazar') ): ?>
                   <div class="white-text"><?php the_field('descricao_para_bazar'); ?></div>
                <?php endif; ?>
            </div>
            <div class="col s12 m6">
                <?php if( get_field('imagem_para_bazar') ): ?>
                <img class="responsive-img banner-no-title" src="<?php the_field('imagem_para_bazar'); ?>"
                    alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php if(get_field('mostrar_projeto_destaque')): ?>

<!-- EMPREGANDO -->
<section id="empregando">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="title">Empregrando</h3>
                <p>Olá Empresas divulgue aqui suas vagas de emprego</p>
                <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Acessar
                    Formulário</a>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php if(get_field('mostrar_eventos')): ?>

<!-- EVENTOS -->
<section id="eventos">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <?php if( get_field('titulo_eventos') ): ?>
                <h3 class="title"><?php the_field('titulo_eventos'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('descricao_de_eventos') ): ?>
                <?php the_field('descricao_de_eventos'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer();