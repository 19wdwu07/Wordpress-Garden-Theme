<footer class="bg-dark text-info jumbotron container">
  <div class="container">
  <?php
  wp_nav_menu(
    array(
    'theme_location' => 'footer-menu',
   //  'menu' => 'Top Bar',
    'menu_class' => 'top-bar'
    )
  );
  ?>
</div>

  copyright@2020

</footer>

<?php wp_footer(); ?>
</body>
</html>
