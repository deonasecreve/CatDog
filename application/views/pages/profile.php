
<h1>Welcome to your profile</h1>
<form method="post" action="<?php echo site_url();?>/profile/update" enctype="multipart/form-data">
<br>
   <div id="uploadImage">
    <input type="file" accept="image/*" id="input"  name="profileImage">
    <img name="image" class="profileImage" src="<?=base_url()?>uploads/<?php echo $_SESSION['profile_image']; ?>" id="output"></input>
    </div>
    <br>
    Email:
    <br>
    <input type="input" name="Email" value="<?php echo $_SESSION['email']; ?>">
    <br> First name:
    <br>
    <input type="input" name="Firstname" value="<?php echo $_SESSION['first_name']; ?>">
    <br> Last name:
    <br>
    <input type="input" name="Lastname" value="<?php echo $_SESSION['last_name']; ?>">
    <br>
    <br>
    <br>
    <input type="submit" value="Submit">
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