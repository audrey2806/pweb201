<?php
/**
 *
 */
class Teater_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function detail_teater($where= '')
  {
    /* SQL
    SELECT * FROM `event`
    INNER JOIN teater t ON(event.kode_event = t.kode_teater)
    WHERE kode_event LIKE '%gg%'
    */

    $this->db->join('event e', 'ON(e.kode_event = t.kode_teater)');
    if ( $where != '' ) $this->db->where($where);
    $query = $this->db->get('teater t');
    return $query->result();
  }

}
?>
