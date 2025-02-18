<?php

class Administrador {

private $admin;

// Método para verificar o e-mail e definir o status de administrador
public function isAdmin($email){
    // E-mail do administrador
    $adminEmail = "admin@gmail.com";

    // Verifica se o e-mail corresponde ao do administrador
    if ($email === $adminEmail) {
        $this->setAdm(1);  // Define como administrador
    } else {
        $this->setAdm(2);  // Define como não administrador
    }

    // Retorna o status
    return $this->getAdm();
}

public function getAdm(){
    return $this->admin;
}

// Define o status do administrador
public function setAdm($value) {
    $this->admin = $value;
}
}