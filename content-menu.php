<!-- NAVBAR
    ================================================== -->
    
  <div class="navbar-wrapper">

    <nav class="navbar navbar-fixed-top" role="navigation"> 

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>               
             
      </div>
        	   
            <?php
              wp_nav_menu( array(
                
                'theme_location'  => 'primary',                
                'container'     => 'div',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'    => 'nav navbar-nav'                
              ) );
            ?>
       
    </nav><!-- navbar -->
  </div>