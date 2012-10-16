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
<div class="related">
	<h3><?php echo __('Related Track Listings'); ?></h3>
	<?php if (!empty($show['TrackListing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Show Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Artist'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($show['TrackListing'] as $trackListing): ?>
		<tr>
			<td><?php echo $trackListing['id']; ?></td>
			<td><?php echo $trackListing['show_id']; ?></td>
			<td><?php echo $trackListing['title']; ?></td>
			<td><?php echo $trackListing['artist']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'track_listings', 'action' => 'view', $trackListing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'track_listings', 'action' => 'edit', $trackListing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'track_listings', 'action' => 'delete', $trackListing['id']), null, __('Are you sure you want to delete # %s?', $trackListing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Track Listing'), array('controller' => 'track_listings', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
