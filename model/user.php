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

  public function registrarUser($nome,$cpf,$telefone,$email,$dataNasc,$senha){
    $sql = "INSERT INTO usuario(nome,cpf,telefone,email,datanasc,tipo,senha)
    values ('$nome','$cpf','$telefone','$email','$dataNasc','1','$senha')";
    $sql2 = "INSERT INTO query(sql) values ('$sql')";
  $this->db->query($sql2);
    $this->db->query($sql);

  }
}
