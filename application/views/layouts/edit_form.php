<h3 class="section-heading">Edit your profile</h3>


<?php echo  form_open('edit');?>
<?php echo isset($register_success) ? '<div class="success notification">' . $register_success . '</div>' : ''; ?>
<?php echo isset($register_error) ? '<div class="error notification">' . $register_error . '</div>' : ''; ?>

<div class="row">
    <div class="u-full-width">
        <label for="email-input">Email :</label>
        <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="email-input" name="email-input" value="<?= $userData['u_email']; ?>">
        <?php echo form_error('email-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="name-input">Name :</label>
        <input class="u-full-width" type="text" placeholder="Anton" id="name-input" name="name-input" value="<?= ucfirst($userData['u_name']); ?>">
        <?php echo form_error('name-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="surname-input">Surname :</label>
        <input class="u-full-width" type="text" placeholder="Shamseev" id="surname-input" name="surname-input" value="<?= ucfirst($userData['u_surname']); ?>">
        <?php echo form_error('surname-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="dob-input">Date of Birth :</label>
        <input class="u-full-width" type="date" placeholder="Shamseev" id="dob-input" name="dob-input" value="<?= date('Y-m-d', strtotime($userData['u_dob'])); ?>">
        <?php echo form_error('dob-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="phone-input">Phone :</label>
        <input class="u-full-width" type="text" placeholder="+xx(xxx)xxx-xxx-x" id="phone-input" name="phone-input" value="<?= $userData['u_phone']; ?>">
        <?php echo form_error('phone-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="country-input">Country or State :</label>
        <input class="u-full-width" type="text" placeholder="Ukraine" id="country-input" name="country-input" value="<?= ucfirst($userData['u_country']); ?>">
        <?php echo form_error('country-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="city-input">City :</label>
        <input class="u-full-width" type="text" placeholder="Zaporizhzhya" id="city-input" name="city-input" value="<?= ucfirst($userData['u_city']); ?>">
        <?php echo form_error('city-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="address-input">Address :</label>
        <input class="u-full-width" type="text" placeholder="Severnoe Shosse" id="address-input" name="address-input" value="<?= ucfirst($userData['u_address']); ?>">
        <?php echo form_error('address-input','<div class="error notification">','</div>'); ?>
    </div>
    <div class="u-full-width">
        <label for="post-code-input">Post code :</label>
        <input class="u-full-width" type="text" placeholder="69006" id="post-code-input" name="post-code-input" value="<?= $userData['u_post_code']; ?>">
        <?php echo form_error('post-code-input','<div class="error notification">','</div>'); ?>
    </div>

    <div class="u-full-width">
        <label for="pwd-input">Password :</label>
        <input class="u-full-width" type="password" id="pwd-input" name="pwd-input">
        <?php echo form_error('pwd-input','<div class="error notification">','</div>'); ?>
    </div>

    <div class="u-full-width" id="image-preview">
        <label for="image-upload" id="image-label">Choose File</label>
        <input class="button-default" type="file" name="image" id="image-upload" />
    </div>
</div>
<input class="button-default" type="submit" value="Edit" name="submit-edit" id="submit-edit">
<?php form_close();?>
