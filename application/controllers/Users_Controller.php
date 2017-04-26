<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Controller extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();

        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('parser');

    }

    public function index() {

        if ($this->user_model->is_logged_in()) { redirect('profile'); }

            $data['title'] = 'Login';
            $data['main_content'] = 'layouts/login_form';

            $this->parser->parse('login_view', $data);

    }


    public function login() {

            if($this->form_validation->run() === TRUE) {

                $u_email = $this->input->post('email-input');
                $u_pwd = $this->input->post('pwd-input');

                if( $this->user_model->loginUser($u_email,$u_pwd)){

                    $session = array( 'session_id' => md5($u_pwd . $u_email),'u_email' => $u_email, 'is_logged_in' => 'yes');

                    $this->session->set_userdata($session);

                    redirect('profile');

                } else {

                    $this->session->set_flashdata('Error', 'Sorry password or email incorect! Please try again.');
                    redirect('/');

                }

            } else {

                $data ['errors'] = array(
                                'email_error' => form_error('email-input','<div class="error notification">','</div>'),
                                'pwd_error' => form_error('pwd-input','<div class="error notification">','</div>')

                )  ;

                $data['title'] = 'Login';
                $data['main_content'] = 'layouts/login_form';
                $this->parser->parse('login_view', $data);

            }
    }

    public function profile() {

        $u_email = $this->session->userdata('u_email');

        if (!$this->user_model->is_logged_in()) {
            $this->session->set_flashdata('Error', 'You must be logged in first.');
            redirect('/');
        }

        $data = array('title' => 'Profiler', 'user' => $this->user_model->getUserByEmail($u_email));

        $this->parser->parse('main_view', $data);

    }

    public function registration(){

        $randomData = $this->user_model->getRandomUserData();

        if ($this->user_model->is_logged_in()) { redirect('profile'); }

        $data['randomFields'] = $randomData;
        $data['title'] = 'Registration';
        $data['main_content'] = 'layouts/registration_form';

        if ($this->form_validation->run() === TRUE) {

            $user_data = $this->input->post();
            $user_data['u_avatar'] = $randomData['u_avatar'];
            $user_data['u_registered_at'] = date('Y-m-d H:i:s');


            unset($user_data['submit-register']);
            unset($user_data['u_pwd_confirm']);


//            $user_data = array(
//                'u_email' => $this->input->post('email-input'),
//                'u_pwd' => $this->input->post('pwd-input'),
//                'u_name' => $this->input->post('name-input'),
//                'u_surname' => $this->input->post('surname-input'),
//                'u_dob' => $this->input->post('dob-input'),
//                'u_country' => $this->input->post('country-input'),
//                'u_city' => $this->input->post('city-input'),
//                'u_address' => $this->input->post('address-input'),
//                'u_post_code' => $this->input->post('post-code-input'),
//                'u_phone' => $this->input->post('phone-input'),

//            );

            if ($this->user_model->registerUser($user_data)) {

                $data['register_success'] = 'Registration successful. <a href="'.site_url('login').'">Click here to login</a>.';

            } else { $data['register_error'] = 'Saving data failed. Contact administrator.'; }

        }

        $this->parser->parse('registration_view', $data);

    }


    public function edit(){

        $u_email = $this->session->userdata('u_email');
        $userData = $this->user_model->getUserByEmail($u_email);

        if (!$this->user_model->is_logged_in()) {
            $this->session->set_flashdata('Error', 'You must be logged in first.');
            redirect('/');
        }

        $data['userData'] = $userData;
        $data['title'] = 'Edit profile';
        $data['main_content'] = 'layouts/edit_form';

        if ($this->form_validation->run() === TRUE) {

            $user_data = array(
                'u_email' => $this->input->post('email-input'),
                'u_pwd' => $this->input->post('pwd-input'),
                'u_name' => $this->input->post('name-input'),
                'u_surname' => $this->input->post('surname-input'),
                'u_dob' => $this->input->post('dob-input'),
                'u_country' => $this->input->post('country-input'),
                'u_city' => $this->input->post('city-input'),
                'u_address' => $this->input->post('address-input'),
                'u_post_code' => $this->input->post('post-code-input'),
                'u_phone' => $this->input->post('phone-input'),
                'u_avatar' => $this->input->post('avatar-input'),
                'u_updated_at' => date('Y-m-d H:i:s') ,
            );

            if ($this->user_model->editUserProfile($user_data, $u_email)) {

                $this->session->set_flashdata('success_edit', 'Editing successful');

            } else {  $this->session->set_flashdata('error_edit', 'Somethig went wrong!'); }

                redirect('profile','refresh');
        }

        $this->parser->parse('edit_view', $data);

    }

    public function logout() {

        $this->session->unset_userdata('session_id');
        $this->session->unset_userdata('u_email');
        $this->session->sess_destroy();

        redirect('/');

    }


}