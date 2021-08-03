<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Jon</strong> Blog</a></h1>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/about-us') ?>">About Me</a></li>
                <li><a href="<?php echo get_post_type_archive_link('program') ?>">Projects</a></li>
                <li><a href="<?php echo get_post_type_archive_link('videos') ?>">Videos</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Learn</h3>
            <nav class="nav-list">
              <ul>
                <!-- <li><a href="#">Legal</a></li> -->
                <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                <!-- <li><a href="#">Careers</a></li> -->
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Connect With Me</h3>
          <nav>
            <ul class="min-list social-icons-list group">
            <li><a href="https://jjhna.github.io/" class="social-color-github"><i class="fa fa-github-alt" style="color: #000" aria-hidden="true"></i></a></li>
              <li><a href="https://github.com/jjhna" class="social-color-github"><i class="fa fa-github" style="color: #000" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jonna404/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>