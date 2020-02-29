/*document.write("This text comes from an external script.");
document.getElementById("bahs").innerText = "123";
document.getElementById("list").innerHTML= "new content";*/
$.get("./api/medicos.php", function (data, status) {
  
  //document.write("abc");
  medicos = JSON.parse(data);
  medicos.map(listMedicos);
  //alert("Data: " + data + "\nStatus: " + status);
});

function listMedicos(medico) {
  id = medico.id;
  nome = medico.nome;
  endereco = medico.endereco_consultorio;
  /*var html = `
  <div class="card bg-info">
    <div class="card-body text-center">
      <h5 class="card-title">`+ nome + `</h5>
      <p class="card-text">`+ endereco + `</p>
    </div>
  </div>`;*/
  var html = `
  <div id=`+ id + ` class="card float-left" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">`+ nome + `</h5>
      <p class="card-text">`+ endereco + `</p>
      <a href="`+ id + `" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>`;
  document.getElementById("list").innerHTML += html;
}