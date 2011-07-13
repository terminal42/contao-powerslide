<?php if ($this->closeLink): ?></a><?php else: ?></div><?php endif; ?>
</div></div>

<script type="text/javascript">
<!--//--><![CDATA[//><!--
var powerslide<?php echo $this->sliderId; ?>;
window.addEvent('domready', function() {
	powerslide<?php echo $this->sliderId; ?> = new PowerSlide({
		container: document.getElement('#<?php echo $this->articleId; ?> .ce_powerslide_container'),
		items: document.getElements('#<?php echo $this->articleId; ?> .ce_powerslide_section'),
		orientation: '<?php echo $this->orientation; ?>',
		slideTimer: <?php echo $this->interval; ?>,
		transitionTime: <?php echo $this->speed; ?>,
		transitionType: '<?php echo $this->transition; ?>',
		fade: <?php echo $this->fade; ?><?php if($this->buttons): ?>,
		prevBtn: document.getElement('#<?php echo $this->articleId; ?> .ce_powerslide_previous'),
		nextBtn: document.getElement('#<?php echo $this->articleId; ?> .ce_powerslide_next')<?php endif; ?><?php if($this->previews): ?>,
		navItems: document.getElements('#<?php echo $this->articleId; ?> .ce_powerslide_preview'),<?php endif; ?>
		
	});
	powerslide<?php echo $this->sliderId; ?>.start();
	
	new MooSwipe(document.getElement('#<?php echo $this->articleId; ?> .ce_powerslide_container'), {
		onSwipeLeft: function() {
			if (powerslide<?php echo $this->sliderId; ?>.isSliding == 0) {
				powerslide<?php echo $this->sliderId; ?>.direction = 1;
				powerslide<?php echo $this->sliderId; ?>.slideIt();
			}
		},
		onSwipeRight: function() {
			if (powerslide<?php echo $this->sliderId; ?>.isSliding == 0) {
				powerslide<?php echo $this->sliderId; ?>.direction = 0;
				powerslide<?php echo $this->sliderId; ?>.slideIt();
			}
		}
	});
});
//--><!]]>
</script>