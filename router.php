<?php

// Includes - framework
include './model/Database.php';
include './model/user.php';
include './controller/userController.php';

// Tratamento das rotas
use Controller\userController;


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
