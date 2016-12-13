<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
    <header class="post-header">
        <h1 class="post-title" itemprop="name headline">
            <?php if (is_sticky() && is_home()): ?>
                <span class="post-sticky-flag" title="置顶">
                    <i class="fa fa-thumb-tack"></i>
                </span>
            <?php endif; ?>

            <a class="post-title-link" href="<?php the_permalink(); ?>" itemprop="url">
                <?php the_title(); ?>
            </a>
        </h1>

        <div class="post-meta">
            <span class="post-time">
                <span class="post-meta-item-icon">
                    <i class="fa fa-calendar-o"></i>
                </span>
                <span class="post-meta-item-text">发表于 </span>
                <time title="发表于" itemprop="dateCreated datePublished" datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('Y-m-d'); ?>
                </time>
            </span>

            <span class="post-category">
                <span class="post-meta-divider">|</span>
                <span class="post-meta-item-icon">
                    <i class="fa fa-folder-o"></i>
                </span>
                <span class="post-meta-item-text">分类于 </span>
                <?php the_category(", "); ?>
            </span>

            <span class="post-comments-count">
                <span class="post-meta-divider">|</span>
                <span class="post-meta-item-icon">
                    <i class="fa fa-comment-o"></i>
                </span>
                <?php comments_popup_link('没有评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
            </span>

            <?php edit_post_link(null, '<span class="post-comments-count">
                <span class="post-meta-divider">|</span>
                <span class="post-meta-item-icon">
                    <i class="fa fa-edit"></i>
                </span>', '
            </span>'); ?>
        </div>
    </header>

    <div class="post-body" itemprop="articleBody">
        <?php the_content(); ?>
    </div>

    <footer class="post-footer">
        <?php if (is_single()): ?>
            <div class="post-tags">
                <?php
                ob_start(function ($content) {
                    return str_replace('">', '">#', $content);
                });
                the_tags('', '', '');
                ob_end_flush();
                ?>
            </div>

            <div class="post-nav">
                <div class="post-nav-next post-nav-item">
                    <?php echo get_previous_post_link('%link', '<i class="fa fa-chevron-left"></i> %title'); ?>
                </div>
                <div class="post-nav-prev post-nav-item">
                    <?php echo get_next_post_link('%link', '%title <i class="fa fa-chevron-right"></i>'); ?>
                </div>
            </div>
        <?php elseif (!is_page()):
            global $wp_query;
            if (($wp_query->current_post + 1) != $wp_query->post_count) {
                echo '<div class="post-eof"></div>';
            }
        endif; ?>
    </footer>
</article>
