<div class="row-fluid">
	<div class="span12">

		<div id="wizard">
			<div class="span2 offset3 muted">
				<h4>1. Βήμα </h4>
				Προσωπικά στοιχεία
				<div class="progress">
			    	<div class="bar" style="width: 0%;"></div>
			    </div>
			</div>	
			<div class="span2 muted">
				<h4>2. Βήμα </h4>
				Προϊόντα που σε ενδιαφέρουν
				<div class="progress ">
			    	<div class="bar" style="width: 0%;"></div>
			    </div>
			</div>	
			<div class="span2 ">
				<h4>3. Βήμα </h4>
				Μεταφόρτωση εικόνας
				<div class="progress progress-striped active">
			    	<div class="bar" style="width: 100%;"></div>
			    </div>
			</div>	
		</div> <!-- End of id="wizard" -->

	</div> <!-- End of span12 -->
</div> <!-- End of row-fluid -->


<div class='row-fluid'>
	<div class='SPAN12'>
		
		<div class='span6 offset3'>
			<div class='well'>
				<?php if (validation_errors()) : ?>
					<div class="alert alert-block alert-error fade in ">
						<a class="close" data-dismiss="alert">&times;</a>
						<h4 class="alert-heading">Please fix the following errors :</h4>
					 	<?php echo validation_errors(); ?>
					</div>
				<?php endif; ?>

				<?php // Change the css classes to suit your needs
					if( isset($crop) ) {
					    $crop = (array)$crop;
					}
					$id = isset($crop['id']) ? $crop['id'] : '';
				?>
				<!-- <div><?php //if(isset($pics) ) : echo $pics; endif; ?></div> -->

				<div class="">
				    <h3>Μεταφόρτωση φωτογραφίας<?php // echo lang('croffer_title') ?></h3>
				    <p>Επέλεξε την περιοχή της φωτογραφίας που θα εμφανίζεται.</p>
				    <!-- <form class="form-horizontal"> -->
				    	<fieldset>
						<legend></legend>
							<!-- Add the products guest likes -->
							<div class="control-group <?php echo form_error('state') ? 'error' : ''; ?>">
						        <?php echo form_label("Φωτογραφία", 'state', array('class' => "control-label") ); ?>
						        <div class='controls'>
						        	
						        	<!--<form action="<?php //$this->uri->uri_string(); ?>" method="post" > -->
						        	<?php //echo form_open('wizard/wizard_guests/wizard_crop_image');  ?>
						        	<?php echo form_open($this->uri->uri_string());  ?>
						        		<!-- onsubmit="return checkCoords();" -->
										<!-- <input type="hidden" id="x" name="x" />
										<input type="hidden" id="y" name="y" />
										<input type="hidden" id="x2" name="x2" />
										<input type="hidden" id="y2" name="y2" />
										<input type="hidden" id="w" name="w" />
										<input type="hidden" id="h" name="h" /> -->
										<label>X1 <input type="text" size="4" id="x1" name="x1" /></label>
									      <label>Y1 <input type="text" size="4" id="y1" name="y1" /></label>
									      <label>X2 <input type="text" size="4" id="x2" name="x2" /></label>
									      <label>Y2 <input type="text" size="4" id="y2" name="y2" /></label>
									      <label>W <input type="text" size="4" id="w" name="w" /></label>
									      <label>H <input type="text" size="4" id="h" name="h" /></label>
										<img src="<?php echo base_url('assets/images/temp_img') . '/'. $gfusers->image;?>" id="target" /> <!-- onsubmit="return checkCoords();" -->
										<!-- <div style="width:100px;height:100px;overflow:hidden;">
            <img src="<?php //echo base_url('assets/images/temp_img') . '/'. $gfusers->image;?>" id="preview" alt="Preview" class="jcrop-preview" />
          </div> -->
										<input type="submit" name='submit' value="Crop Image" />
									</form>
						        	<!-- <input type='file'> -->
						        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
							    </div>
						    </div>

						    <div class="form-actions">
						    <!-- <div class="form-actions"> -->
						        <?php //echo anchor('wizard/wizard_guests',  '<i class="icon-circle-arrow-left"></i>&nbsp;Πίσω', 'class=""'); ?>&nbsp;&nbsp;
						        <?php //echo anchor('wizard/wizard_guests/wizard_guests_three',  'Παράβλεψη', 'class=""'); ?>&nbsp;&nbsp;
						        <?php //echo anchor('wizard/wizard/wizard_farmer_two',  'Αποθήκευση και συνέχεια', 'class="btn btn-primary"'); ?>
						        <!-- <input type="submit" name="save" class="btn btn-primary" value="Αποθήκευση και συνέχεια" /> -->
								<?php //if ($this->auth->has_permission('Gfusers.Content.Delete')) : ?>
							    <?php //endif; ?>
							<!-- </div> -->
							<!-- End of Form Actions -->
							</div>

						</fieldset>
				    <!-- </form> -->
				</div>

			</div> <!-- End of well -->
		</div> <!-- End of span6 offset3 -->
	</div> <!-- End of span12 -->
</div> <!-- End of row-fluid -->