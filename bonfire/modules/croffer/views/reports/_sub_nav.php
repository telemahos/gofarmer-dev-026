<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/reports/croffer') ?>" id="list"><?php echo lang('croffer_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Croffer.Reports.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/reports/croffer/create') ?>" id="create_new"><?php echo lang('croffer_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>