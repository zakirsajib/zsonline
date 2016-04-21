<!-- FOOTER START -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-scroll">
                        <a href="#page-top"><i class="icon-Arrow-Up"></i></a>
                    </div>
                    <!-- //.page-scroll -->

                    <ul class="list-inline social-icons">
                        <li>
                            <div class="item">
                                <a href="<?php echo get_theme_mod('url_field_git')?>" target="_blank"><i class="fa fa-github"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>

                        <li>
                            <div class="item">
                                <a href="<?php echo get_theme_mod('url_field_fb')?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>

                        <li>
                            <div class="item">
                                <a href="<?php echo get_theme_mod('url_field_linkedin')?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>

                        <li>
                            <div class="item">
                                <a href="<?php echo get_theme_mod('url_field_twt')?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                            <!-- //.item -->
                        </li>
                    </ul>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p class="text-grey">&copy; <?php _e(date('Y')); ?> <?php bloginfo('name'); ?>. <?php echo get_theme_mod('copyright_text', 'No copyright information has been saved yet.')?></p>
                    </div>
                    <!-- //.copyright -->
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </footer>
    <!-- //FOOTER END -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39208489-2', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer();?>
</body>
</html>
