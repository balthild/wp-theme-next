            </div>

            <div class="sidebar-toggle">
                <div class="sidebar-toggle-line-wrap">
                    <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
                </div>
            </div>

            <aside id="sidebar" class="sidebar">
                <div class="sidebar-inner">
                    <section class="site-overview sidebar-panel  sidebar-panel-active ">
                        <div class="site-author motion-element">
                            <img class="site-author-image" src="" alt="#name">
                            <p class="site-author-name" >#name</p>
                            <p class="site-description motion-element" >#desc</p>
                        </div>

                        <nav class="site-state motion-element">
                            <div class="site-state-item site-state-posts">
                                <span class="site-state-item-count">183</span>
                                <span class="site-state-item-name">日志</span>
                            </div>
                            <div class="site-state-item site-state-categories">
                                <span class="site-state-item-count">6</span>
                                <span class="site-state-item-name">分类</span>
                            </div>
                            <div class="site-state-item site-state-tags">
                                <span class="site-state-item-count">111</span>
                                <span class="site-state-item-name">标签</span>
                            </div>
                        </nav>

                        <div class="feed-link motion-element">
                            <a href="javascript:;" rel="alternate">
                                <i class="fa fa-rss"></i> RSS
                            </a>
                        </div>

                        <div class="links-of-author motion-element">
                            <span class="links-of-author-item">
                                <a href="https://github.com/iissnan" target="_blank" title="GitHub">
                                    <i class="fa fa-fw fa-github"></i> GitHub
                                </a>
                            </span>
                            <span class="links-of-author-item">
                                <a href="https://twitter.com/iissnan" target="_blank" title="Twitter">
                                    <i class="fa fa-fw fa-twitter"></i> Twitter
                                </a>
                            </span>
                        </div>
                    </section>
                </div>

                <?php get_sidebar(); ?>
            </aside>
        </div>
    </main>

    <footer id="footer" class="footer">
        <div class="footer-inner">
            <div class="copyright">
                <!-- copyright.rotate(π) == copyleft -->
                <i class="fa fa-copyright fa-rotate-180"></i>
                <span itemprop="copyrightYear"><?php echo date("Y"); ?></span>
                <span class="with-love"><?php bloginfo('name'); ?></span>
            </div>

            <div class="powered-by">
                Proudly powered by <a class="theme-link" href="http://cn.wordpress.org">WordPress</a>
            </div>

            <div class="theme-info">
                A
                <a class="theme-link" href="https://github.com/balthild/wp-theme-next">fork</a>
                of
                <a class="theme-link" href="https://github.com/iissnan/hexo-theme-next">NexT.Pisces</a>
            </div>
        </div>
    </footer>

    <div class="back-to-top">
        <i class="fa fa-arrow-up"></i>
    </div>
</div>

<script type="text/javascript" src="__ASSETS__/lib/jquery/index.js?v=2.1.3"></script>
<script type="text/javascript" src="__ASSETS__/lib/fastclick/lib/fastclick.min.js?v=1.0.6"></script>
<script type="text/javascript" src="__ASSETS__/lib/jquery_lazyload/jquery.lazyload.js?v=1.9.7"></script>
<script type="text/javascript" src="__ASSETS__/lib/velocity/velocity.min.js?v=1.2.1"></script>
<script type="text/javascript" src="__ASSETS__/lib/velocity/velocity.ui.min.js?v=1.2.1"></script>
<script type="text/javascript" src="__ASSETS__/js/src/utils.js?v=5.1.0"></script>
<script type="text/javascript" src="__ASSETS__/js/src/motion.js?v=5.1.0"></script>
<script type="text/javascript" src="__ASSETS__/js/src/affix.js?v=5.1.0"></script>
<script type="text/javascript" src="__ASSETS__/js/src/schemes/pisces.js?v=5.1.0"></script>
<script type="text/javascript" src="__ASSETS__/js/src/bootstrap.js?v=5.1.0"></script>

<?php wp_footer(); ?>

</body>
</html>
