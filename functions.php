<?php

function mytheme_customize_register( $wp_customize ) {
$wp_customize->add_section( 'themeslug_logo_section' , array(
'title'       => __( 'Logo', 'themeslug' ),
'priority'   => 30,
'description' => 'Upload a logo to replace the default site name and
description in the header',
) );
$wp_customize->add_setting( 'themeslug_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize, 'themeslug_logo', array(
'label'   => __( 'Logo', 'themeslug' ),
'section' => 'themeslug_logo_section',
'settings' => 'themeslug_logo',
) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function my_login_logo() { ?>
<style type="text/css">
body.login div#login h1 a {
background-image: none;
}
html {
	background-image: url('https://lh6.googleusercontent.com/-Sthr4w4tuhY/UFhu-7R_qCI/AAAAAAAABZk/ZZQRfz9VgVk/w1440-h1080-no/198069_10150166771950932_4594617_n.jpg');
	background-position: left top;
	background-repeat: repeat;
	}
body.login {
	background: transparent;
	}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>
