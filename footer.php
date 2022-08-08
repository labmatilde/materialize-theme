<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package materialize_css
 */

?>

</div><!-- #content -->


<?php if( have_rows('secao_como_doar', 'option') ):
    while( have_rows('secao_como_doar', 'option') ) : the_row(); 
        if (get_sub_field('ativar_secao_doar')): ?>

<!-- DOE -->
<section id="doe" class="dark no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <img class="responsive-img banner-no-title" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-como-doar.png" alt="">
            </div>
            <div class="col s12 m6">
                <h4 class="title"><?php the_sub_field('titulo_da_secao_doar'); ?></h4>
                <div class="white-text"><?php the_sub_field('descricao_da_secao_doar'); ?></div>
                <?php if (get_sub_field('links_de_doacao')): 
                    $values = get_sub_field('links_de_doacao'); 
                        if($values) : foreach($values as $value): ?>
                <p><a class="waves-effect waves-light btn" href="<?= $value['link_do_botao']; ?>" target="_blank" rel="noopener noreferrer">
                <i class="material-icons left">attach_money</i><?= $value['titulo_botao']; ?></a></p>
                <?php endforeach; endif; endif; ?>
            </div>
        </div>
    </div>
</section>

    <?php endif; endwhile; endif; ?>

<?php if( have_rows('secao_contato', 'option') ):
    while( have_rows('secao_contato', 'option') ) : the_row(); 
        if (get_sub_field('ativar_secao_contato')): ?>

<!-- CONTATO -->
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="title"><?php the_sub_field('titulo_da_secao_contato'); ?></h3>
                <div><?= do_shortcode(get_sub_field('formulario_da_secao_contato')); ?></div>
            </div>
        </div>
    </div>
</section>


<?php endif; endwhile; endif; ?>



<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Endereços</h5>
                <p class="grey-text text-lighten-4">SEDE:
                    Rua do Amerício, 358 - Itaquera, São Paulo - SP, 08240-300</p>
                <p class="grey-text text-lighten-4">BAZAR:
                    Rua Rainha-da-Noite, 168 - Vila Verde, São Paulo - SP, 08235-000</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links importantes</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Brechó Matilde</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Rifas</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Agenda</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Doe</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>


<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i>Nossos Eventos</a></li>
        <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i>Faça uma Doação</a></li>
        <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i>Seja Voluntario</a></li>
        <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i>Fale conosco</a></li>
    </ul>
</div>




<footer id="footer" class="page-footer" role="contentinfo">
<div class="container">
  <div class="row">
    <div class="col l6 s12">
      <?php if ( dynamic_sidebar('footerleft_widgets') ) : else : endif; ?>
    </div>
    <div class="col l4 offset-l2 s12">
        <?php if ( dynamic_sidebar('footerright_widgets') ) : else : endif; ?>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div class="container">
    <p class="center">© 2017 Copyright - Produzido por <a class="grey-text text-lighten-4" target="_blank" href="https://www.worpdres.com">Worpress</a>. Criado por <a class="grey-text text-lighten-4" target="_blank" href="https://www.github.com/yurisbv">yurisbv</a>.
    <p>
  </div>
</div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
