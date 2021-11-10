<html>
<head>
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet" />
</head>

<body>

<div id="container">
	<?php get_header(); ?>
  
  <div id="menu">
    <?php
  wp_nav_menu (
    array(
      'theme_location' => 'hoofdmenu',
      'menu_id' => 'menu'
    )
  )
  ?>
	</div>
  
  <div id="content_wrapper">
    
    <div id="content">
      <div class="area">
          <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_title('<h1>', '</h1>');
              the_content();
            }
          }
          ?>
      </div>
    </div>
    
    <div id="sidebar">
      <?php dynamic_sidebar('mijn-sidebar-widgets'); ?>
    </div>
    
    <div class="break"></div>
    
  </div>
  
  
</div>

<?php get_footer(); ?>

</body>
</html>
