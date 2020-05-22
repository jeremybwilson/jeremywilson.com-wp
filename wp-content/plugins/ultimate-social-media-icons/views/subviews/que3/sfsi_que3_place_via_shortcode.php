	<?php 

		$sfsi_show_via_shortcode  = isset($option9['sfsi_show_via_shortcode']) && !empty($option9['sfsi_show_via_shortcode']) ? $option9['sfsi_show_via_shortcode'] : "no"; 

		$checked 	 = '';
		$label_style = 'style="display:none;"';

		if("yes" == $sfsi_show_via_shortcode){
			$checked 	 = 'checked="true"';
			$label_style = 'style="display:block;"';
		}

	?>

		<li class="sfsi_show_via_shortcode">
			
			<div class="radio_section tb_4_ck" onclick="checkforinfoslction_checkbox(this);">
				<input name="sfsi_show_via_shortcode" <?php echo $checked; ?> type="checkbox" value="<?php echo $sfsi_show_via_shortcode; ?>" class="styled"  />
			</div>
			
			<div class="sfsi_right_info">
					
				<p>
					<span class="sfsi_toglepstpgspn">Place via shortcode</span><br>                    

					<div class="kckslctn" <?php echo $label_style;?>>
	                	
						<p>Please use the shortcode  <b>[DISPLAY_ULTIMATE_SOCIAL_ICONS]</b> to place the icons anywhere you want.</p> 

						<p>Or, place the icons directly into our (theme) codes by using <b>&lt;?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?&gt;</b></p>

						<p>Want to show icons <b>vertically</b> or <b>centralize the icons</b> in the shortcode container? Or need <b>different settings for mobile</b>?  Check out the <a href="https://www.ultimatelysocial.com/usm-premium/" target="_blank"><b>Premium Plugin.</b></a></p> 

	                </div>				
				</p>
			</div>		
			
		</li>
		

		<li class="sfsi_show_via_onhover  " style="display:none">
						<div class="radio_section tb_4_ck">
						<span class="checkbox" style="background-position:0px 0px!important;width:31px"></span>
						<input name="" type="checkbox" disable value="" class="hide" style="display:none;" />
						</div>
					<div class="sfsi_right_info">
							 <p style="display: inline-flex;">
							<span class="sfsi_toglepstpgspn" style="display:inline-block;float:left;">In your theme's header</span>
						</p>
						<p>
							Placing icons in your thene's header can be tricky / technical as CSS & PHP know-how is required (as every theme is different, no "automic" placement is possible).
						</p>
						<p>
							You can try via shortcode (see above), however if you don't want any hassle, check out our <span style="text-decoration: underline;">Premium plugin</span> where - as part of our service - we can place the icons for you, making theme adjustments
							where needed. This ensures perfect the perfect appearance (on all devices) for your icons. <a class="pop-up" style="cursor:pointer; color: #12a252 !important;border-bottom: 1px solid #12a252;text-decoration: none;font-weight: bold;" target="_blank">
							Get it now </a>
						</p>
						</div> 
					</li>