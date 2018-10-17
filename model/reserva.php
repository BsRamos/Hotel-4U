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
    $sql = "INSERT INTO reserva(tipoQuarto, numCriancas, numAdultos, dataEntrada, dataSaida, extras, idUsuario, idHotel)
    values ('$quarto','$numC','$numA','$dataE','$dataS','$extras','$idUser','$idHotel')";
    $this->db->query($sql);
  }

}
