<?php
require_once "../../vendors/Security/Security.php";
require_once "../../vendors/Redirect/Redirect.php";
require_once "../../vendors/FlashMessage/FlashMessage.php";

require_once __DIR__ . "/../models/Usuario.php";
require_once __DIR__ . "/../models/UsuarioModel.php";

class LoginController {

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function login(Usuario $user) {
        
        $rs = $this->model->login($user);

        if($rs) {
            $_SESSION[SessionConf::$sessionObj] = serialize($rs);   
            $_SESSION['usuario_nome'] = $rs->getNome();
            $_SESSION['usuario_id'] = $rs->getId();
            $_SESSION['usuario_email'] = $rs->getEmail();
           

            header('location: ../agendamento/agendamento.php');
            exit();
        } else {
            FlashMessage::setMessage("Usuário ou senha inválido", 0);
            header('location: ../Usuarios/login.php');
        }
    }

}