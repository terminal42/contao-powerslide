
<div class="<?php echo str_replace('_setup', '', $this->class); ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if($this->buttons): ?>
<a href="#" class="ce_powerslide_button ce_powerslide_next"><span>Next</span></a>
<a href="#" class="ce_powerslide_button ce_powerslide_previous"><span>Previous</span></a>
<?php endif; ?>