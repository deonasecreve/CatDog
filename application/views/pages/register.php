<div class="col-lg-4 col-lg-offset-4">
    <h2>Hello There</h2>
    <h5>Please enter the required information below.</h5>    

<?php 
    $fattr = array('class' => 'form-signin' , 'enctype'=>'multipart/form-data');
    echo form_open('/main/register', $fattr); ?>
           <div id="uploadImage">
    <input type="file" accept="image/*" id="input" name="profileImage">
    <img name="image" class="profileImage" src="" id="output">
    </div>
     <br>
    <div class="form-group">
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
    </div>
    <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div>
    <script>
const input = document.getElementById('input');
const output = document.getElementById('output');
    input.addEventListener('change', (e) =>{
        console.log($('#input').val());
    
        //console.log(e.target.files[0]);
        const url = URL.createObjectURL(e.target.files[0]);
        output.src = URL.createObjectURL(e.target.files[0]);
        

    });
</script>