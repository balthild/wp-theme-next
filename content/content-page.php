<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
    <header class="post-header">
        <h1 class="post-title" itemprop="name headline">
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
</article>
