<?php

namespace Model;

use Model\Database;

class hoteis {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM hotel";
    return $this->db->query($sql);
  }


}
