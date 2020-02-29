<?php
require __DIR__ . '/../model/medicos.class.php';

class MedicosContr extends Medicos
{
  public function getMedicos()
  {
    return $this->selectMedicos();
  }
  public function createMedico($email, $nome, $senha, $endereco)
  {
    $this->insertMedico($email, $nome, $senha, $endereco);
  }
}
