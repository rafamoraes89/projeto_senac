function editar(id, nome, email, senha, nivelAcesso) {
  console.log(nome, id, email, senha, nivelAcesso)

  let container = document.querySelector('#container')

  let modalEditar = document.createElement('div')

  modalEditar.className = 'modalEditar'
  modalEditar.id = 'modalEditarId'

  //criar o formulário
  let form = document.createElement('form')
  form.action = 'processa_editar_clientes.php'
  form.method = 'post'

  // criar input para guardar o id da tarefa
  let inputId = document.createElement('input')
  inputId.type = 'hidden'
  inputId.name = 'id'
  inputId.value = id

  //criar os inputs para entrada de texto
  let inputNome = document.createElement('input')
  inputNome.type = 'text'
  inputNome.name = 'nome'
  inputNome.className = 'inputNome'
  inputNome.placeholder = 'nome'
  inputNome.value = nome

  let inputEmail = document.createElement('input')
  inputEmail.type = 'email'
  inputEmail.name = 'email'
  inputEmail.className = 'inputEmail'
  inputEmail.placeholder = 'E-mail'
  inputEmail.value = email

  let inputSenha = document.createElement('input')
  inputSenha.type = 'password'
  inputSenha.name = 'senha'
  inputSenha.className = 'inputSenha'
  inputSenha.placeholder = 'Senha'
  inputSenha.value = ''

  //cria label de título do form
  let labelTitulo = document.createElement('label')
  labelTitulo.innerHTML = 'Alterar'

  //criar o option e selects
  let select = document.createElement('select')
  select.name = 'nivel_de_acesso'
  select.className = 'nivelAcesso'
  let option1 = document.createElement('option')
  option1.value = 1
  let option2 = document.createElement('option')
  option2.value = 2
  //cria o label para o select
  let labelSelect = document.createElement('label')
  labelSelect.innerHTML = '1 Para administrador/ 2 para usuário'
  //função que coloca o valor recebido do nivel de acesso no option
  if (nivelAcesso == 1) {
    select.appendChild(option1)
    select.appendChild(option2)
  } else if (nivelAcesso == 2) {
    select.appendChild(option2)
    select.appendChild(option1)
  }

  option1.innerHTML = 1
  option2.innerHTML = 2

  //criar um button para o envio do form
  let inputSubmit = document.createElement('input')
  inputSubmit.type = 'submit'
  inputSubmit.className = 'btn btn-success inputSubmit'
  inputSubmit.innerHtml = 'atualizar'

  let inputClose = document.createElement('a')
  inputClose.className = 'btn btn-danger inputClose '
  inputClose.id = 'inputCloseId'
  inputClose.innerText = 'Fechar'

  //incluir inputs no form
  form.appendChild(labelTitulo)
  form.appendChild(inputNome)
  form.appendChild(inputEmail)
  form.appendChild(inputSenha)
  form.appendChild(labelSelect)
  form.appendChild(select)
  form.appendChild(inputClose)

  form.appendChild(inputId)

  //incluir button no form
  form.appendChild(inputSubmit)

  modalEditar.appendChild(form)
  console.log(container)
  container.appendChild(modalEditar)

  document
    .getElementById('inputCloseId')
    .addEventListener('click', function () {
      document.getElementById('modalEditarId').remove()
    })
}

function excluir(id) {
  let confirmar = window.confirm('Você realmente deseja excluir o registro?')
  let container = document.querySelector('#container')
  let Form = document.createElement('form')
  Form.action = 'processa_exclusao_clientes.php'
  Form.method = 'POST'
  Form.id = 'FormExcluir'

  let inputExcluir = document.createElement('input')
  inputExcluir.name = 'id'
  inputExcluir.value = id

  Form.appendChild(inputExcluir)
  container.appendChild(Form)

  if (confirmar) {
    document.querySelector('#FormExcluir').submit()
  } else {
    document.querySelector('#FormExcluir').remove()
  }
}
