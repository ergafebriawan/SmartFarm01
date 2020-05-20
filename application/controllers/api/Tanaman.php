<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Tanaman extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Tanaman_model', 'Tanaman');
    }

    public function index_get(){
        $id = $this->get('id');
        if($id === null){
            $tanaman = $this->Tanaman->getTanaman();
        }else{
            $tanaman = $this->Tanaman->getTanaman($id);
        }
        
        if($tanaman){
            $this->response([
                'status' => true,
                'data' => $tanaman
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Tanaman->deleteTanaman($id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                //not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'id_tanaman' => $this->post('id_tanaman'),
            'nama_tanaman' => $this->post('nama_tanaman'),
            'posisi' => $this->post('posisi'),
            'gcode' => $this->post('gcode'),
            'umur_tanaman' => $this->post('umur_tanaman'),
            'kadar_air' => $this->post('kadar_air'),
            'kadar_ph' => $this->post('kadar_ph')
        ];

        if($this->Tanaman->createTanaman($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'tanaman created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to created new tanaman'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id_tanaman');
        $data = [
            'id_tanaman' => $this->put('id_tanaman'),
            'nama_tanaman' => $this->put('nama_tanaman'),
            'posisi' => $this->put('posisi'),
            'gcode' => $this->put('gcode'),
            'umur_tanaman' => $this->put('umur_tanaman'),
            'kadar_air' => $this->put('kadar_air'),
            'kadar_ph' => $this->put('kadar_ph')
        ];

        if($this->Tanaman->updateTanaman($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'tanaman updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update tanaman'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

?>