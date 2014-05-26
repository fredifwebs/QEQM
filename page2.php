<?php
/*
Template Name: Quem é que manda
*/
?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-BR">
    <head>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php wp_title(''); ?></title>
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Quem é que manda"/>
        <meta property="og:url" content="http://www.quemequemanda.com.br/">
        <meta property="og:title" content="<?php wp_title(''); ?>">
        <meta property="og:description" content="">
        <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/logo2.png">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body class="bg-img">
        <section class="wrap">
            <div class="welcome">
                <div class="w-esq">
                    <a href="http://quemequemanda.com.br/category/dela/">
                    <img src="<?php bloginfo('template_directory'); ?>/images/female.png" alt="" />
                    </a>
                </div>
                <!-- /.w-esq -->
                <div class="w-dir">
                    <a href="http://quemequemanda.com.br/category/dele/">
                    <img src="<?php bloginfo('template_directory'); ?>/images/male.png" alt="" />
                    </a>
                </div>
                <!-- /.w-dir -->
            </div>
            <!-- /.welcome -->
            <div class="clear"></div>
            <!-- /.clear -->
            <section class="wrap">
                <span class="dela">DELA?</span>
                <span class="dele">DELE?</span>
            </section>
            <!-- /.wrap -->
        </section>
        <script>
        jQuery(document).ready(function($) {
            $('.w-esq').mouseover(function() {
                $('.dela').fadeIn();
            });
            $('.w-esq').mouseout(function() {
                $('.dela').fadeOut();
            });
            $('.w-dir').mouseover(function() {
                $('.dele').fadeIn();
            });
            $('.w-dir').mouseout(function() {
                $('.dele').fadeOut();
            });
        });
        </script>
    </body>
</html>