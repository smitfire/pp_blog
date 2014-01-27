<header class=" navbar navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>       
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"></a>    
    </div>

    <nav class="mynavbar pull-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>

    <div class="clearfix"></div>
<!--       <a href="#" class="facebook" title="Facebook"></a>
      <a href="#" class="twitter" title="Twitter"></a> -->
    
    <div class="headline row-fluid">
      <div class="social-buttons">
        <a href="https://www.facebook.com/pages/PayProp/157585437632855" class="facebook" title="Facebook"></a>
        <a href="https://twitter.com/PayProp" class="twitter" title="Twitter"></a>
        <a href="www.linkedin.com/company/1336845?trk=tyah&trkInfo=tas%3Apayprop%2Cidx%3A1-1-1" class="linkedin" title="LinkedIn"></a>
        <a href="http://www.youtube.com/user/PayProp" class="youtube" title="YouTube"></a>
      </div>
      <h2>News & Updates</h2>
      <h5>
        Where we share our thoughts, undustry news, and new PayProp feautures
      </h5>
    
    </div>
    <hr class="style-two">
  </div>

</header>

