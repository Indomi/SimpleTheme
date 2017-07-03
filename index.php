<?php get_header(); ?>
    <div id="main">
        <div id="container">
            <?php if(have_posts()):?>
                <?php while(have_posts()):
                    the_post();
                    ?>
                    <div class="post">
                        <h2 id="the-title" class="center-to-head"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        <span id="category" class="label"><?php the_category(', ') ?></span>
                        <div class="the-content">
                            <?php the_content(); ?>
                        </div>
                        <p class="postmetadata">
                            <a href="<?php the_permalink();?>">
                                <span class="glyphicon glyphicon-time"> </span>
                                <?php the_time('Y-m-d');?>
                            </a>
                            &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-comment"></span>
                            <?php comments_popup_link('No Comments', '1 Comment ', '% Comments'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                        </p>
                    </div>
                <?php endwhile;?>
                <div class="navigation">
                    <?php posts_nav_link();?>
                </div>
            <?php else : ?>
                <div class="post">
                    <h2><?php _e('Not Found'); ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <?php get_sidebar();?>
    </div>
    <?php get_footer();?>
</body>
</html>