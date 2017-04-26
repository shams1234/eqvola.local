<?php $this->load->view('layouts/header'); ?>
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="six columns header-title">
                    <div class="twelve columns welcome-header">
                        <h2>Welcome, <?php echo $user['u_name']; ?></h2>

                        <?php if ($this->session->flashdata('success_edit')) {?>
                            <span class="success notification"><?php echo $this->session->flashdata("success_edit") ;?></span>
                        <?php }?>
                        <?php if ($this->session->flashdata('error_edit')) {?>
                            <span class="error notification"><?php echo $this->session->flashdata("error_edit") ;?></span>
                        <?php }?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="six columns">

                    <div class="card">
                        <div class="user-avatar-large">
                            <?php echo img($user['u_avatar'], TRUE); ?>
                        </div>
                        <div class="card-container">
                            <div class="user-name">
                                <h4><?php echo $user['u_name'] . ' ' . $user['u_surname']; ?></h4>
                            </div>
                            <p><b>Email: </b><span><?php echo $user['u_email'] ;?></span></p>
                            <p><b>Phone: </b><span><?php echo $user['u_phone'] ;?></span></p>
                            <p><b>Dob: </b><span><?php echo $user['u_dob'] ;?></span></p>
                            <p><b>Country: </b><span><?php echo $user['u_country'] ;?></span></p>
                            <p><b>City: </b><span><?php echo $user['u_city'] ;?></span></p>
                            <p><b>Address: </b><span><?php echo $user['u_address'] ;?></span></p>
                            <p><b>Post Code: </b><span><?php echo $user['u_post_code'] ;?></span></p>
                            <p><b>Registered At: </b><span><?php echo $user['u_registered_at'] ;?></span></p>
                        </div>
                    </div>
                    <a class="button" href="<?php echo base_url('edit'); ?>">Edit profile</a>

                </div>
                <div class="six columns">
                    <div class="details">
                        <div class="header">
                            <h3>What is Lorem Ipsum?</h3>
                        </div>
                        <div class="body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h4>Why do we use it?</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                        <div class="footer">
                            <a class="logout button" href="<?php echo site_url('logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php $this->load->view('layouts/footer'); ?>