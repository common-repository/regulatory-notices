<div class="wrap">
  <?php screen_icon(); ?>
  <h2>Regulatory Notices</h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
  <form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
  <?php settings_fields($plugin_id.'_options'); ?>
    <label for="FLCrn_site_head">
      <h2 class="title">Site Header (adds text before the site header)</h2>
      <p><textarea name="FLCrn_site_head" rows="10" cols="50" id="FLCrn_site_head" class="large-text code"><?php echo get_option('FLCrn_site_head'); ?></textarea></p>
    </label>
    <label for="FLCrn_site_footer">
      <h2 class="title">Site Footer (adds text after the site footer)</h2>
      <p><textarea name="FLCrn_site_footer" rows="10" cols="50" id="FLCrn_site_footer" class="large-text code"><?php echo get_option('FLCrn_site_footer'); ?></textarea></p>
    </label>
        <label for="FLCrn_site_post">
      <h2 class="title">Optional Text (adds text to a post after the content)</h2>
      <p><textarea name="FLCrn_site_post" rows="10" cols="50" id="apf_optional_txt" class="large-text code"><?php echo get_option('FLCrn_site_post'); ?></textarea></p>
    </label>
    <!--

    
    			<fieldset class="options">
				<legend><h2>Optional Text:</h2><br />
					<p>Insert optional text or html code to the end of every post (for example credit or sponsor link). This section will be placed just before the technorati tag list. Use custom field <b>Key: "apf_option_txt"</b> to add a custom paragraph to a particular post. <a href="">more info</a></p>
					<textarea name="apf_optional_txt" id="apf_optional_txt" cols="20" rows="10" style="width: 80%; font-size: 14px;" class="code">' . stripslashes($options["apf_optional_txt"]) . '</textarea></p>
				</legend>
			</fieldset>
-->
    
    
<?php submit_button(); ?>
  </form>
      </div> <!-- post-body-content -->
      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">
            <a href="http://fernleafconsulting.co.uk" target="_blank"><img src="<?php echo (plugin_dir_url( __FILE__ ) . 'images/genericlogoh100.png'); ?>"></a>            
            <p>Should you need any help with this plugin feel free to use the support channel. Details of the plugin and its uses are available at <a href="http://fernleafconsulting.co.uk/plugins" target="_blank">Details Page.</a></p>
            <p>If you feel there are important details omitted from the <a href="http://wordpress.org/plugins/regulatory-notice/" target="_blank">Description</a>, <a href="http://wordpress.org/plugins/regulatory-notice/installation/" target="_blank">Installation</a> steps, etc. of the plugin, please report them in the <a href="http://wordpress.org/support/plugin/regulatory-notice" target="_blank">Support forum</a>. Thanks!</p>
      </div> <!-- #postbox-container-1 .postbox-container -->
    </div> <!-- #post-body .metabox-holder .columns-2 -->
    <br class="clear">
  </div> <!-- #poststuff -->
</div>