</div><?php if ($this->closeLink): ?></a><?php else: ?></section><?php endif; ?>
</div></section>

<?php if($this->enableSlider): ?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
    var powerslide<?php echo $this->sliderId; ?>;
    window.addEvent('domready', function() {
    var powerslideContainer = document.getElement('.ce_powerslide_container');

    powerslide<?php echo $this->sliderId; ?> = new PowerSlide({
        container: powerslideContainer,
        items: document.getElements('.ce_powerslide_section'),
        orientation: '<?php echo $this->orientation; ?>',
        slideTimer: <?php echo $this->interval; ?>,
        transitionTime: <?php echo $this->speed; ?>,
        transitionType: '<?php echo $this->transition; ?>'<?php if($this->buttons): ?>,
        prevBtn: new Element('a', {'class':'ce_powerslide_button ce_powerslide_previous', html:'<span>Previous</span>'}).inject(powerslideContainer, 'before'),
        nextBtn: new Element('a', {'class':'ce_powerslide_button ce_powerslide_next', html:'<span>Next</span>'}).inject(powerslideContainer, 'before')<?php endif; ?><?php if($this->position): ?>,
        numNavActive: true,
        numNavHolder: new Element('ul', {'class':'ce_powerslide_position'}).inject(powerslideContainer, 'before')<?php endif; ?><?php if($this->previews): ?>,
        navItems: document.getElements('.ce_powerslide_preview'),
        navEvent: '<?php echo $this->navEvent; ?>'<?php endif; ?>
    });
    powerslide<?php echo $this->sliderId; ?>.start();

    new MooSwipe(powerslideContainer, {
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
<?php endif; ?>