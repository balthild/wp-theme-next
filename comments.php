<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()): ?>
        <h2 class="comments-title">
            <?php echo get_comments_number(); ?> 条评论
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'avatar_size' => 100,
                'style' => 'ol',
                'short_ping' => true,
                'reply_text' => '<i class="fa fa-reply"></i> 回复',
            ]);
            ?>
        </ol>

        <?php
        ob_start(function ($content) {
            return str_replace(
                ["page-numbers dots", "page-numbers", "comments-pagination"],
                ["space", "page-number", "comments-pagination pagination"],
                $content
            );
        });
        the_comments_pagination([
            'mid_size' => 1,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
            'before_page_number' => '',
            'after_page_number' => '',
        ]);
        ob_end_flush();

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
        <p class="no-comments">评论已关闭</p>
    <?php endif;

    comment_form();

    if (comments_open() && get_option('thread_comments')) {
        wp_enqueue_script("comment-reply");
    }
    ?>

</div><!-- #comments -->
