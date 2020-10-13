<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" /><?php wp_head(); ?>


  <!-- Loading third party fonts -->


</head>

<body <?php body_class("header-collapse"); ?>>
  <?php do_action('after_body_open_tag'); ?>

  <div id="site-content">
    <header class="site-header">
      <div class="container">
        <a href="index.html" id="branding">
          <img src="<?php echo get_template_directory_uri(); ?>/dummy/logo.png" alt="Site Title" />
          <small class="site-description">MUSIC ROCKS</small>
        </a>
        <!-- #branding -->

        <nav class="main-navigation">
          <button type="button" class="toggle-menu">
            <i class="fa fa-bars"></i>
          </button>



          <ul class="menu">
            <li class="menu-item current-menu-item">
              <a href="index.html">Home</a>
            </li>
            <li class="menu-item"><a href="about.html">About</a></li>
            <li class="menu-item"><a href="gallery.html">Gallery</a></li>
            <li class="menu-item"><a href="shop.html">Shop</a></li>
            <li class="menu-item"><a href="blog.html">Blog</a></li>
            <li class="menu-item"><a href="contact.html">Contact</a></li>
          </ul>




          <?php wp_nav_menu(
            array(
              'theme_location' => 'header_menu',
              'container' => 'nav',
              'menu_class' => 'menu',
              'container_class' => 'main-navigation',
            )
          );
          ?>
          <!-- .menu -->
        </nav>
        <!-- .main-navigation -->
        <div class="mobile-menu"></div>
      </div>
    </header>

    <?php is_front_page(); ?>

    <?php is_front_page(); ?>

    <?php echo get_bloginfo("title"); ?>


</body>

</html>