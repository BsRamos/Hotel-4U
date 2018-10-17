<?php

namespace Controller;

use Model\hoteis;

class reservaController {

    public function listarTodos(){
    $hotel = new hoteis;
    $lista = $hotel->all();

    include './view/reserva/reservaView.php';
  }

  public function insereReserva(){

  }

}
