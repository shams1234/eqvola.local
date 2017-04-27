<h3 class="section-heading">Welcome to the registration page!</h3>
<?php echo  form_open('registration');?>
<?php echo isset($register_success) ? '<div class="success notification">' . $register_success . '</div>' : ''; ?>
<?php echo isset($register_error) ? '<div class="error notification">' . $register_error . '</div>' : ''; ?>
<div class="warning">
    <div class="row">
        <div class="two columns warning-header">
            <h5>Important:</h5>
        </div>
        <div class="ten columns">
            <p>All field are required!</p>
            <p>Fields have a random values from a <a target="_blank" href="https://randomuser.me/">randomuser.me</a> , You can leave as is or You can refill them. But do not forget to enter <a href="#u_pwd" class="attention">password</a> and it's confirmation!</p>
        </div>
    </div>
</div>
<div class="row">

    <div class="four columns">

        <div class="u-full-width">
            <label for="email-input">Email :</label>
            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="u_email" name="u_email" value="<?= $randomFields['u_email']; ?>">
            <?php echo form_error('u_email','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="name-input">Name :</label>
            <input class="u-full-width" type="text" placeholder="Anton" id="u_name" name="u_name" value="<?= ucfirst($randomFields['u_name']); ?>">
            <?php echo form_error('u_name','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="surname-input">Surname :</label>
            <input class="u-full-width" type="text" placeholder="Shamseev" id="u_surname" name="u_surname" value="<?= ucfirst($randomFields['u_surname']); ?>">
            <?php echo form_error('u_surname','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="dob-input">Date of Birth :</label>
            <input class="u-full-width" type="date" placeholder="Shamseev" id="u_dob" name="u_dob" value="<?= date('Y-m-d', strtotime($randomFields['u_dob'])); ?>">
            <?php echo form_error('u_dob','<div class="error notification">','</div>'); ?>
        </div>

    </div>
    <div class="four columns">

        <div class="u-full-width">
            <label for="phone-input">Phone :</label>
            <input class="u-full-width" type="text" placeholder="+xx(xxx)xxx-xxx-x" id="u_phone" name="u_phone" value="<?= $randomFields['u_phone']; ?>">
            <?php echo form_error('u_phone','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="country-input">Country or State :</label>
            <input class="u-full-width" type="text" placeholder="Ukraine" id="u_country" name="u_country" value="<?= ucfirst($randomFields['u_country']); ?>">
            <?php echo form_error('u_country','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="city-input">City :</label>
            <input class="u-full-width" type="text" placeholder="Zaporizhzhya" id="u_city" name="u_city" value="<?= ucfirst($randomFields['u_city']); ?>">
            <?php echo form_error('u_city','<div class="error notification">','</div>'); ?>
        </div>

    </div>
    <div class="four columns">

        <div class="u-full-width">
            <label for="address-input">Address :</label>
            <input class="u-full-width" type="text" placeholder="Severnoe Shosse" id="u_address" name="u_address" value="<?= ucfirst($randomFields['u_address']); ?>">
            <?php echo form_error('u_address','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="post-code-input">Post code :</label>
            <input class="u-full-width" type="text" placeholder="69006" id="u_post_code" name="u_post_code" value="<?= $randomFields['u_post_code']; ?>">
            <?php echo form_error('u_post_code','<div class="error notification">','</div>'); ?>
        </div>

        <div class="u-full-width">
            <label for="pwd-input">Password :</label>
            <input class="u-full-width" type="password" id="u_pwd" name="u_pwd">
            <?php echo form_error('u_pwd','<div class="error notification">','</div>'); ?>
        </div>
        <div class="u-full-width">
            <label for="pwd-confirm-input">Confirm password :</label>
            <input class="u-full-width" type="password" id="u_pwd_confirm" name="u_pwd_confirm">
            <?php echo form_error('u_pwd_confirm','<div class="error notification">','</div>'); ?>
        </div>

    </div>

</div>
<input class="button-default" type="submit" value="Register" name="submit-register" id="submit-register">
<?php echo anchor(site_url('/'),'Back','class="button back-link"'); ?>
<?php form_close();?>