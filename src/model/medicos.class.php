<?php
require __DIR__ . '/../dbh.class.php';

class Medicos extends Dbh
{
  //gets the complete list of medicos and all their info
  protected function selectMedicos()
  {
    $sql = "SELECT * FROM medico";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function insertMedico($email, $nome, $senha, $endereco)
  {
    $sql = "INSERT INTO medico(email, nome, senha, endereco_consultorio)
            VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email, $nome, $senha, $endereco]);
  }
}
