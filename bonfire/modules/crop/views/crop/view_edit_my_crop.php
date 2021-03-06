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

<?php //print_r($crop);  print_r($crop_varieties)?>
<div class="" id='update_crop'>
    <h3><?php echo lang('crop_add_title'); ?></h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
      <fieldset>
        <legend></legend>
            <!-- Form Select Crop  -->
            <div class="control-group <?php echo form_error('crop_crops') ? 'error' : ''; ?>">
                <?php echo form_label(lang('crop_add_crop') . lang('bf_form_label_required'), 'crop_crops', array('class' => "control-label") ); ?>
                <div class='controls'>
                    <select name="crop_crops" id='crop_crops_up'>
                        <option value="0" disabled="disabled"><?php echo lang('crop_add_crop_select'); ?></option>
                        <?php if(isset($crop_crops)) : foreach ($crop_crops as $crops): ?>
                        <!-- Check to see if this crop is the current crop and select it -->
                          <?php if ($crops['crop_crops_id'] == $crop['crop']) : ?>
                            <!-- Make an selected control point -->
                            <?php if($mylang == "greek"): ?>
                                <option value="<?php echo $crops['crop_crops_id'] ?>"  selected> <!-- The selected option -->
                                    <?php echo $crops["crops_gr"]; ?>
                                </option>   
                            <?php else : ?> 
                                <option value="<?php echo $crops['crop_crops_id'] ?>"  selected> <!-- No selected option -->
                                    <?php echo $crops["crops_en"]; ?>
                                </option>   
                            <?php endif; ?>     
                            <!-- End of selected control point --> 
                          <!-- No Selected option -->
                          <?php else : ?>
                            <!-- Make an selected control point -->
                            <?php if($mylang == "greek"): ?>
                                <option value="<?php echo $crops['crop_crops_id'] ?>" > <!-- The selected option -->
                                    <?php echo $crops["crops_gr"]; ?>
                                </option>   
                            <?php else : ?> 
                                <option value="<?php echo $crops['crop_crops_id'] ?>" > <!-- No selected option -->
                                    <?php echo $crops["crops_en"]; ?>
                                </option>   
                            <?php endif; ?> <?php endif; ?>    
                            <!-- End of selected control point -->  
                        <?php endforeach; ?>
                        <?php else : ?>                             ??
                        <?php endif; ?>
                    </select> 
                </div>
            </div>

            <!-- Form Select Crop Variety  -->
            <div class="control-group">
            <?php echo form_label(lang('crop_add_variety'), 'variety', array('class' => "control-label") ); ?>
            <div class='controls'>
              <select id="variety_up" name="variety">
                <?php if(isset($crop_varieties)) : foreach ($crop_varieties as $varieties): ?>
                  <!-- Check to see if this crop is the current crop and select it -->
                  <?php if ($varieties['crop_variety_id'] == $crop['variety']) : ?>
                    <?php if($mylang == "greek"): ?>
                      <option value="<?php echo $varieties['crop_variety_id']; ?>" selected>
                        <?php echo $varieties["crop_variety_gr"]; ?>
                      </option>
                    <?php else : ?>
                      <option value="<?php echo $varieties['crop_variety_id']; ?>" selected>
                        <?php echo $varieties["crop_variety_en"]; ?>
                      </option>
                    <?php endif; ?> <!-- End of Greek  -->
                  <?php else: ?>
                    <?php if($mylang == "greek"): ?>
                      <option value="<?php echo $varieties['crop_variety_id']; ?>" >
                        <?php echo $varieties["crop_variety_gr"]; ?>
                      </option>
                    <?php else : ?>
                      <option value="<?php echo $varieties['crop_variety_id']; ?>" >
                        <?php echo $varieties["crop_variety_en"]; ?>
                      </option>
                    <?php endif; ?> <!-- End of Greek  -->
                  <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
              </select>
              <span class="help-inline" id="result">&nbsp;</span>
            </div>  
            </div>

          <!-- Form Select Crop Certification -->
          <?php $options  = array(0 => "?????????????????? ??????????????????????", 1 => "???????????????????????? ????????????????????", 2 => "?????????????????? ??????????????????????"); ?>
          <?php echo form_dropdown("certification" , $options, $crop['certification'],lang('crop_add_certification')  ); ?>
          
          <!-- Form Input Hectars-->
          <div class="control-group">
            <?php echo form_label(lang('crop_add_hectar'), 'hectar', array('class' => "control-label")); ?>
            <div class='controls'>
              <div class="input-append">
                <input id="hectar" type="text" name="hectar" maxlength="10" value="<?php if(isset($crop['hectar'])) : echo $crop['hectar']; endif; ?>" placeholder='?????????????? ???? ??????????????????' /><span class="add-on">??????.</span>
              </div>
              <span class="help-inline" id="result"><?php echo lang('crop_add_input_hectar_help') ?></span>
            </div>  
          </div>

          <!-- Form Textarea for Comments -->
          <div class="control-group">
            <?php echo form_label(lang('crop_add_comment'), 'comment', array('class' => "control-label")); ?>
            <div class='controls'>
              <textarea id="comment" name="comment" placeholder='????????????' rows="5"><?php if(isset($crop['comment'])) : echo $crop['comment']; endif; ?>
              </textarea>
              <span class="help-inline" id="result"><?php echo lang('crop_add_tarea_help') ?></span>
            </div>  
          </div>

          <!-- SUBMIT BUTTON --> 
        <div class="form-actions">
              <input type="submit" id='crop_sumbit_up' name="submit" class="btn btn-primary"  value="????????????????????" />
              <?php //echo lang('crop_add_or') ?> <?php echo anchor('/crop', lang('crop_cancel'), 'class="btn"'); ?>
          </div>

      </fieldset>
    <?php echo form_close(); ?>
</div>