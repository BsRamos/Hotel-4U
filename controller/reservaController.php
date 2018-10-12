<?php

namespace Controller;

use Model\hotel;

class reservaController {

    public function listarTodos(){
    $hotel = new hotel;
    $lista = $hotel->all();

    include './view/reserva/reservaView.php';
  }

}
