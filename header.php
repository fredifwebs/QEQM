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
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo2.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    </head>
    <body class="bg-img">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=722134774505635";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <header class="wd-full wrap">
            <figure class="left logo">
                <a href="http://quemequemanda.com.br/">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
                </a>
            </figure>
            <div class="stage" id="container-one">
                <form class="searchform" id="searchform" role="search" method="get" action="http://www.quemequemanda.com.br/">
                    <input type="text" id="search" name="s" value="" placeholder="Pesquisar..." class="sb-search-input">
                    <input type="image" src="<?php bloginfo('template_directory'); ?>/images/search.png" class="sidesubmit">
                </form>
            </div>
            <nav class="social right">
                <ul class="nav-list-inline">
                    <li><button class="social-2"></button></li>
                    <li><button class="social-4"></button></li>
                    <li><button class="social-3"></button></li>
                </ul>
            </nav>
            <nav>
                <ul class="nav-list-block menu right">
                    <?php wp_nav_menu( $args ); ?>
                </ul>
            </nav>
        </header>
        <div class="clear"></div>
        <!-- /.clear -->