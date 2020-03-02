<?php
require __DIR__ . '/../model/medicos.class.php';

class MedicosContr extends Medicos
{
  //Calls the database handler to get the medicos list
  public function getMedicos()
  {
    return $this->selectMedicos();
  }

  //Calls the database handler to get a specific medico
  public function getMedico($id)
  {
    return $this->selectMedico($id);
  }

  //validates the data and sends it to the database handler to create a new medico
  public function createMedico($email, $nome, $senha, $endereco)
  {
    if (
      strlen($email) >= 6 && strlen($email) <= 112 &&
      strlen($nome) >= 6 && strlen($nome) <= 112 &&
      strlen($senha) >= 6 && strlen($senha) <= 112 &&
      strlen($endereco) >= 6 && strlen($endereco) <= 112 &&
      filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {
      $senha = $this->encrypt($senha);
      $this->insertMedico($email, $nome, $senha, $endereco);
    }
  }

  //validates the data and sends it to the database handler to update a medico
  public function editMedico($nome, $senha, $endereco, $id)
  {
    if (
      strlen($nome) >= 6 && strlen($nome) <= 112 &&
      strlen($senha) >= 6 && strlen($senha) <= 112 &&
      strlen($endereco) >= 6 && strlen($endereco) <= 112
    ) {
      $senha = $this->encrypt($senha);
      $this->updateMedico($nome, $senha, $endereco, $id);
    }
  }

  //Calls the database handler to delete a medico
  public function removeMedico($id)
  {
    $this->deleteMedico($id);
  }

  //encrypts the password
  public static function encrypt($message)
  {
    $key = "bD&!K_k@+73Uz!yF";
    $ciphertext = openssl_encrypt(
      $message,
      'aes-256-ctr',
      $key,
      OPENSSL_RAW_DATA,
      "13561123139131ff"
    );
    return $ciphertext;
  }
}
