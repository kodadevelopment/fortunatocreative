<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fortunato Creative - Creative Design Studio</title>
<?php wp_head(); ?>
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <?php the_custom_logo(); ?>
      <nav class="navigation" role="navigation">
        <?php 
        wp_nav_menu(array('theme_location' => 'primary','container' => '','menu_class' => 'primary-nav'));
        ?>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
  
  <!-- banner text -->
  
    <!--<div class="col-md-10 col-md-offset-1">-->
      
      <div class="w3-display-middle" style="min-width:500px">

  <img class="mySlides w3-animate-fading" src="/wp-content/uploads/2024/03/3d.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="/wp-content/uploads/2024/03/pd.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="/wp-content/uploads/2024/03/wd.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="/wp-content/uploads/2024/03/CC_image.png" style="width:100%">
</div>

        <!-- banner text --> 
      
    </div>
  </div>
  
</section>
<!-- header section --> 
<!-- description text section -->
<section id="aboutus" class="section descripton">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center"> 
    <?php
            if (is_active_sidebar('about-me')) {
                dynamic_sidebar('about-me');
            }
        ?>
    </div>
    <div class="col-md-10 col-md-offset-1 space">
    <?php
            if (is_active_sidebar('about-me2')) {
                dynamic_sidebar('about-me2');
            }
        ?>
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- portfolio section -->
<section id="ourwork" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">

      <?php
        $args = array(
            'posts_per_page' => 12,
            'category__in' => array(3,4,5,7,8),
        );
        $work = new WP_Query( $args );

        if( $work->have_posts()):
         while($work->have_posts()):
            $work->the_post();
            ?>
<div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php the_post_thumbnail_url(); ?>" class="work-box"> <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php the_title(); ?></h5>
            <p><?php foreach ( (get_the_category() ) as $category) { echo $category->cat_name; }?></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>

        <?php
            endwhile;
            wp_reset_postdata();
            else: "<p>THere are no posts to display....</p>";

            endif;
      ?>
      
    </div>
  </div>
</section>
<!-- portfolio section --> 
<!-- services section -->
<section id="services" class="current">
    <div class="services-top">
    <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-md-12">
                <?php
            if (is_active_sidebar('hire-us')) {
                dynamic_sidebar('hire-us');
            }
        ?>
                </div>
            </div>
    <div class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3>Graphic Design</h3>
      <p>From logos and branding to print materials and digital assets, our graphic design services are tailored to make your brand stand out.</p>
    </div>
    <div class="col-sm-4">
      <h3>Package Design</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>3D Product Visualizations</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Creative Coding</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    </div>
    <div class="col-sm-4">
      <h3>Frontend Web Development</h3>        
      <p>Our frontend developers specialize in crafting beautiful, intuitive user interfaces that engage and delight users.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
    <div class="col-sm-4">
      <h3>Backend Web Development</h3>        
      <p>Our backend developers are experts in building scalable, secure, and efficient server-side applications.</p>
    </div>
  </div>
</div>
    </div>
</section>
<!-- hire me section --> 


<div class="conForm">
<section id="contact" class="section contact">
  <div class="container">
    <div class="text-center">
    <?php
            if (is_active_sidebar('contact')) {
                dynamic_sidebar('contact');
            }
        ?>
    </div>
  </div>
  </div>
</section>


<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
        </ul>
        </p>
        <p>
          Made by Fortunato Design</a><br>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<?php wp_footer(); ?>
</body>
</html>