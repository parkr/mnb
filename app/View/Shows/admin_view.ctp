<div class="shows view">
<h2><?php  echo __('Show'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($show['Show']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($show['Show']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($show['Show']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($show['Show']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Show'), array('action' => 'edit', $show['Show']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Show'), array('action' => 'delete', $show['Show']['id']), null, __('Are you sure you want to delete # %s?', $show['Show']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Show'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('controller' => 'track_listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('controller' => 'track_listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
