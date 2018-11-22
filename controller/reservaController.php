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
    $listaM = $reserva->listMReserv();
    include './view/reserva/historico.php';
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
  public function removeReserva($request){
    $reserva = new reserva;
    $id = $request['id'];
    $reserva->Deletar($id);
    $listaM = $reserva->listMReserv();
    include './view/reserva/historico.php';
  }

  public function removeReservaFunc($request){
    $reserva = new reserva;
    $id = $request['id'];
    $reserva->Deletar($id);
    $listaM = $reserva->listMReservas($id);
    include './view/reserva/historicoFunc.php';
  }


  public function addReserva($request){
    $id = $request['id'];
    session_start();
    $_SESSION['idC'] = $id;
    $hotel = new hoteis;
    $lista = $hotel->all();
    include './view/reserva/reservaViewFunc.php';
  }

  public function insereReservaFunc($request){
    $quarto = $request['tipoQuarto'];
    $numC = $request['numC'];
    $numA = $request['numA'];
    $hotel = $request['id_hotel'];
    session_start();
    $usuario =$_SESSION['idC'];
    $extras = $request['extra'];
    $dataE = $request['dataE'];
    $dataS = $request['dataS'];
    $reserva = new reserva;
    $reserva->insereReserva($quarto,$numC,$numA,$dataE,$dataS,$extras,$hotel,$usuario);
    echo "<script>alert('Reserva feita com sucesso')</script>";

    $user = new user;
    $lista2 = $user->nomeUser($_SESSION['id']);
    include './view/user/areaFunc.php';
  }

  public function lista($request){
    $id = $request['id'];
    $reserva = new reserva;
    $listaM = $reserva->listMReservas($id);
    include './view/reserva/historicoFunc.php';
  }

  public function listarReserva(){
    $reserva = new reserva;
    $listaM = $reserva->allR();
    include './view/reserva/buscarReserva.php';
  }

  public function listarReservaData($request){
    $data = $request['dataE'];
    $reserva = new reserva;
    $listaM = $reserva->allData($data);
    include './view/reserva/buscarReserva.php';
  }
}
