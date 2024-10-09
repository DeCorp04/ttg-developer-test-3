<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $user = $this->user->getUser();
        } else {
            $user = $this->user->getUser($id);
        }
        if ($user) {
            $this->response([
                'status' => true,
                'data' => $user
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'User Tidak Ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Pastikan User Tersedia'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->user->deleteUser($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data User Berhasil Terhapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'User Tidak Ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'fullname' => $this->post('fullname'),
            'email' => $this->post('email'),
            'password' => password_hash($this->post('password'), PASSWORD_BCRYPT)
        ];

        if ($this->user->getEmailUser($data['email']) > 0) {
            $this->response([
                'status' => false,
                'message' => 'Email Tidak Dapat Digunakan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else if ($this->user->createUser($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data User Berhasil Ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data User Tidak Berhasil Ditambahkan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
