<?php

namespace Model;

use Model\Database;

class user {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM usuario";
    return $this->db->query($sql);
  }

  public function login($email, $senha) {
    $sql = "SELECT tipo,email,senha,id,nome FROM usuario WHERE senha = $senha AND email = '$email' ";
    return $this->db->query($sql);
  }

  public function nomeUser($id) {
    $sql = "SELECT nome FROM usuario WHERE id = $id ";
    return $this->db->query($sql);

  }
}
