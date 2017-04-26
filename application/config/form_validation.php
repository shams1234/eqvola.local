<?php
$config = array(
    'Users_Controller/login' => array(
        array(
            'field' => 'email-input',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email'
        ),
        array(
            'field' => 'pwd-input',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    ),
    'Users_Controller/registration' => array(
        array(
            'field' => 'u_email',
            'label' => 'Email',
            'rules' => 'required|valid_email|is_unique[users.u_email]'
        ),
        array(
            'field' => 'u_pwd',
            'label' => 'Password',
            'rules' => 'required|min_length[5]'
        ),
        array(
            'field' => 'u_pwd_confirm',
            'label' => 'Password Confirmation',
            'rules' => 'required|matches[u_pwd]'
        ),
        array(
            'field' => 'u_name',
            'label' => 'Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_surname',
            'label' => 'Surname',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_dob',
            'label' => 'Date of Birth',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_phone',
            'label' => 'Phone',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_country',
            'label' => 'Country',
            'rules' => 'required'
        ),

        array(
            'field' => 'u_city',
            'label' => 'City',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_address',
            'label' => 'Address',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_post_code',
            'label' => 'Post Code',
            'rules' => 'required'
        )
    ),
    'Users_Controller/edit' => array(
        array(
            'field' => 'u_email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'u_pwd',
            'label' => 'Password',
            'rules' => 'required|min_length[5]'
        ),
        array(
            'field' => 'u_pwd_confirm',
            'label' => 'Password Confirmation',
            'rules' => 'required|matches[u_pwd]'
        ),
        array(
            'field' => 'u_name',
            'label' => 'Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_surname',
            'label' => 'Surname',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_dob',
            'label' => 'Date of Birth',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_phone',
            'label' => 'Phone',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_country',
            'label' => 'Country',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_city',
            'label' => 'City',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_address',
            'label' => 'Address',
            'rules' => 'required'
        ),
        array(
            'field' => 'u_post_code',
            'label' => 'Post Code',
            'rules' => 'required'
        )
    )
);