<div class="albumCovers form">
<?php echo $this->Form->create('AlbumCover'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Album Cover'); ?></legend>
	<?php
		echo $this->Form->input('artist');
		echo $this->Form->input('album');
		echo $this->Form->input('filepath');
		echo $this->Form->input('date_released');
		echo $this->Form->input('date_added');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Album Covers'), array('action' => 'index')); ?></li>
	</ul>
</div>
