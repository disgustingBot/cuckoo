

  <footer class="footer" id="footer">
    <!-- NAVIGATION BAR -->
  <?php
    $args = array(
      'theme_location' => 'footer_menu',
      'depth' => 0,
      'container'	=> false,
      'fallback_cb' => false,
      'menu_class' => 'footer_menu',
    );
    wp_nav_menu($args);
  ?>
  </footer>

  <!-- <sign class="signature">
    <p>&#60;&#47;&#62; by <a href="https://lattedev.com/" target="_blank" class="latteLink">Latte</a></p>
  </sign> -->
  <?php wp_footer(); ?>
</body>
</html>
