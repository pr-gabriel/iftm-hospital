<?php
require_once "../../vendors/Redirect/Redirect.php";
require_once "../../vendors/FlashMessage/FlashMessage.php";
require_once __DIR__ . "/../models/UsuarioModel.php";

class UsuarioController {

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Usuario $c) {
        return $this->model->create($c);
    }

    public function edit(Usuario $c) {
        return $this->model->update($c);
    }

    public function editPass(string $oldPass, string $newPass, string $confirmNewPass, int $id) {
        if ($newPass === $confirmNewPass) {
            $u = $this->model->findId($id);
            FlashMessage::setMessage("A senha foi atualizada, muito bem, nota 10 para você!😀", 1);
            if ($u->getSenha() == $oldPass) {
                $u->setSenha($newPass);
                return $this->model->updatePass($u);
            }
            //senha não confere com banco
            FlashMessage::setMessage("A senha não confere!", 0);
            Redirect::refresh();
        }
        // confirmação de senha errada
        FlashMessage::setMessage("A senha não confere!", 0);
        Redirect::refresh();
    }


    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}