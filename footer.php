  </main>
</div> <!-- closing page-wrapper -->
  <footer class="site-footer" id='footer'>
   <p>Philip Gleissner copyright &copy; <?php echo date('Y') ?></p>
  </footer>
  <?php wp_footer(); ?>
    <script type="text/javascript">
    WebFontConfig = {google: { families: [ 'Arimo:400,700:latin','Baumans::latin' ] }};
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
        document.getElementById('main-content').classList.toggle('inactive');
        document.getElementById('footer').classList.toggle('inactive');
      }, false);
    </script>
    </body>
</html>