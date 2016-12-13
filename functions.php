<?php

require_once __DIR__ . "/inc/Scheme.php";

add_filter("init", function () {
    ob_start(function ($content) {
        return str_replace('__ASSETS__', get_template_directory_uri() . "/src/source", $content);
    });
});

add_filter("the_content_more_link", function () {
    return '<div class="post-more-link text-center"><a class="btn" href="' . get_permalink() . '">阅读全文</a></div>';
});

add_filter('wp_nav_menu_objects', function ($items ) {
    foreach ( $items as $item ) {
        if ($item->current) {
            $item->classes[] = 'menu-item-active';
            return $items;
        }
    }
    return $items;
});

function pisces_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus([
        'sidebar' => "侧边栏菜单",
    ]);

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', [
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', [
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ]);
}
add_action('after_setup_theme', 'pisces_setup');
