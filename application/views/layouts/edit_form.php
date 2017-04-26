<h3 class="section-heading">Edit your profile</h3>


<?php echo  form_open('edit');?>
<?php echo isset($register_success) ? '<div class="success notification">' . $register_success . '</div>' : ''; ?>
<?php echo isset($register_error) ? '<div class="error notification">' . $register_error . '</div>' : ''; ?>

<div class="row">
    <div class="u-full-width">
        <label for="email-input">Email :</label>
        <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="u_email" name="u_email" value="<?= $userData['u_email']; ?>">
        <?php echo form_error('u_email','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="name-input">Name :</label>
        <input class="u-full-width" type="text" placeholder="Anton" id="u_name" name="u_name" value="<?= ucfirst($userData['u_name']); ?>">
        <?php echo form_error('u_name','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="surname-input">Surname :</label>
        <input class="u-full-width" type="text" placeholder="Shamseev" id="u_surname" name="u_surname" value="<?= ucfirst($userData['u_surname']); ?>">
        <?php echo form_error('u_surname','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="dob-input">Date of Birth :</label>
        <input class="u-full-width" type="date" placeholder="Shamseev" id="u_dob" name="u_dob" value="<?= date('Y-m-d', strtotime($userData['u_dob'])); ?>">
        <?php echo form_error('u_dob','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="phone-input">Phone :</label>
        <input class="u-full-width" type="text" placeholder="+xx(xxx)xxx-xxx-x" id="u_phone" name="u_phone" value="<?= $userData['u_phone']; ?>">
        <?php echo form_error('u_phone','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="country-input">Country or State :</label>
        <input class="u-full-width" type="text" placeholder="Ukraine" id="u_country" name="u_country" value="<?= ucfirst($userData['u_country']); ?>">
        <?php echo form_error('u_country','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="city-input">City :</label>
        <input class="u-full-width" type="text" placeholder="Zaporizhzhya" id="u_city" name="u_city" value="<?= ucfirst($userData['u_city']); ?>">
        <?php echo form_error('u_city','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="address-input">Address :</label>
        <input class="u-full-width" type="text" placeholder="Severnoe Shosse" id="u_address" name="u_address" value="<?= ucfirst($userData['u_address']); ?>">
        <?php echo form_error('u_address','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="post-code-input">Post code :</label>
        <input class="u-full-width" type="text" placeholder="69006" id="u_post_code" name="u_post_code" value="<?= $userData['u_post_code']; ?>">
        <?php echo form_error('u_post_code','<div class="error notification">','</div>'); ?>
    </div>

    <div class="u-full-width">
        <label for="pwd-input">Password :</label>
        <input class="u-full-width" type="password" id="u_pwd" name="u_pwd">
        <?php echo form_error('u_pwd','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="pwd-input">Password :</label>
        <input class="u-full-width" type="password" id="u_pwd_confirm" name="u_pwd_confirm">
        <?php echo form_error('u_pwd_confirm','<div class="error notification">','</div>'); ?>
    </div>

    <div class="u-full-width" id="image-preview">
        <label for="u_avatar" id="image-label">Choose Image</label>
        <input class="button-default" type="file" name="u_avatar" id="u_avatar" />
    </div>
</div>
<input class="button-default" type="submit" value="Edit" name="submit-edit" id="submit-edit">
<?php form_close();?>
