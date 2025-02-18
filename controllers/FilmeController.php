<?php

require_once "../../models/FilmeModel.php";

class FilmeController {

    private $model;
    public $typeFiles = array('jpeg', 'jpg', 'png', 'bmp');
    public $thumbs = array('150' => '150', '250' => '250');

    function __construct()
    {
        $this->model = new FilmeModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Filme $c) {
        return $this->model->create($c);
    }

    public function edit(Filme $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

    public function editFile(Filme $c) {
        return $this->model->updateFile($c);
    }

    public function FindIdInserted() {
        return $this->model->FindIdInserted()['id'];
    }

    

}