<h1>Welcome to your profile</h1>
<form method="post" action="<?php echo site_url();?>/profile/update">
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
</form>