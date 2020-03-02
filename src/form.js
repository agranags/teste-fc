let params = new URLSearchParams(location.search);

var medicoEmail;

if (typeof params.get('id') !== 'undefined' && params.get('id') !== null) {
  $.get("./api/medicos.php?id=" + params.get('id'), function (data, status) {

    medico = JSON.parse(data)[0];
    document.getElementById("nome").value = medico.nome;
    document.getElementById("endereco").value = medico.endereco_consultorio;
    document.getElementById("email").value = medico.email;
    document.getElementById("email").disabled = true;
    medicoEmail = medico.email;
  });
}

//Calls the api to send the medico's data
function sendMedico() {
  event.preventDefault()

  edit = false;

  let params = new URLSearchParams(location.search);
  if (typeof params.get('id') !== 'undefined' && params.get('id') !== null) { //checks if the form is being used to edit an existing medico
    edit = true;
  }

  nome = document.getElementById("nome").value;
  endereco = document.getElementById("endereco").value;
  email = document.getElementById("email").value;
  senha = document.getElementById("senha").value;

  alert = "";
  valido = true;

  //validates the medico's data
  if (nome.length < 6 || nome.length > 112) {
    alert += "O nome deve ter entre 6 e 112 caracteres. "
    valido = false;
  }
  if (endereco.length < 6 || endereco.length > 112) {
    alert += "O endereço deve ter entre 6 e 112 caracteres. "
    valido = false
  }
  if (email.length < 6 || email.length > 112) {
    alert += "O email deve ter entre 6 e 112 caracteres. "
    valido = false
  }
  if (senha.length < 6 || senha.length > 112) {
    alert += "A senha deve ter entre 6 e 112 caracteres. "
    valido = false
  }
  
  if (valido) {
    document.getElementById("validationAlert").style = "display: none";
    if (edit) {
      $.post("./api/medicos.php", {
        nome: nome,
        endereco: endereco,
        email: email,
        senha: senha,
        id: params.get('id'),
      });
    } else {
      $.post("./api/medicos.php", {
        nome: nome,
        endereco: endereco,
        email: email,
        senha: senha,
      });
    }
    window.location.href = "./";
  } else {
    document.getElementById("validationText").innerText = alert;
    document.getElementById("validationAlert").style = "";
  }
}
