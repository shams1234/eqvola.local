<?php $this->load->view('layouts/header'); ?>
    <div class="section main">
        <div class="container">
            <div class="row">
                <div class="six columns header-title">
                    <div class="six columns welcome-header">
                        <h2>Welcome, <?php echo $user['u_name']; ?></h2>


                        <?php if ($this->session->flashdata('success_edit')) {?>
                            <span class="success notification"><?php echo $this->session->flashdata("success_edit") ;?></span>
                        <?php }?>
                        <?php if ($this->session->flashdata('error_edit')) {?>
                            <span class="error notification"><?php echo $this->session->flashdata("error_edit") ;?></span>
                        <?php }?>

                    </div>
                    <div class="six columns">
                        <a class="logout button" href="<?php echo site_url('logout'); ?>">Logout</a>
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
                            <p><span><b>Email: </b></span><?php echo $user['u_email'] ;?></p>
                            <p><span><b>Phone: </b></span><?php echo $user['u_phone'] ;?></p>
                            <p><span><b>Dob: </b></span><?php echo $user['u_dob'] ;?></p>
                            <p><span><b>Country: </b></span><?php echo $user['u_country'] ;?></p>
                            <p><span><b>City: </b></span><?php echo $user['u_city'] ;?></p>
                            <p><span><b>Address: </b></span><?php echo $user['u_address'] ;?></p>
                            <p><span><b>Post Code: </b></span><?php echo $user['u_post_code'] ;?></p>
                            <p><span><b>Registered At: </b></span><?php echo $user['u_registered_at'] ;?></p>
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
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php $this->load->view('layouts/footer'); ?>