<?php

namespace Model;

use Model\Database;

class reserva {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM usuario";
    return $this->db->query($sql);
  }

  public function insereReserva($quarto,$numC,$numA,$dataE,$dataS,$extras,$idHotel,$idUser){
    if ($quarto == 1) {
      $valor = 600 + ($numA * 50) + ($numC * 20);
    }
    if ($quarto == 2) {
      $valor = 1500 + ($numA * 100) + ($numC * 50);
    }
    if ($quarto == 3) {
      $valor = 4800 + ($numA * 200) + ($numC * 100);
    }
    $sql = "INSERT INTO reserva(tipoQuarto, numCriancas, numAdultos, dataEntrada, dataSaida, extras, idUsuario, idHotel,valor)
    values ('$quarto','$numC','$numA','$dataE','$dataS','$extras','$idUser','$idHotel','$valor')";
    $this->db->query($sql);
    $aux = "INSERT INTO reserva(tipoQuarto, numCriancas, numAdultos, dataEntrada, dataSaida, extras, idUsuario, idHotel,valor)
    values ('{$quarto}','{$numC}','{$numA}','{$dataE}','{$dataS}','{$extras}','{$idUser}','{$idHotel}','{$valor}')";
    $sql2 = $this->db->prepare("INSERT INTO query(string) values (:string)");
    $sql2->bindParam(':string', $aux);
    $sql2->execute();
  }

  public function listMReserv(){
    session_start();
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM reserva WHERE idUsuario = '$id'";
    return $this->db->query($sql);
  }

  public function Alterar($quarto,$numC,$numA,$dataE,$dataS,$extras,$idHotel,$idUser){
    $sql = "UPDATE reserva(tipoQuarto, numCriancas, numAdultos, dataEntrada, dataSaida, extras, idUsuario, idHotel) SET ";
  }

  public function Deletar($id){
      $sql = "DELETE FROM reserva WHERE id = '$id'";
      $this->db->query($sql);

      $aux = "DELETE FROM reserva WHERE id = '{$id}'" ;
      $sql2 = $this->db->prepare("INSERT INTO query(string) values (:string)");
      $sql2->bindParam(':string', $aux);
      $sql2->execute();
  }

  public function listMReservas($id){
    $sql = "SELECT * FROM reserva WHERE idUsuario = '$id'";
    return $this->db->query($sql);
  }

  public function allR(){
    $sql = "SELECT * FROM reserva";
    return $this->db->query($sql);
  }

  public function allData($dataE){
    $sql = "SELECT * FROM reserva WHERE dataEntrada = '$dataE'";
    return $this->db->query($sql);
  }

}
