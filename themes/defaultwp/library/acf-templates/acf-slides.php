<?php
/* ACF slides template
 * vr. 1.0	
 * Abelltech 
 * uses Jquery cycle2 options
 * http://jquery.malsup.com/cycle2/api/
 *
 * @fieldname string 	1st parent field name
 * @caption boolean 	true/false to show caption field
 * @class string		class to be used on the main container
 * @nav   boolean		show/hide next and previous buttons
 * @page  boolean		show/hide slide pagination
 * @param string 		string of cycle2 options
 * Usage: take not we use a single one line string for integration
 * $param = 'data-cycle-fx="scrollHorz" data-cycle-timeout="2000"';
 * NOTES: convert usage parameters to more proper semantic array 
 */ 
 
function acfslider($atts){
	extract( shortcode_atts( array(
		'fieldname' => '',
		'caption' => 'false',
		'class'=> '',
		'nav'=> 'false',
		'pager'=> 'false',
		'param' => 'data-cycle-fx="scrollHorz" data-cycle-timeout="2000"',
		'optionpage' => 'option'
		), $atts ) );
	?>
	<div class="<?php echo $class; ?>">
	<?php if($nav){
		$param .= ' data-cycle-prev="#cycle2-prev" data-cycle-next="#cycle2-next"';
		?>
		<div id="cycle2-nav-controls">
			<span id="cycle2-prev">previous</span>
			<span id="cycle2-next">next</span>
		</div>	
	<?php } ?>
	<?php if($pager){ 
		$param .= ' data-cycle-pager="#custom-pager" data-cycle-pager-template="<a href=#> {{slideNum}} </a>"';
		?>
		<div id="custom-pager" class="center"></div>
	<? } ?>
		<div class="cycle-slideshow" data-cycle-slides="div" <?php echo $param; ?>>
			<?php
				if( get_field($fieldname,$optionpage) ){
					while( has_sub_field($fieldname,$optionpage) ){ ?>
						<div class="acf-slides">
							<img src="<?php the_sub_field('slide_image'); ?>" />
							<?php if($caption){ ?>
								<span class="acf-slides-caption"><?php the_sub_field('slider_caption'); ?></span>
							<?php } ?>
						</div>
					<?php }
				} ?>
		</div>
	</div>
<?php }
add_shortcode('acfslider', 'acfslider'); 
?>