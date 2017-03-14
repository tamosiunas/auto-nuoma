<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap-pirkti-auto">
      <div class="container" role="document">
        <h1>Automobiliai pardavimui</h1>
        <div class="content row">
          <main class="main">
            <?php if(is_front_page() ) { ?>

            <div class="pirkti-auto">
              <?php $pirktiauto = new WP_Query(array('post_type'=>'pirkti_auto')); ?>
              <?php while($pirktiauto->have_posts()) : $pirktiauto->the_post(); ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pirkti-auto-tmumbnail">
                  <?php the_post_thumbnail() ?>
                  <div class="pirkti-auto-permalink">
                    <a href="#" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>"><?php the_title(); ?></a>
                  </div>
                  <div class="auto-price">
                    <p><?php the_field('auto_kaina'); ?></p>
                  </div>
                  
                </div>
              </div>

                <div id="myModal-<?php the_ID(); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Bootstrap Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                            <p><?php the_title(); ?></p>
                            <?php the_content(); ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    </div>
                </div>
              <?php endwhile; ?> 
            </div>
          <?php } ?>
          </main>
        </div><!-- /.content -->
      </div><!-- /.conteiner -->
    </div><!-- /.wrap-pirkti-auto -->
  
    <div class="wrap-nuomuotis-auto">
      <div class="container" role="document">
        <h1>Automobiliai nuomai</h1>
        <div class="content">
          <main class="main">
            <?php if(is_front_page() ) { ?>
            <?php  ?>
            <div class="nuomuotis-auto">
              <?php $nuomauto = new WP_Query(array('post_type'=>'nuomuotis_auto')); ?>
              <?php while($nuomauto->have_posts()) : $nuomauto->the_post(); ?>
              <div class="nuomuotis-auto-single row">
                
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="nuomuotis-auto-thumbnail">
                    <?php the_post_thumbnail() ?>
                    <a href="#myModal-<?php the_ID(); ?>" class="btn btn-md btn-sunglow" data-toggle="modal">Daugiau..</a>
                  </div> 
                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="nuomuotis-auto-permalink">
                    <p><?php the_title(); ?></p>
                  </div>
                  <div class="auto-price">
                    <p><?php the_field('nuomos_kaina'); ?></p>
                  </div>
                  <div class="pirkti-auto-content">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>

              <div id="myModal-<?php the_ID(); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <!-- Bootstrap Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p><?php the_title(); ?></p>
                          <?php the_content(); ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
              </div>
              
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </div>
          <?php  ?>
          <?php } ?>
          <?php include ('templates/single-'.get_post_type().'.php');   ?> <!-- use single.php template -->
          <?php /*include Wrapper\template_path();*/ ?>
          </main>
          <?php /*if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside>/.sidebar
          <?php endif;*/ ?>
        </div><!-- /.content -->
      </div><!-- /.conteiner -->
    </div><!-- /.wrap-nuomuotis-auto -->
  <?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
  ?>
  </body>
</html>
