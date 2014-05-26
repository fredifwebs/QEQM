<?php get_header(); ?>
<section class="wrap al-wrap">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    $author =  get_the_author_ID();
    if ($author=="2") {
    $back = 'style="background-color:#48a4fb"';
    $color ='style="color:#48a4fb"';
    } else {
    $back = 'style="background-color:#d014cd"';
    $color ='style="color:#d014cd"';
    }
    ?>
    <article class="pst-wrap bg-color">
    <div class="head-post" <?php echo $back ?>>
        <time><p class="dia"><?php the_time('d') ?></p><p class="mes"><?php the_time('M') ?></p></time>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <div class="clear"></div>
        <!-- /.clear -->
    </div>
    <!-- /.head-post -->
    <hr class="hr-post" <?php echo $back ?>/>
    <div class="pst-details">
        <p>Publicado por:<span data-idAuthor="<?php the_author_ID(); ?>"><?php the_author() ?></span></p><p>Em:<span><a href=""><?php the_category(', '); ?></a></span></p><p>17<span> Comentários</span></p>
        <div class="clear"></div>
        <!-- /.clear -->
    </div>
    <!-- /.pst-details -->
    <div class="clear"></div>
    <!-- /.clear -->
    <div class="pst-box">
        <?php the_content(); ?>
    </div>
    <!-- /.pst-box -->
    <div class="compartilhe"><span <?php echo $color ?>>Gostou? Compartilhe!</span></div>
    <div class="share">
        <ul>
            <li class="plus">
                <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                <div class="g-plusone" data-size="medium"></div>
                <!-- Posicione esta tag depois da última tag do botão +1. -->
                <script type="text/javascript">
                window.___gcfg = {lang: 'pt-BR'};
                (function() {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
                })();
                </script>
            </li>
            <li> <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-via="ocorujadpressao" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="horizontal">Tweet</a>
                <script>!function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
                }
                }(document, "script", "twitter-wjs");</script>
            </li>
            <li class="fb">
                <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="position:relative;top:-8px;"></div>
            </li>
            <li class="fb">
                <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-width="100" data-type="button_count" style="position:relative;top:-8px;"></div>
            </li>
        </ul>
    </div>
    <br>
    </article>
    <!-- /.pst-wrap -->
    <?php endwhile?>
    <div class="navegacao">
            <?php wp_pagenavi(); ?>
        </div>
    <?php else: ?>
    <?php endif; ?>
    <aside class="sid-wrap">
        <?php get_sidebar(); ?>
    </aside>
    <!-- /.sid-wrap -->
    <div class="clear"></div>
    <!-- /.clear -->
</section>
<?php get_footer(); ?>