<?php
use Restserver\Libraries\REST_Controller;

class Teater extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('teater_model');
  }

  public function teaterdetail_get()
  {
    $where = '';
    if (null !== $this->get('id')) {
      $teater = $this->get('id');
      $where = "kode_event LIKE '" . $teater . "'" ;
    }
    $data = $this->teater_model->detail_teater($where);
    $this->response( [ 'teater' => $data ], 200 );
  }
}

 ?>
