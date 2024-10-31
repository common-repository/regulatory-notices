<?php
/*
    Plugin Name: Regulatory Notices
    Plugin URI:
    Description: Administrators can add or manage Regulatory, Complaince or Disclaimer notices in the site header, footer or post footer.
    Version: 1.0
    Author: Fern Leaf Consulting
    Author URI: http://fernleafconsulting.co.uk
    License: GNU General Public License (GPL) version 3
    @since 3.0.1
*/

if(!class_exists('FLCrn_class')) :
defined('ABSPATH') or die("Cannot access pages directly."); // security /codex.wordpress.org/Writing_a_Plugin
define('FLCRNPlugin_ID', 'FLCrn');
define('FLCRNPlugin_Name', 'Notices');
define( 'FLCRNBasename', plugin_basename( __FILE__ ) );

  class FLCrn_class
  {
    public static function file_path($file)
    {
      return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
    }
    public static function register()
    {
      register_setting(FLCRNPlugin_ID.'_options', 'FLCrn_site_head');
      register_setting(FLCRNPlugin_ID.'_options', 'FLCrn_site_footer');
      register_setting(FLCRNPlugin_ID.'_options', 'FLCrn_site_post');
    }
    public static function menu()
    {
      add_options_page(FLCRNPlugin_Name.' Plugin Options', FLCRNPlugin_Name, 'manage_options', FLCRNPlugin_ID.'_options', array('FLCrn_class', 'options_page'));
    }
    public static function options_page()
    {
      if (!current_user_can('manage_options'))
      {
      	wp_die(__('Only administrators can access notices'));
      }
      $plugin_id = FLCRNPlugin_ID;
      include(self::file_path('options.php'));
    }
    public static function output_site_head_option($head)
    {
      $code = get_option('FLCrn_site_head');
      echo $head . $code;
    }
    public static function output_site_footer_option($footer)
    {
      $code = get_option('FLCrn_site_footer');
      echo $footer . $code;
    }
    public static function output_site_post_option($post)
    {
	  if (is_single())
	  {
	      $code = get_option('FLCrn_site_post');
	      echo $post . $code;
      }
    }
  }
//Add additional options to the plugin page listing
	function filter_plugin_options($links, $file) {
		if ( $file == FLCRNBasename) {
			$new_links = array(
					sprintf( '<a href="options-general.php?page=%s">%s</a>', FLCRNPlugin_ID.'_options', __('Settings') ),
					sprintf( '<a Target="_blank" href="http://fernleafconsulting.co.uk/%s">%s</a>', 'plugins/regulatory-notices/', __('Plugin Page') )
				);
			$links = array_merge( $links, $new_links );
		}
	
		return $links;
	}
//Add a pointer to the setting menu		
	add_action( 'admin_enqueue_scripts', 'custom_admin_pointers_header' );
	
	function custom_admin_pointers_header() {
		if ( get_bloginfo( 'version' ) < '3.3' ) // Dont run if earlier version
    return;
	   if ( custom_admin_pointers_check() ) {
	      add_action( 'admin_print_footer_scripts', 'custom_admin_pointers_footer' );
	
	      wp_enqueue_script( 'wp-pointer' );
	      wp_enqueue_style( 'wp-pointer' );
	   }
	}
	
	function custom_admin_pointers_check() {
	   $admin_pointers = custom_admin_pointers();
	   foreach ( $admin_pointers as $pointer => $array ) {
	      if ( $array['active'] )
	         return true;
	   }
	}
	
	function custom_admin_pointers_footer() {
	   $admin_pointers = custom_admin_pointers();
	   ?>
	<script type="text/javascript">
	/* <![CDATA[ */
	( function($) {
	   <?php
	   foreach ( $admin_pointers as $pointer => $array ) {
	      if ( $array['active'] ) {
	         ?>
	         $( '<?php echo $array['anchor_id']; ?>' ).pointer( {
	            content: '<?php echo $array['content']; ?>',
	            position: {
	            edge: '<?php echo $array['edge']; ?>',
	            align: '<?php echo $array['align']; ?>'
	         },
	            close: function() {
	               $.post( ajaxurl, {
	                  pointer: '<?php echo $pointer; ?>',
	                  action: 'dismiss-wp-pointer'
	               } );
	            }
	         } ).pointer( 'open' );
	         <?php
	      }
	   }
	   ?>
	} )(jQuery);
	/* ]]> */
	</script>
	   <?php
	}
	
	function custom_admin_pointers() {
	   $dismissed = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
	   $version = '1_0'; // replace all periods in 1.0 with an underscore
	   $prefix = 'custom_admin_pointers' . $version . '_';
	
	   $new_pointer_content = '<h3>' . __( 'Regulatory Notices' ) . '</h3>';
	   $new_pointer_content .= '<p>' . __( 'Wondering where your new plugin settings are? Go to settings and then click Notices.' ) . '</p>';
	
	   return array(
	      $prefix . 'new_items' => array(
	         'content' => $new_pointer_content,
	         'anchor_id' => '#menu-settings',
	         'edge' => 'top',
	         'align' => 'left',
	         'active' => ( ! in_array( $prefix . 'new_items', $dismissed ) )
	      ),
	   );
	}
			
    global $wp_version;
	
	if (is_admin())	{
    	add_action('admin_init', array('FLCrn_class', 'register'));
		add_action('admin_menu', array('FLCrn_class', 'menu'));
	}
		add_action('wp_head', array('FLCrn_class', 'output_site_head_option'));
		add_action('wp_footer', array('FLCrn_class', 'output_site_footer_option'));
		add_action('the_content', array('FLCrn_class', 'output_site_post_option'));
	if ( version_compare( $wp_version, '2.8alpha', '>'))
		add_filter( 'plugin_row_meta', 'filter_plugin_options', 10, 2 ); // only 2.8 and higher
	endif;


?>