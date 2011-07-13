
<?php if (!$this->first): ?></div><?php endif; ?>
<div class="<?php echo $this->class; ?><?php echo $this->first ? ' first' : ''; ?><?php echo $this->last ? ' last' : ''; ?> block"<?php echo $this->cssID; ?><?php if ($this->style || $this->background): ?> style="<?php echo $this->style; ?><?php echo $this->background; ?>"<?php endif; ?>>
