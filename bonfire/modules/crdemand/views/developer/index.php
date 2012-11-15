<div class="admin-box">
	<h3>crdemand</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Crdemand.Developer.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>User Id</th>
					<th>Crop Id</th>
					<th>Variety Id</th>
					<th>Quantity</th>
					<th>Quantity Type Id</th>
					<th>Packaging Id</th>
					<th>Price</th>
					<th>Price Per</th>
					<th>Release Date</th>
					<th>Comment</th>
					<th>Deleted</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Crdemand.Developer.Delete')) : ?>
				<tr>
					<td colspan="14">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('crdemand_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Crdemand.Developer.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->id ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Crdemand.Developer.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/developer/crdemand/edit/'. $record->id, '<i class="icon-pencil">&nbsp;</i>' .  $record->user_id) ?></td>
				<?php else: ?>
				<td><?php echo $record->user_id ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->crop_id?></td>
				<td><?php echo $record->variety_id?></td>
				<td><?php echo $record->quantity?></td>
				<td><?php echo $record->quantity_type_id?></td>
				<td><?php echo $record->packaging_id?></td>
				<td><?php echo $record->price?></td>
				<td><?php echo $record->price_per?></td>
				<td><?php echo $record->release_date?></td>
				<td><?php echo $record->comment?></td>
				<td><?php echo $record->deleted > 0 ? lang('crdemand_true') : lang('crdemand_false')?></td>
				<td><?php echo $record->created_on?></td>
				<td><?php echo $record->modified_on?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="14">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>