<!DOCTYPE html>
<html <?php language_attributes(); ?> class="theme-next use-motion <?php echo strtolower(Scheme::get()); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- Disable Baidu tranformation -->
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link href="//fonts.googleapis.com/css?family=Monda:300,300italic,400,400italic,700,700italic|Roboto Slab:300,300italic,400,400italic,700,700italic|Lobster Two:300,300italic,400,400italic,700,700italic|PT Mono:300,300italic,400,400italic,700,700italic&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
    <link href="__ASSETS__/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Export some HEXO Configurations to Front-End -->
    <script type="text/javascript" id="hexo.configurations">
        var NexT = window.NexT || {};
        var CONFIG = {
            scheme: "<?php echo Scheme::get(); ?>",
            sidebar: {"position":"left","display":"post"},
            fancybox: false,
            motion: true
        };
    </script>

    <?php wp_head(); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage" <?php body_class(); ?>>

<div class="container one-collumn sidebar-position-left">
    <div class="headband"></div>

    <header id="header" class="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-inner">
            <div class="site-meta">
                <div class="custom-logo-site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" rel="start">
                        <span class="logo-line-before"><i></i></span>
                        <span class="site-title"><?php bloginfo('name'); ?></span>
                        <span class="logo-line-after"><i></i></span>
                    </a>
                </div>
                <p class="site-subtitle"><?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) {
                        echo $description;
                    }
                ?></p>
            </div>

            <div class="site-nav-toggle">
                <button>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                    <span class="btn-bar"></span>
                </button>
            </div>

            <nav class="site-nav">
                <?php wp_nav_menu([
                    'theme_location' => 'sidebar',
                    'menu_id' => 'menu',
                    'menu_class' => 'menu',
                    'container' => false,
                    'depth' => 1
                ]); ?>
            </nav>
        </div>
    </header>

    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">