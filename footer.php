  </main>
</div> <!-- closing page-wrapper -->
  <footer class="site-footer" id='footer'>
   <p>You can also find me here:</p>
  <ul>
    <li>
     <a target="_blank" href="https://twitter.com/philgleissner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter logo">
    </a>
    </li>
    <li>
      <a target="_blank" href="https://github.com/philgleissner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/github.png" alt="github logo">
      </a>
    </li>
    <li>
      <a target="_blank" href="https://www.linkedin.com/pub/philip-gleissner/88/4b0/417">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="linkedin logo">
    </a></li>
  </ul>
  </footer>
  <?php wp_footer(); ?>
    <script type="text/javascript">
    WebFontConfig = {google: { families: [ 'Arimo:400,700:latin'] }};
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
    <script type='text/javascript'>
      var mobileNav = document.getElementById('nav');
      var hamburger = document.getElementById('hamburger');
      document.getElementById('nav-click').addEventListener('click', function(ev) {
        ev.preventDefault();
        mobileNav.classList.toggle('expand');
      }, false);
    </script>
    </body>
</html>
