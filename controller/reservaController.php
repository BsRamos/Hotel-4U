<?php

namespace Controller;

use Model\hoteis;
use Model\reserva;

class reservaController {

    public function listarTodos(){
    $hotel = new hoteis;
    $lista = $hotel->all();

    include './view/reserva/reservaView.php';
  }

  public function insereReserva($request){
    $quarto = $request['tipoQuarto'];
    $numC = $request['numC'];
    $numA = $request['numA'];
    $hotel = $request['id_hotel'];
    session_start();
    $usuario =$_SESSION['id'];
    $extras = $request['extra'];
    $dataE = $request['dataE'];
    $dataS = $request['dataS'];
    echo "<script>alert('Reserva feita com sucesso')</script>";
    $reserva = new reserva;
    $reserva->insereReserva($quarto,$numC,$numA,$dataE,$dataS,$extras,$hotel,$usuario);

    include './view/user/areaUser.php';

  }

}
