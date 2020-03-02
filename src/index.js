$.get("./api/medicos.php", function (data, status) {
  medicos = JSON.parse(data);
  medicos.map(listMedicos);
});

//Lists the medicos on the screen using cards
function listMedicos(medico) {
  id = medico.id;
  nome = medico.nome;
  endereco = medico.endereco_consultorio;

  var html = `
  <div id=`+ id + ` class="card float-left" style="width: 17rem;">
    <div class="card-body">
      <h5 class="card-title">`+ nome + `</h5>
      <p class="card-text">`+ endereco + `</p>
      <a href="./form.php?id=`+ id + `" class="btn btn-primary">Editar</a>
      <a href="" class="btn btn-danger" onclick="removeMedico(`+ id + `)">Remover</a>
    </div>
  </div>`;
  document.getElementById("list").innerHTML += html;
}

//Calls the api to remove the selected medico
function removeMedico(id) {
  event.preventDefault()
  $.ajax({
    url: './api/medicos.php?id=' + id,
    type: 'DELETE'
  });
  console.log(id);
  window.location.href = "./";
}