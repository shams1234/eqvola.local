<?php echo  form_open('login');?>

<div class="row">
    <div class="six columns">
        <label for="email-input">Email:</label>

        <input class="u-full-width" type="text" placeholder="test@mailbox.com" id="email-input" name="email-input">
        <?php echo isset($errors) ? $errors['email_error'] : ''; ?>
    </div>
    <div class="six columns">
        <label for="pwd-input">Password:</label>
        <input class="u-full-width" type="password" id="pwd-input" name="pwd-input">
        <?php echo isset($errors) ? $errors['pwd_error'] : ''; ?>
    </div>
</div>

<?php if ($this->session->flashdata('Error')) {?>
<span class="error notification"><?php echo $this->session->flashdata("Error") ;?></span>
<?php }?>
<div class="sbtBtns">

    <input class="button-default" type="submit" value="Login" name="submit-login">
    <?php echo anchor(site_url('registration'),'Need a registration?','class="registration-link"'); ?>
</div>

<?php form_close();?>
