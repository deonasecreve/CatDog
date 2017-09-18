<?php
$attributes = array('class' => 'form-horizontal edit_form');
echo form_open(site_url().'/main/edit/', $attributes);
?>
<fieldset>
<div class="form-group">
  <label class="col-md-2" for="first_name">First name</label>
    <div class="col-md-6">
      <?php echo form_input(array(
          'name'=>'first_name', 
          'id'=> 'first_name', 
          'placeholder'=>'first_name', 
          'class'=>'form-control input-md', 
          'value'=> set_value('first_name'))); ?>
      <?php echo form_error('first_name') ?>
    </div>
</div>

<div class="form-group">
  <label class="col-md-1" for="first_name">Usuario</label>  
  <div class="col-md-6">
  <input id="first_name" name="first_name" type="text" placeholder="Ingrese su username" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-1 " for="passwordinput_password">Password</label>
  <div class="col-md-6">
    <input id="passwordinput_password" name="passwordinput_password" type="password" placeholder="Ingrese su contraseña" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="singlebutton_login"></label>
  <div class="col-md-6">
    <button id="singlebutton_login" name="singlebutton_login" class="btn btn-primary" value="submit">edit</button>
  </div>
</div>

</fieldset>
</form>