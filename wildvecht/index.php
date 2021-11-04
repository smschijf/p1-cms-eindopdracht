<html>
<head>
<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet" />
</head>

<body>

<div id="container">
	<?php get_header(); ?>
  
  <div id="menu">
  	<!-- <ul>
    	<li id="menu_1"><a href="index.html">Welkom</a></li>
      <li id="menu_2"><a href="landgoed.html">Landgoed & Omgeving</a></li>
      <li id="menu_3"><a href="faciliteiten.html">Faciliteiten</a></li>
      <li id="menu_4"><a href="reserveren.html">Reserveringen & Tarieven</a></li>
      <li id="menu_5"><a href="contact.html">Contact</a></li>
    </ul> -->
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
