<div id="sidebar">
    <div id="search" class="block">
        <?php include(TEMPLATEPATH.'/searchform.php');?>
    </div>
    <div id="categories" class="block">
        <h2 class="block-title">类别</h2>
        <ul>
            <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0');?>
        </ul>
    </div>
    <div id="pages" class="block">
        <ul>
            <?php wp_list_pages('title_li=<h2 class="block-title">页面</h2>');?>
        </ul>
    </div>
    <div id="archives" class="block">
        <h2 class="block-title">时间</h2>
        <ul>
            <?php wp_get_archives('type=monthly');?>
        </ul>
    </div>
    <?php if(get_links_list()):?>
    <div id="link" class="block">
        <ul>
            <?php get_links_list();?>
        </ul>
    </div>
    <?php endif; ?>
</div>