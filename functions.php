<?php // https://github.com/retlehs/roots/wiki

function roots_get_content_before() {
    echo '<div id="beforecontent" class="row">
            <div class="'.FULLWIDTH_CLASSES.'">
                <div class="hero-unit">
                    <h1><a class="" href="'.home_url().'">'.get_bloginfo('name').'</a></h1>
                    <p>'.get_bloginfo( 'description', 'display' ).'</p>
                </div>
            </div>
         </div>';
}

function rootsfusion_register_sidebars() {
  $sidebars = array('BottomLeftSidebar', 'BottomRightSidebar');

  foreach($sidebars as $sidebar) {
    register_sidebar(
      array(
        'id'            => 'rootsfusion-' . sanitize_title($sidebar),
        'name'          => __($sidebar, 'roots'),
        'description'   => __($sidebar, 'roots'),
        'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></article>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      )
    );
  }
}

?>
