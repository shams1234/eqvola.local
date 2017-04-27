<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * UserModel: shs
 * Date: 04/24/17
 * Time: 04:04 PM
 */
class User_Model extends CI_Model
{

    public function __construct()
    {
        parent:: __construct();

    }

    public function getAllUsersFromDb()
    {

        return $this->db->get('users')->result_array();

    }

    public function loginUser($u_email, $u_pwd)
    {

        $query = $this->db->get_where('users', array('u_email' => $u_email, 'u_pwd' => $u_pwd));

        if ($query->num_rows() > 0) {

            return TRUE;
        }

        return FALSE;
    }

    public function registerUser($user_data)
    {

        if ($user_data) {

            $this->db->insert('users', $user_data);

            return $this->db->insert_id();

        }

        return FALSE;

    }

    public function editUserProfile($user_data, $u_email)
    {

        $this->db->where('u_email', $u_email);
        $this->db->update('users', $user_data);

        return TRUE;

    }

    public function is_logged_in()
    {

        $logged_in = $this->session->userdata('is_logged_in');


        if ($logged_in === 'yes') {

            return TRUE;
        }

        return FALSE;

    }

    public function getRandomUserData()
    {

        $api_url = json_decode(file_get_contents('https://randomuser.me/api/'));

        $randomUserData = array(

            'u_avatar' => $api_url->results[0]->picture->large,
            'u_name' => $api_url->results[0]->name->first,
            'u_surname' => $api_url->results[0]->name->last,
            'u_dob' => $api_url->results[0]->dob,
            'u_phone' => $api_url->results[0]->phone,
            'u_city' => $api_url->results[0]->location->city,
            'u_address' => $api_url->results[0]->location->street,
            'u_country' => $api_url->results[0]->location->state,
            'u_post_code' => $api_url->results[0]->location->postcode,
            'u_email' => $api_url->results[0]->email,
            'u_updated_at' => date('Y-m-d H:i:s'),

        );

        return $randomUserData;

    }

    public function getUserByEmail($u_email)
    {

        $query = $this->db->get_where('users', array('u_email' => $u_email));

        return $query->row_array();

    }

}