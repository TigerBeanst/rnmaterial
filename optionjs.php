<?php
function optionsframework_custom_scripts() { ?>

<script type="text/javascript">

jQuery(document).ready(function() {

	jQuery('#beian_toggle').click(function() {
  		jQuery('#section-beian').fadeToggle(400);
	});
	
	if (jQuery('#beian_toggle:checked').val() !== undefined) {
		jQuery('#section-beian').show();
	}
	
});

jQuery(document).ready(function() {

	jQuery('#tongji_toggle').click(function() {
		jQuery('#section-tongji_text_toggle').fadeToggle(400);
  		jQuery('#section-tongji').fadeToggle(400);
	});
	
	if (jQuery('#tongji_toggle:checked').val() !== undefined) {
		jQuery('#section-tongji_text_toggle').show();
		jQuery('#section-tongji').show();
	}
	
});

jQuery(document).ready(function() {

	jQuery('#aliyunlogo').click(function() {
  		jQuery('#section-aliyunscr').fadeToggle(400);
	});
	
	if (jQuery('#aliyunlogo:checked').val() !== undefined) {
		jQuery('#section-aliyunscr').show();
	}
	
});


</script>
<?php
}
?>