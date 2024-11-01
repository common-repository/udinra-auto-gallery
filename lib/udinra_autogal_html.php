<?php

?>
<div class="w3-card-4" style="width:100%;">
	<header class="w3-container w3-blue"><h1>Udinra Auto Gallery (Configuration)</h1></header>
	<form action="" method="post">
      <div class="w3-container">
		<input class="w3-input w3-border w3-light-grey" id="udinra_auto_gal_root" name="udinra_auto_gal_root" type="text" placeholder="If WordPress installed in Sub directory Enter Sub directory name without / else blank" value="<?php echo get_option('udinra_auto_gal_root'); ?>"> 
		<input class="w3-input w3-border w3-light-grey" id="udinra_auto_gal_dir" name="udinra_auto_gal_dir" type="text" placeholder="Enter Image Folder inside which Gallery Sub folders are created without /" value="<?php echo get_option('udinra_auto_gal_dir'); ?>">
		<input type="submit" class="w3-button w3-ripple w3-blue" name="save_option" id="save_option" value="Save Configuration Options" />
		<?php wp_nonce_field('udinra-autogal-nonce'); ?>
	</div>
	</form>
    <div class="w3-container">
		<a href="https://gallery.udinra.com" class="w3-button w3-ripple w3-yellow">Click for Auto Gallery Pro Demo</a>
		<a href="https://udinra.com/downloads/auto-gallery-fastest-galleries/" class="w3-button w3-ripple w3-pink">Buy Auto Gallery Pro</a>
	</div>
	<div class="w3-container">
		<ul class="w3-ul w3-card-4">
			<li><h2>How to use the plugin?</h2></li>
			<li class="w3-hover-teal">Create a folder inside your WordPress installation where you will keep all your Gallery images.</li>
			<li class="w3-hover-red">Create Sub folders for each Gallery and add images you want in that Gallery.</li>
			<li class="w3-hover-blue">It is better to have meaningful Sub folder names and Image file names.</li>
			<li class="w3-hover-green">Enter this Sub Folder Name on the New Visual Editor button option added by this plugin</li>
			<li class="w3-hover-yellow">For detailed documentation read <a href="https://udinra.com/docs/category/auto-gallery-pro/">Plugin Documentation</a></li>
		</ul>
	</div>
    <footer class="w3-container w3-blue">
		<p><?php echo "<h3>" . $udinra_auto_gal_response . "</h3>" ; ?></p>	
	</footer>
</div>
<?php
?>