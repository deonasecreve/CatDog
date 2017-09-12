<div class="col-lg-2 col-lg-offset-2">
<h1>Welcome</h1>
<?php if($this->session->userdata('id')==''){ ?>
<p>Click to <a href="<?php echo site_url();?>/main/register">Register</a></p>
<?php }else{ ?>
<p>Click to <a href="<?php echo site_url();?>/main/logout">Logout</a></p>
<?php } ?>
</div>