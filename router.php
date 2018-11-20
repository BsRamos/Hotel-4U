<?php

// Includes - framework
include './model/Database.php';
include './model/user.php';
include './model/hoteis.php';
include './model/reserva.php';
include './controller/userController.php';
include './controller/reservaController.php';

// Tratamento das rotas
use Controller\userController;
use Controller\reservaController;

$op = $_GET['op'];

// Definição das rotas


if ( $op == 1 ) {
  $userController = new userController;
  $userController->listarTodos();
}
if ( $op == 2 ) {
  $userController = new userController;
  $userController->acesso($_POST);
}
if ($op == 3) {
  $reservaController= new reservaController;
  $reservaController->listarTodos();
}

if ($op == 4){
  $reservaController = new reservaController;
  $reservaController->insereReserva($_POST);
}

if ($op == 5) {
  $userController = new userController;
  $userController->insereUser($_POST);
}

if($op == 6){
  $userController = new userController;
  $userController->retorno();
}
if ($op == 7){
  $reservaController = new reservaController;
  $reservaController->listarMyReservas();
}
if($op == 8){
  $reservaController = new reservaController;
  $reservaController-> alterarReserva($_GET);
}
if($op == 11){
  $reservaController = new reservaController;
  $reservaController-> removeReserva($_GET);
}
