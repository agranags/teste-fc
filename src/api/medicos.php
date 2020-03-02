<?php
require __DIR__ . '/../controller/medicoscontr.class.php';

$medicosContr = new MedicosContr();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //handles POST requests

  $nome = $_REQUEST['nome'];
  $senha = $_REQUEST['senha'];
  $endereco = $_REQUEST['endereco'];

  
  if (isset($_REQUEST['id'])) {   //handles editing an existing medico
  
    $medicosContr->editMedico($nome, $senha, $endereco, $_REQUEST['id']);

  } else {  //handles creating a new medico
  
    $email = $_REQUEST['email'];
    $medicosContr->createMedico($email, $nome, $senha, $endereco);

  }

} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {   //handles removing a medico

  if (isset($_REQUEST['id'])) {
    $medicosContr->removeMedico($_REQUEST['id']);
  }

} else {  //handles GET requests

  if (isset($_REQUEST['id'])) { //handles getting a specific medico

    echo json_encode($medicosContr->getMedico($_REQUEST['id']));

  } else {  //handles getting the complete list of medicos

    echo json_encode($medicosContr->getMedicos());

  }
}
