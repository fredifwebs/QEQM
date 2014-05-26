<?php get_header(); ?>
        <section class="wrap al-wrap">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="pst-wrap bg-color">
            <div class="head-post">
                <time><p class="dia"><?php the_time('d') ?></p><p class="mes"><?php the_time('M') ?></p></time>
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                <div class="clear"></div>
                <!-- /.clear -->
            </div>
            <!-- /.head-post -->
            <hr class="hr-post" />
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
            </article>
            <!-- /.pst-wrap -->
            <?php endwhile?>
            <!-- AQUI VAI A NAVEGAÇÃO DA PAGINA-->
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