<?php

namespace Controller;

use Model\hoteis;
use Model\reserva;
use Model\user;

class reservaController {

    public function listarTodos(){
    $hotel = new hoteis;
    $lista = $hotel->all();

    include './view/reserva/reservaView.php';
  }

  public function listarMyReservas(){
    $reserva = new reserva;
    $lista = $reserva->listMReserv();
    include './view/reserva/historico.php'
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
    $reserva = new reserva;
    $reserva->insereReserva($quarto,$numC,$numA,$dataE,$dataS,$extras,$hotel,$usuario);
    echo "<script>alert('Reserva feita com sucesso')</script>";

    $user = new user;
    $lista2 = $user->nomeUser($_SESSION['id']);
    include './view/user/areaUser.php';
  }

}
