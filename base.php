<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <style> 

  </style>
  <body <?php body_class( 'garamond fw3 f4' ); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <a href="/">
    <div class="fl w-100-ns tl mb4 center dt v-mid pt5" style="background-color: #000">
          <div class="dib tc w-100 pa2">
            <div class="w-100 fl tc v-mid near-white dtc pt4">
              <h1 class="tracked f-headline-ns gold">KnowTheZodiac</h1>
              <h2 class="tracked f2 pa3 near-white">Know the Zodiac, know yourself.</h1>
              
            </div>

          </div>
        </div>
    </a>    
    <div class="pa3 ph4-l" role="document">
      <div class="content mw9 cf mt5">

        <main class="w-100-m w-100-ns pl0 pr0 fl">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="w-100-m w-100-ns fr pa2"">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
