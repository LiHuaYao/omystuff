<!--Start Footer Bg-->
<div class="footer-content">
    <div class="footer_wrap">
        <!--Start Container-->
        <div class="container_24">
            <!--Start Footer wrapper-->
            <div class="grid_24 footer_wrapper">
                <!--Start Footer-->
                <div class="footer">
                    <!--Start Footer widget-->
                    <?php
                    /* A sidebar in the footer? Yep. You can can customize
                     * your footer with four columns of widgets.
                     */
                    get_sidebar('footer');
                    ?>
                    <!--End Footer Widget-->
                </div>
                <!--End Footer-->
            </div>
            <div class="clear"></div>
            <!--End Footer wrapper-->
        </div>
        <div class="clear"></div>
        <!--End Container-->
        <div class="footer-glow"></div>
    </div>
</div>
</div>
<div class="footer-space"></div>
<div class="footer_title">
    <a class="description" href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo('name'); ?> -
        <?php bloginfo('description'); ?>
    </a>
    <p class="back_link"><a href="<?php echo esc_url('https://www.inkthemes.com/market/wordpress-charity-theme/'); ?>" rel="nofollow">Cloriato Theme</a> powered by <a href="<?php echo esc_url('http://www.wordpress.org'); ?>">WordPress</a></p>
</div>
<?php wp_footer(); ?>
</body></html>