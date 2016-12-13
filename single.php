<?php get_header(); ?>

<div id="content" class="content">
    <?php if (have_posts()) : ?>
        <section id="posts" class="posts-expand">
            <?php
            /* Start the Loop */
            while (have_posts()) {
                the_post();

                get_template_part('content/content', get_post_format());

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            }
            ?>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
