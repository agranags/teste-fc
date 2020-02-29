<?php
require __DIR__ . '/../controller/medicoscontr.class.php';

//echo __DIR__ . '/../controller/medicoscontr.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $medicosContr = new MedicosContr();
  $email = $_REQUEST['email'];
  $nome = $_REQUEST['nome'];
  $senha = $_REQUEST['senha'];
  $endereco = $_REQUEST['endereco'];

  $medicosContr->createMedico($email, $nome, $senha, $endereco);
}else if($_SERVER['REQUEST_METHOD'] === 'PATCH'){

} 
else {
  $medicosContr = new MedicosContr();
  //$medicos = $medicosContr->getMedicos();
  //echo var_export($medicos, true);
  /*foreach ($medicos as $medico) {
    echo $medico['nome'] . '<br />';
  }*/
  echo json_encode($medicosContr->getMedicos());

}
