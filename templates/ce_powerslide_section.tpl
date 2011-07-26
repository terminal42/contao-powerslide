
<?php if (!$this->first && $this->closeLink): ?></object></a><?php elseif (!$this->first): ?></object></div><?php endif; ?>
<?php if($this->openLink): ?>
<a href="<?php echo $this->href; ?>" class="<?php echo $this->class; ?><?php echo $this->first ? ' first' : ''; ?><?php echo $this->last ? ' last' : ''; ?> block"<?php echo $this->cssID; ?> style="width:<?php echo $this->width; ?>px;height:<?php echo $this->height; ?>px;<?php echo $this->style; ?><?php echo $this->background; ?>"<?php echo $this->target; ?>>
<?php else: ?>
<div class="<?php echo $this->class; ?><?php echo $this->first ? ' first' : ''; ?><?php echo $this->last ? ' last' : ''; ?> block"<?php echo $this->cssID; ?> style="width:<?php echo $this->width; ?>px;height:<?php echo $this->height; ?>px;<?php echo $this->style; ?><?php echo $this->background; ?>">
<?php endif; ?>
<object class="powerslide_section_inside">