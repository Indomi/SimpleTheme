<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
    <?php get_header(); ?>
</head>
<body class="clearfix">
    <div id="main">
        <div id="container">
            <?php if(have_posts()):?>
                <?php while(have_posts()):
                    the_post();
                    ?>
                    <div class="post">
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        <p class="content"><?php the_content(); ?></p>
                        <p class="postmetadata">
                            <?php _e('类别&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                            <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                        </p>
                        <p><?php the_ID();?></p>
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