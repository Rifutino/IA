<?php
  /**
   *
   */
  class Zonas_model extends CI_Model {

    function __construct() {
      parent::__construct();
    }

    public function all() {
      return $this->db->query('SELECT * FROM zonas')->result();
    }

    public function datos(){
      return $this->db->query("SELECT * FROM estudiantes e INNER JOIN desertores d ON e.id = d.id_estudiante")->result();
    }
  }


 ?>
