<div class="albumCovers view">
<h2><?php  echo __('Album Cover'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['artist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Album'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['album']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filepath'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['filepath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Released'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['date_released']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($albumCover['AlbumCover']['date_added']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Album Cover'), array('action' => 'edit', $albumCover['AlbumCover']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Album Cover'), array('action' => 'delete', $albumCover['AlbumCover']['id']), null, __('Are you sure you want to delete # %s?', $albumCover['AlbumCover']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Album Covers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Cover'), array('action' => 'add')); ?> </li>
	</ul>
</div>
