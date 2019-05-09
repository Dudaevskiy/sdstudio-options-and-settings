<?php


/* Кастомизированная страница входа в Wordpress */
function custom_login_css() {
	// echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/_SDStudio_login_styles.css" />';
	
	$sdstudio_logo_signin = carbon_get_theme_option( 'sdstudio_logo_signin' );
	$sdstudio_background_signin = carbon_get_theme_option( 'sdstudio_background_signin' );
	?>
	<style>

		/* Background WordPress Login Page */
		body.login {
/*		        background: linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255, 0.37)), transparent url('/Background_Image_for_login.jpg') center center/cover no-repeat fixed;*/
		        background: linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255, 0.37)), transparent url('<?php echo $sdstudio_background_signin; ?>') center center/cover no-repeat fixed;
		}

		/* Logo */
		  .login h1 a {
/*		  background-image: url(/wp-content/uploads/2018/10/logo-1.png) !important;*/
		  background-image: url(<?php echo $sdstudio_logo_signin; ?>) !important;
		  background-size: 150px 150px !important;
		  width: 150px !important;
		  height: 150px;
		  background-color: rgba(153, 152, 232, 0)white;
		  }

	</style>
	<!-- Подключение jQuery -->
	<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js'></script>
	<!-- JS код для страницы входа wp-admin - при клике по лого переходим на главную*/ -->

	<script>
	jQuery( document ).ready(function( $ ) {
	$('.login h1 a').on("click", function() {
	window.location.href='/';
	return false;
	  });
	});
	</script>";

	<?php
}
add_action('login_head', 'custom_login_css');


/**
* 
* @_ВЫХОД_С_САЙТА
* 
*/
/* Переадрисация при входе и выходе */
/*Выход - '/' */

add_action('wp_logout', 'wc_registration_redirect');

function wc_registration_redirect( $redirect_to) {
	
	$sdstudio_exit = carbon_get_theme_option( 'sdstudio_exit' );
//    wp_redirect( '/');
    wp_redirect($sdstudio_exit);
    exit;
}

?>