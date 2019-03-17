<footer>
  <nav class="nav-footer">
    <ul>
      <li class="current_page_item"><a href="/">Menu</a></li>
      <li><a href="<?php get_site_url(); ?>/sobre">Sobre</a></li>
      <li><a href="<?php get_site_url(); ?>/contato">Contato</a></li>
    </ul>
  </nav>

  <p><?php echo bloginfo('name'); ?> © <?php echo date('Y') ?>. Alguns direitos reservados.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>