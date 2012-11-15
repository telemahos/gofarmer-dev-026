<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/developer/followers') ?>" id="list"><?php echo lang('followers_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Followers.Developer.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/developer/followers/create') ?>" id="create_new"><?php echo lang('followers_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>