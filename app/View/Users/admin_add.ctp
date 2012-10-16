<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('last_login');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Track Listing'), array('controller' => 'track_listings', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?></li>
	</ul>
</div>
