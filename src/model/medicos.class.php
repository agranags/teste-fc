<?php
require __DIR__ . '/../dbh.class.php';

class Medicos extends Dbh
{
  //selects the complete list of medicos and all their info from the database
  protected function selectMedicos()
  {
    $sql = "SELECT id, email, nome, endereco_consultorio FROM medico";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  //selects a single medico from the database
  protected function selectMedico($id)
  {
    $sql = "SELECT id, email, nome, endereco_consultorio FROM medico WHERE id=?";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $results = $stmt->fetchAll();
    return $results;
  }

  //inserts a new medico on the database
  protected function insertMedico($email, $nome, $senha, $endereco)
  {
    $sql = "INSERT INTO medico(email, nome, senha, endereco_consultorio)
            VALUES (?, ?, ?, ?)";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email, $nome, $senha, $endereco]);
  }

  //updates a medico on the database
  protected function updateMedico($nome, $senha, $endereco, $id)
  {
    $sql = "UPDATE medico SET nome = ?, senha = ?, endereco_consultorio = ?  WHERE id = ?";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nome, $senha, $endereco, $id]);
  }

  //deletes a medico from the database
  protected function deleteMedico($id)
  {
    $sql = "DELETE FROM medico WHERE id=?";
    //statement
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}
