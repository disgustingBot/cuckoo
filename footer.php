

  <footer class="footer" id="footer">
    <p class="footer_text"><a class="footer_link" href="#">Aviso legal</a> | Copyright © 2012 Cucko Fruits</p>

  </footer>

  <!-- <sign class="signature">
    <p>&#60;&#47;&#62; by <a href="https://lattedev.com/" target="_blank" class="latteLink">Latte</a></p>
  </sign> -->
  <?php wp_footer(); ?>

  <script type="text/javascript">
    // new_cookie('cookie_test_120', 'Holy cookie', 1)

  window.addEventListener('GdprCookieConsentOnAccept', function (e) {
    // console.log(e)
    if(e.detail.wpl_viewed_cookie == 'yes') {
      // console.log(e.detail.wpl_user_preference);
    	if(e.detail.wpl_user_preference.marketing == 'yes') {
            // Execute code that sets marketing cookies.
            // new_cookie('GDPR_test_4', 'oh my cookie', 1)
        }
    }
  }, false);
  window.addEventListener('GdprCookieConsentOnLoad', function (e) {
    // console.log(e) // existe
  }, false);
  window.addEventListener('GdprCookieConsentOnReject', function (e) {
    // console.log(e) // va bien
  }, false);
  window.addEventListener('GdprCookieConsentOnOptout', function (e) {
    // console.log(e)
  }, false);
  window.addEventListener('GdprCookieConsentOnCancelOptout', function (e) {
    // console.log(e)
  }, false);

  </script>
</body>
</html>
