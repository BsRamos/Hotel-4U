<?php

namespace Controller;

use Model\user;

class userController {

    public function listarTodos(){
    $user = new user;
    $lista = $user->all();

    include './view/ini/todosUsuarios.php';
  }

  public function acesso($request){
    $user = new user;
    $email = $request['email'];
    $senha = $request['senha'];
    $lista = $user->login($email, $senha);

    foreach( $lista as $linha ){
    if($linha['tipo'] == 1){
      session_start();
      $_SESSION['id'] = $linha['id'];
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaUser.php';
      die();
      }
    if($linha['tipo'] == 2){
      session_start();
      $_SESSION['id'] = $linha['id'];
      $lista2 = $user->nomeUser($_SESSION['id']);
      include './view/user/areaFunc.php';
      die();
      }
    }
    print "<script> alert('usuario não encontrado.'); window.history.go(-1); </SCRIPT>\n";
  }

}