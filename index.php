<?php get_header(); ?>

<div id="content" class="content">
    <?php if (have_posts()) : ?>
        <section id="posts" class="posts-expand">
            <?php
            /* Start the Loop */
            while (have_posts()) {
                the_post();
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content/content', get_post_format());
            }

            ob_start(function ($content) {
                return str_replace(["page-numbers dots", "page-numbers"], ["space", "page-number"], $content);
            });
            the_posts_pagination([
                'prev_text' => '<i class="fa fa-angle-left"></i>',
                'next_text' => '<i class="fa fa-angle-right"></i>',
                'before_page_number' => '',
                'after_page_number' => '',
            ]);
            ob_end_flush();
            ?>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
