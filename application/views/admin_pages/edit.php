<div class="content-wrapper">
<?php
$attributes = array('class' => 'form-horizontal edit_form');
echo form_open(site_url().'/admin/edit/'. $user['id'], $attributes);
echo form_hidden('id', $user['id']);
?>
<fieldset>
  <div class="form-group">
    <label class="col-md-2" for="email">Email</label>
      <div class="col-md-6">
        <?php echo form_input(array(
            'name'=>'email', 
            'id'=> 'email',  
            'class'=>'form-control input-md', 
            'value'=> $user['email'])); ?>
        <?php echo form_error('email') ?>
      </div>
  </div>

  <div class="form-group">
    <label class="col-md-2" for="first_name">First name</label>
      <div class="col-md-6">
        <?php echo form_input(array(
            'name'=>'first_name', 
            'id'=> 'first_name', 
            'class'=>'form-control input-md', 
            'value'=> $user['first_name'])); ?>
        <?php echo form_error('first_name') ?>
      </div>
  </div>

  <div class="form-group">
    <label class="col-md-2" for="last_name">Last name</label>
      <div class="col-md-6">
        <?php echo form_input(array(
            'name'=>'last_name', 
            'id'=> 'last_name', 
            'class'=>'form-control input-md', 
            'value'=> $user['last_name'])); ?>
        <?php echo form_error('last_name') ?>
      </div>
  </div>

  <div class="form-group">
    <label class="col-md-2" for="password">Password</label>
      <div class="col-md-6">
        <?php echo form_password(array(
          'name' =>'password',
          'id' => 'password',
          'placeholder'=>'Password',
          'class' => 'form-control input-md')); ?>
        <?php echo form_error('password') ?>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2">Confirm password</label>
        <div class="col-md-6">
          <?php echo form_password(array(
            'name'=>'passconf',
            'id'=> 'passconf', 
            'placeholder'=>'Confirm Password', 
            'class'=>'form-control input-md', 
            'value'=> set_value('passconf'))); ?>
          <?php echo form_error('passconf') ?>
        </div> 
      </div> 

  <div class="form-group">
    <label class="col-md-2 control-label" for="singlebutton_login"></label>
    <div class="col-md-6">
      <?php echo form_submit(array('value'=>'Save', 'class'=>'btn btn-primary')); ?>
      <?php echo form_close(); ?>
    </div>
  </div>
</fieldset>
</div>