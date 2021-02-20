<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Rooms extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }

  public function roomlist_get()
  {
    $data = $this->room_model->daftarkamar();
    $this->response([ 'rooms' => $data ], 200);
  }

  public function daftarkamar_get()
  {
    $data = $this->room_model->list_kamar();
    $this->response([ 'rooms' => $data ], 200);
  }
}

 ?>
